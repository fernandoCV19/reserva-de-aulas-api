<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosReserva;
    use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatosReservaController extends Controller
{
    /**
     * @OA\Post(
     *      path= "/datos-reserva",
     *      summary =  "Creacion de los datos de una reserva",
     *      tags = {"Datos Reserva"},
     * 
     *       @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(
     *                  property="numero_estimado", 
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="fecha", 
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="aulasId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="gruposId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="justificacionesLista", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="periodosId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *         ),
     *        
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function crearDatosReserva(Request $request){   
        $docenteId = DB::table("grupos")
        ->where("grupos.id", $request->gruposId[0])
        ->get()->first()->docente_id;
        

        $datos_reserva = new DatosReserva();
        $datos_reserva -> numero_estimado = $request->numero_estimado;
        $datos_reserva -> fecha = $request-> fecha;
        $datos_reserva -> docente_id = $docenteId;
        $datos_reserva -> save();
        

        $aulas = $request->aulasId;    
        
        foreach($aulas as $aulaId){
            $aulas_datos = DB::table("aula_datos_reserva")->insert([
                "id"=>Str::uuid()->toString(), 
                "datos_reserva_id" => $datos_reserva->id,
                "aula_id"=>$aulaId
            ]);
        }
        
        $grupos = $request->gruposId;
        foreach($grupos as $grupoId){
            $grupos_datos = DB::table("datos_reserva_grupo")->insert([
                "id"=>Str::uuid()->toString(), 
                "datos_reserva_id" => $datos_reserva->id,
                "grupo_id"=>$grupoId
            ]);
        }

        $justificaciones = $request->justificacionesLista;
        foreach($justificaciones as $mensaje){
            $justificacionCreada = 
            JustificacionController::crearJustificacion($mensaje,$datos_reserva->id);
        }
        
        $periodos = $request -> periodosId;
        foreach ($periodos as $periodoId) {
            $datos_periodo = DB::table("datos_reserva_periodo")->insert([
                "id"=>Str::uuid()->toString(), 
                "datos_reserva_id" => $datos_reserva->id,
                "periodo_id"=>$periodoId
            ]);
        }
        return $datos_reserva;
    }
    /**
     * @OA\Get(
     *      path= "/datos-reserva/{idDatosReserva}",
     *      summary =  "Obtencion de los datos de una reserva por id",
     *      tags = {"Datos Reserva"},
     * 
     *      @OA\Parameter(
     *          name="idDatosReserva",
     *          description="Id de un Dato Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),     
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function getDatosReservaById(){
        $id = request("idDatosReserva");
        return DatosReserva::findOrFail($id);
    }
    /**
     * @OA\Get(
     *      path= "/datos-reserva",
     *      summary =  "Obtencion de todos los datos reserva",
     *      tags = {"Datos Reserva"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function obtenerDatosReservas()
    {
        $reserva = DatosReserva::all();
        return $reserva;
    }
    /**
     * @OA\Get(
     *      path= "/datos-reserva/aulas/{idDatosReserva}",
     *      summary =  "Obtencion de las aulas de un datos reserva",
     *      tags = {"Datos Reserva"},
     * 
     *      @OA\Parameter(
     *          name="idDatosReserva",
     *          description="Id de un Dato Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),     
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function getAulasDatosReserva($idDatosReserva){        
        $aulas=DB::table('aulas')
            ->join('aula_datos_reserva', function ($join) use($idDatosReserva) {
                $join->on('aula_datos_reserva.aula_id',"=","aulas.id")
                ->where('aula_datos_reserva.datos_reserva_id', '=', $idDatosReserva);
            })
            ->get();
        $datosReserva = DatosReserva::find($idDatosReserva);
        $aulas_datos_reserva = ["datos_reserva"=>$datosReserva, "aulas"=>$aulas];        
        return  response()->json($aulas_datos_reserva, 200,[]);
        //return DatosReserva::find($idDatosReserva)->aulas;

    }

    /**
     * @OA\Delete(
     *      path= "/datos-reserva/aulas/{idDatosReserva}",
     *      summary =  "Obtencion de los datos de una reserva por id",
     *      tags = {"Datos Reserva"},
     * 
     *      @OA\Parameter(
     *          name="idDatosReserva",
     *          description="Id de un Dato Reserva",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),     
     *  @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="aulasId", 
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *         ),
     *        
     *    ),
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function deleteAulas(Request $request, $idDatosReserva){
        $aulas = $request->aulasId;    
        foreach($aulas as $aulaId){
           DB::table('aula_datos_reserva')
            ->where([['aula_id', "=",$aulaId],["datos_reserva_id", "=", $idDatosReserva]])->delete();
        }
    }
    /**
     * @OA\Get(
     *      path= "/datos-reserva/materia/{idDatosReserva}",
     *      summary =  "Obtencion de la materia asignada a un dato reserva",
     *      tags = {"Datos Reserva"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      ) 
     * )
     * 
     */
    public function getMateria(Request $request){
        $materia = DB::table('datos_reserva_grupo')
        ->where("datos_reserva_grupo.datos_reserva_id", $request->idDatosReserva)
        ->join("grupos", "grupos.id", "datos_reserva_grupo.grupo_id")
        ->join("materias","materias.id", "grupos.materia_id")
        ->get();
        return $materia->first();
    }
}
