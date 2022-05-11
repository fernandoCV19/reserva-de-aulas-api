<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;
use Illuminate\Support\Facades\DB;

class AulasController extends Controller
{
    /**
     * @OA\Get(
     *      path= "/aula",
     *      summary =  "Obtencion de todas las aulas",
     *      tags = {"Aulas"},
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
    public function getTodasAulas(){
        return Aulas::all();
    }
    /**
     * @OA\Post(
     *      path= "/aula/pendientes",
     *      summary =  "Obtencion de las aulas que son parte de una solicitud de reserva pendiente en una fecha",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha", 
     *                  type="date"
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
    public function getPendientes(){
        $aulasOcupadas=DB::table('solicitud_reservas')
        ->join("datos_reservas", "datos_reservas.id","=", "solicitud_reservas.datos_reserva_id")
        ->join("aula_datos_reserva","aula_datos_reserva.datos_reserva_id", "=", "solicitud_reservas.datos_reserva_id")
        ->join("aulas", "aulas.id","=", "aula_datos_reserva.aula_id")
        ->join("datos_reserva_periodo","datos_reserva_periodo.datos_reserva_id", "=", "solicitud_reservas.datos_reserva_id")
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->where([["estado", "PENDIENTE"], ["fecha", request("fecha")]])
        ->get();

        return $aulasOcupadas;
    }
    /**
     * @OA\Post(
     *      path= "/aula/disponibles",
     *      summary =  "Obtencion de las aulas disponibles en una fecha",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha", 
     *                  type="date"
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
    public function getDisponibles(){        
        $aulasOcupadas=DB::table('aula_datos_reserva')
        ->join('aulas','aula_datos_reserva.aula_id',"=","aulas.id")
        ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id',"=","aula_datos_reserva.datos_reserva_id")
        ->join('datos_reservas','datos_reservas.id',"=","aula_datos_reserva.datos_reserva_id")
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->where("fecha", request("fecha"))
        ->get();
        $aulas=DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            -> orderBy('nombre',"ASC")
            -> orderBy('hora_inicio')
            -> get();
        $aulasDisponibles = array();
        $bandera =false;
        for ($j=0; $j < sizeof($aulas); $j++) { 
            for ($i=0; $i < sizeof($aulasOcupadas); $i++) { 
                          
               if($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre && 
               $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio){
                   $bandera = true;
               }
           }
           if($bandera == false){
                array_push($aulasDisponibles, $aulas[$j]);
           }
           else {
               $bandera = false;
           }
        }
        return  $aulasDisponibles;
    }
    /**
     * @OA\Post(
     *      path= "/aula",
     *      summary =  "Creacion de una nueva aula",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="capacidad", 
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="nombre", 
     *                  type="string"
     *               ),
     *               @OA\Property(
     *                  property="ubicacion", 
     *                  type="string"
     *               ),
     *               @OA\Property(
     *                  property="descripcion", 
     *                  type="string"
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
    public function crearAula(Request $request){
        $aula = new Aula();
        $aula -> capacidad = $request -> capacidad;
        $aula -> nombre = $request -> nombre;
        $aula -> ubicacion = $request -> ubicacion;
        $aula -> descripcion = $request -> descripcion;

        $aula -> save();
        return $aula;
    }

    //Aulas en determinada area con fecha (fecha es obligatoria)
    public function filtrarAulasPorAreas(Request $request){
        $aulasOcupadas=DB::table('aula_datos_reserva')
        ->join('aulas','aula_datos_reserva.aula_id',"=","aulas.id")
        ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id',"=","aula_datos_reserva.datos_reserva_id")
        ->join('datos_reservas','datos_reservas.id',"=","aula_datos_reserva.datos_reserva_id")
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->where("fecha","=",$request->fecha)
        ->get();
        $aulas=DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            -> where("ubicacion","=",$request->area)
            -> orderBy('nombre',"ASC")
            -> orderBy('hora_inicio')
            -> get();
        $aulasDisponibles = array();
        $bandera =false;
        for ($j=0; $j < sizeof($aulas); $j++) { 
            for ($i=0; $i < sizeof($aulasOcupadas); $i++) { 
                          
               if($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre && 
               $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio){
                   $bandera = true;
               }
           }
           if($bandera == false){
                array_push($aulasDisponibles, $aulas[$j]);
           }
           else {
               $bandera = false;
           }
        }
        return $aulasDisponibles;
    }

    public function filtrarAulasPorCantidad(Request $request){
        $aulasOcupadas=DB::table('aula_datos_reserva')
        ->join('aulas','aula_datos_reserva.aula_id',"=","aulas.id")
        ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id',"=","aula_datos_reserva.datos_reserva_id")
        ->join('datos_reservas','datos_reservas.id',"=","aula_datos_reserva.datos_reserva_id")
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->where("fecha","=",$request->fecha)
        ->get();
        $aulas=DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            -> where("capacidad","=",$request->capacidad)
            -> orderBy('nombre',"ASC")
            -> orderBy('hora_inicio')
            -> get();
        $aulasDisponibles = array();
        $bandera =false;
        for ($j=0; $j < sizeof($aulas); $j++) { 
            for ($i=0; $i < sizeof($aulasOcupadas); $i++) { 
                          
               if($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre && 
               $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio){
                   $bandera = true;
               }
           }
           if($bandera == false){
                array_push($aulasDisponibles, $aulas[$j]);
           }
           else {
               $bandera = false;
           }
        }
        return $aulasDisponibles;
    }

   
}
