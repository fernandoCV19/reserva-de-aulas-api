<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;


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
    public function getTodasAulas()
    {
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
    public function getPendientes()
    {
        $aulasOcupadas = DB::table('solicitud_reservas')
            ->join("datos_reservas", "datos_reservas.id", "=", "solicitud_reservas.datos_reserva_id")
            ->join("aula_datos_reserva", "aula_datos_reserva.datos_reserva_id", "=", "solicitud_reservas.datos_reserva_id")
            ->join("aulas", "aulas.id", "=", "aula_datos_reserva.aula_id")
            ->join("datos_reserva_periodo", "datos_reserva_periodo.datos_reserva_id", "=", "solicitud_reservas.datos_reserva_id")
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
    public function getDisponibles(Request $request)
    {
        $aulas = DB::table(DB::raw('aulas, periodos'))
        //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();
        
        return AulasController::anidarHorarios($request, $aulas);
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
    public function crearAula(Request $request)
    {
        $aula = new Aula();
        $aula->capacidad = $request->capacidad;
        $aula->nombre = $request->nombre;
        $aula->ubicacion = $request->ubicacion;
        $aula->descripcion = $request->descripcion;

        $aula->save();
        return $aula;
    }

    //Aulas en determinada area con fecha (fecha es obligatoria)
    public function filtrarAulasPorAreas(Request $request)
    {
       
        $aulas = DB::table(DB::raw('aulas, periodos'))
        //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            ->where("ubicacion", "=", request("area"))
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();

            
       return AulasController::anidarHorarios($request, $aulas);
    }
    
    public function filtrarAulasPorCantidad(Request $request)
    {
        $aulas = DB::table(DB::raw('aulas, periodos'))
        //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            ->where([["capacidad", ">=", $request->capacidadMin], ["capacidad", "<=", $request->capacidadMax]])
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();

        return AulasController::anidarHorarios($request, $aulas);
    }



    private function anidarHorarios(Request $request,$aulas){
        $aulasOcupadas = DB::table('aula_datos_reserva')
            ->join('aulas', 'aula_datos_reserva.aula_id', "=", "aulas.id")
            ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join('datos_reservas', 'datos_reservas.id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
            ->where("fecha", "=", $request->fecha)
            ->get();
        $aulasDisponibles = array();
        $bandera = false;
        $horarios = array();
        for ($j = 0; $j < sizeof($aulas); $j++) {
            for ($i = 0; $i < sizeof($aulasOcupadas); $i++) {
                if ($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre &&
                    $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio) {
                    $bandera = true;
                }
            }
            if ($j == sizeof($aulas) - 1) {

                if ($bandera == false) {
                    $horario = new \stdClass();
                    $horario->inicio = $aulas[$j]->hora_inicio;
                    $horario->fin = $aulas[$j]->hora_fin;
                    array_push($horarios, $horario);
                } else {
                    $bandera = false;
                }
                $aulaNueva = new \stdClass();
                $aulaNueva->id = $aulas[$j]->id;
                $aulaNueva->nombre = $aulas[$j]->nombre;
                $aulaNueva->ubicacion = $aulas[$j]->ubicacion;
                $aulaNueva->capacidad = $aulas[$j]->capacidad;
                $aulaNueva->descripcion = $aulas[$j]->descripcion;
                $aulaNueva->horarios = $horarios;
                $horarios = null;
                $horarios = array();
                array_push($aulasDisponibles, $aulaNueva);
            }
            if ($j - 1 >= 0 && $aulas[$j]->nombre != $aulas[$j - 1]->nombre) {
                $aulaNueva = new \stdClass();
                $aulaNueva->id = $aulas[$j - 1]->id;
                $aulaNueva->nombre = $aulas[$j - 1]->nombre;
                $aulaNueva->ubicacion = $aulas[$j - 1]->ubicacion;
                $aulaNueva->capacidad = $aulas[$j - 1]->capacidad;
                $aulaNueva->descripcion = $aulas[$j - 1]->descripcion;
                $aulaNueva->horarios = $horarios;
                $horarios = null;
                $horarios = array();

                array_push($aulasDisponibles, $aulaNueva);
                $horario = new \stdClass();
                $horario->inicio = $aulas[$j]->hora_inicio;
                $horario->fin = $aulas[$j]->hora_fin;

                array_push($horarios, $horario);
            } else {
                if ($bandera == false) {
                    $horario = new \stdClass();
                    $horario->inicio = $aulas[$j]->hora_inicio;
                    $horario->fin = $aulas[$j]->hora_fin;

                    array_push($horarios, $horario);
                } else {
                    $bandera = false;
                }

            }

        }
        return $aulasDisponibles;
    }

    public function filtrarAulasPorPeriodo(Request $request){
        $aulas=DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            -> where("hora_inicio","=",$request->periodoIni)
            -> orderBy('nombre',"ASC")
            -> orderBy('hora_inicio')
            -> get();
        
        return AulasController::anidarHorarios($request, $aulas);
    }

    public function filtrarGeneral(Request $request){
        $aulas = DB::table(DB::raw('aulas, periodos'))
        //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            ->where([["capacidad", ">=", $request->capacidadMin], ["capacidad", "<=", $request->capacidadMax], 
                     ["ubicacion", $request->area]])
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();
            

        $filtrado = AulasController::anidarHorarios($request, $aulas);
        $total = count($filtrado);
        $perPage = 5; // How many items do you want to display.
        $currentPage = 1; // The index page.
        $paginator = new LengthAwarePaginator($filtrado, $total, $perPage, $currentPage, [
            'path' => request()->url(),
            'query' => request()->query(),
        ]);
        
        return $paginator;
    }

    public function aulaEstado(Request $request){
        $aulasOcupadas = DB::table('aula_datos_reserva')
            ->join('aulas', 'aula_datos_reserva.aula_id', "=", "aulas.id")
            ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join('datos_reservas', 'datos_reservas.id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
            ->join ("solicitud_reservas","solicitud_reservas.datos_reserva_id", "=", "datos_reservas.id")
            ->where("fecha", "=", $request->fecha)
            ->where("hora_inicio","=",$request->periodoIni)
            ->where("nombre",    "=",$request->nombreAula)
            ->where("ubicacion","=",$request->ubicacionAula)
            ->get();

        if (sizeof($aulasOcupadas) > 0) {
            return response()->json([
                'estadoAula' => "CONFLICTO",
                //'estadoAula' => $aulasOcupadas[0],
            ], 200);
        }else{
            return response()->json([
                'estadoAula' => "LIBRE",
            ], 200);
        }
    }
}
