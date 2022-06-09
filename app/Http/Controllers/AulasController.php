<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
    public function getTodasAulas()
    {
        return Aula::all();
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
            ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula",
            "ubicacion")
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();

        //echo($aulas);
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
    /**
     * @OA\Post(
     *      path= "/aula/areas",
     *      summary =  "Filtro de aulas por ubicación",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="area",
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
    public function filtrarAulasPorAreas(Request $request)
    {

        $aulas = DB::table(DB::raw('aulas, periodos'))
        //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            ->where("ubicacion", "=", request("area"))
            ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula","ubicacion")
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();

        return AulasController::anidarHorarios($request, $aulas);
    }
    /**
     * @OA\Post(
     *      path= "/aula/cantidad",
     *      summary =  "Filtro de aulas por capacidad",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="capacidadMin",
     *                  type="int"
     *               ),
     *              @OA\Property(
     *                  property="capacidadMax",
     *                  type="int"
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
    public function filtrarAulasPorCantidad(Request $request)
    {
        $aulas = DB::table(DB::raw('aulas, periodos'))
        //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            ->where([["capacidad", ">=", $request->capacidadMin], ["capacidad", "<=", $request->capacidadMax]])
            ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula","ubicacion")
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();

        return AulasController::anidarHorarios($request, $aulas);
    }
    /**
     * @OA\Post(
     *      path= "/aula/periodo",
     *      summary =  "Filtro de aulas por periodo",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="periodos",
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
    public function filtrarAulasPorPeriodo(Request $request)
    {
        $aulas=DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
            //-> where("hora_inicio","=",$request->periodoIni)
            ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula","ubicacion")
            -> orderBy('nombre',"ASC")
            -> orderBy('hora_inicio')
            -> get();
        $aulasTodas = array();

            if ($request->periodos != null) {
                $periodosRequest = $request->periodos;
                $bandera = false;
                for ($i = 0; $i < sizeof($aulas); $i++) {
                    for ($j = 0; $j < sizeof($periodosRequest); $j++) {
                        if (strcmp($aulas[$i]->hora_inicio, $periodosRequest[$j]) == 0) {
                            $bandera = true;
                        }
                    }
                    if ($bandera) {
                        array_push($aulasTodas, $aulas[$i]);
                        $bandera = false;
                    }
                }
            } else {
                $aulasTodas = $aulas;
            }    
        
        return AulasController::anidarHorarios($request, $aulasTodas);
    }
        /**
     * @OA\Post(
     *      path= "/aula/nombre",
     *      summary =  "Filtro de aulas por nombre",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="nombreAula",
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
    public function filtrarAulasPorNombre(Request $request)
    {

        $aulas = DB::table(DB::raw('aulas, periodos'))
            ->where("nombre", "=", request("nombreAula"))
            ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula","ubicacion")
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();

        return AulasController::anidarHorarios($request, $aulas);
    }
    /**
     * @OA\Post(
     *      path= "/aula/general",
     *      summary =  "Filtro de aulas general",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="periodos",
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="capacidadMin",
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="capacidadMax",
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="area",
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
    public function filtrarGeneral(Request $request)
    {
        if ($request->capacidadMin != null && $request->capacidadMax != null) {
            $aulas = DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
                ->where([["capacidad", ">=", $request->capacidadMin], ["capacidad", "<=", $request->capacidadMax]]) // ["ubicacion", $request->area]
                ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula",
                        "ubicacion")
                ->orderBy('nombre', "ASC")
                ->orderBy('hora_inicio')
                ->get();
        } else {
            $aulas = DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
                ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula",
                "ubicacion")    
                ->orderBy('nombre', "ASC")
                ->orderBy('hora_inicio')
                ->get();
        }

        $aulasTodas = array();

        if ($request->periodos != null) {
            $periodosRequest = $request->periodos;
            $bandera = false;
            for ($i = 0; $i < sizeof($aulas); $i++) {
                for ($j = 0; $j < sizeof($periodosRequest); $j++) {
                    if (strcmp($aulas[$i]->hora_inicio, $periodosRequest[$j]) == 0) {
                        array_push($aulasTodas, $aulas[$i]);
                        break;
                    }
                }
            }
        } else {
            $aulasTodas = $aulas;
        }
        
        if ($request->area != null) {
            $aulasPorArea = array();
            $area = $request->area;
            $bandera = false;
            for ($i = 0; $i < sizeof($aulasTodas); $i++) {
                if (strcmp($aulasTodas[$i]->ubicacion, $area) == 0) {
                    array_push($aulasPorArea, $aulasTodas[$i]);
                }
            }
            $aulasTodas = $aulasPorArea;
        }
        /*
        $filtrado = AulasController::anidarHorarios($request, $aulas);
        $total = count($filtrado);
        $perPage = 5; // How many items do you want to display.
        $currentPage = 1; // The index page.
        $paginator = new LengthAwarePaginator($filtrado, $total, $perPage, $currentPage, [
            'path' => request()->url(),
            'query' => request()->query(),
        ]);
        */
        return AulasController::anidarHorarios($request, $aulasTodas);
    }
    /**
     * @OA\Post(
     *      path= "/aula/estado-aula",
     *      summary =  "Obtencion del estado de un aula",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="periodoIni",
     *                  type="string"
     *               ),
     *               @OA\Property(
     *                  property="nombreAula",
     *                  type="string"
     *               ),
     *               @OA\Property(
     *                  property="ubicacionAula",
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
    public function aulaEstado(Request $request)
    {
        $aulasOcupadas = DB::table('aula_datos_reserva')
            ->join('aulas', 'aula_datos_reserva.aula_id', "=", "aulas.id")
            ->where('aulas.nombre', $request->nombreAula)
            ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join('datos_reservas', 'datos_reservas.id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
            ->join ("solicitud_reservas","solicitud_reservas.datos_reserva_id", "=", "datos_reservas.id")
            ->where("fecha", "=", $request->fecha)
            ->where("hora_inicio","=",$request->periodoIni)
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


    /**
     * @OA\Get(
     *      path= "/aula/infoAula",
     *      summary =  "Obtencion información de un aula",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="nombreAula",
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
    public function infoAulas (Request $request){
        return DB::table('aulas')
        ->where("nombre","=", $request->nombreAula)
        ->get();
    }

    /**
     * @OA\Get(
     *      path= "/aula/infoAula-ubicacion",
     *      summary =  "Obtencion información de un aula por ubicacion",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="ubicacion",
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
    public function infoAulasUbicacion (Request $request){
        return DB::table('aulas')
        ->where("ubicacion","=", $request->ubicacion)
        ->get();
    }

    /**
     * @OA\Get(
     *      path= "/aula/infoAula-capacidad",
     *      summary =  "Obtencion información de aulas por capacidad",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="capacidad",
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
    public function infoAulasCapacidad (Request $request){
        return DB::table('aulas')
        ->where("capacidad","=", $request->capacidad)
        ->get();
    }

    /**
     * @OA\Put(
     *      path= "/aula/modificar/{idAula}",
     *      summary =  "Modificar disponibilidad del aula",
     *      tags = {"Aulas"},
     * 
     *      @OA\Parameter(
     *          name="idAula",
     *          description="Id del aula",
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
    public function modificarAula (Request $request){
        $aula = DB::table('aulas') -> where ("id","=",$request->idAula)->first();
        if($aula->disponible_para_uso == 0){
            DB::table('aulas') -> where ("id","=",$request->idAula)->update(['disponible_para_uso'=>1]);
        }else{
            DB::table('aulas') -> where ("id","=",$request->idAula)->update(['disponible_para_uso'=>0]);
        }
        return response()->json([
            'message' => 'Cambiado.',
        ], 200);
    }
    private function anidarHorarios2(Request $request, $aulas) {
        $aulasOcupadas = DB::table('aula_datos_reserva')
            ->join('aulas', 'aula_datos_reserva.aula_id', "=", "aulas.id")
            ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join('datos_reservas', 'datos_reservas.id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
            ->where("fecha", "=", $request->fecha)
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();
        $aulasDisponibles = array();

        $bandera = false;    
        
        $horarios = array();
        

        for ($j = 0; $j < sizeof($aulas); $j++) {
            for ($i = 0; $i < sizeof($aulasOcupadas); $i++) {
                if ($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre &&
                    $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio) {
                    $bandera = true;                  
                    break;
                }
                else $bandera = false;
            }
            
            if ($j - 1 >= 0 && $aulas[$j]->nombre != $aulas[$j - 1]->nombre) {
                $aulaNueva = new \stdClass();
                $aulaNueva->idAula = $aulas[$j - 1]->idAula;
                $aulaNueva->nombre = $aulas[$j - 1]->nombre;
                $aulaNueva->ubicacion = $aulas[$j - 1]->ubicacion;
                $aulaNueva->capacidad = $aulas[$j - 1]->capacidad;
                $aulaNueva->descripcion = $aulas[$j - 1]->descripcion;
                $aulaNueva->horarios = $horarios;
                $horarios = null;
                $horarios = array();
                
                array_push($aulasDisponibles, $aulaNueva);
            }
            if ($bandera == false) {
                    
                $horario = new \stdClass();
                $horario->inicio = $aulas[$j]->hora_inicio;
                $horario->fin = $aulas[$j]->hora_fin;

                array_push($horarios, $horario);
            } else {
                $bandera = false;
            }

            if ($j == sizeof($aulas) - 1) {
                $aulaNueva = new \stdClass();
                
                $aulaNueva->id = $aulas[$j]->idAula;
                $aulaNueva->nombre = $aulas[$j]->nombre;
                $aulaNueva->ubicacion = $aulas[$j]->ubicacion;
                $aulaNueva->capacidad = $aulas[$j]->capacidad;
                $aulaNueva->descripcion = $aulas[$j]->descripcion;
                $aulaNueva->horarios = $horarios;
                
                array_push($aulasDisponibles, $aulaNueva);
            }
        }
        return $aulasDisponibles;
    }
    private function anidarHorarios(Request $request, $aulas)
    {
        $aulasOcupadas = DB::table('aula_datos_reserva')
            ->join('aulas', 'aula_datos_reserva.aula_id', "=", "aulas.id")
            ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join('datos_reservas', 'datos_reservas.id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
            ->where("fecha", "=", $request->fecha)
            ->orderBy('nombre', "ASC")
            ->orderBy('hora_inicio')
            ->get();
        $aulasDisponibles = array();

        $bandera = false;    
        
        $horarios = array();
        for ($j = 0; $j < sizeof($aulas); $j++) {
            
            for ($i = 0; $i < sizeof($aulasOcupadas); $i++) {
                if ($aulasOcupadas[$i]->nombre == $aulas[$j]->nombre &&
                    $aulasOcupadas[$i]->hora_inicio == $aulas[$j]->hora_inicio) {
                    $bandera = true;                  
                    break;
                }
                else $bandera = false;
            }
    
            if ($j == sizeof($aulas) - 1) {
                
                //$ultimaAula = $aulasDisponibles[sizeof($aulasDisponibles)-1];
                
                if ($bandera == false) {
                    $horario = new \stdClass();
                    $horario->inicio = $aulas[$j]->hora_inicio;
                    $horario->fin = $aulas[$j]->hora_fin;
                    array_push($horarios, $horario);
                } else {
                    $bandera = false;
                }
                $aulaNueva = new \stdClass();
                
                $aulaNueva->id = $aulas[$j]->idAula;
                $aulaNueva->nombre = $aulas[$j]->nombre;
                $aulaNueva->ubicacion = $aulas[$j]->ubicacion;
                $aulaNueva->capacidad = $aulas[$j]->capacidad;
                $aulaNueva->descripcion = $aulas[$j]->descripcion;
                $aulaNueva->horarios = $horarios;
                
                array_push($aulasDisponibles, $aulaNueva);
            }
            else if ($j - 1 >= 0 && $aulas[$j]->nombre != $aulas[$j - 1]->nombre) {
                $aulaNueva = new \stdClass();
                $aulaNueva->idAula = $aulas[$j - 1]->idAula;
                $aulaNueva->nombre = $aulas[$j - 1]->nombre;
                $aulaNueva->ubicacion = $aulas[$j - 1]->ubicacion;
                $aulaNueva->capacidad = $aulas[$j - 1]->capacidad;
                $aulaNueva->descripcion = $aulas[$j - 1]->descripcion;
                $aulaNueva->horarios = $horarios;
                $horarios = null;
                $horarios = array();
                
                array_push($aulasDisponibles, $aulaNueva);
                
              
                $horario = new \stdClass();
                if($bandera == false){
                    $horario->inicio = $aulas[$j]->hora_inicio;
                    $horario->fin = $aulas[$j]->hora_fin;

                    array_push($horarios, $horario);
                }
                else $bandera = false;
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

    /**
     * @OA\Post(
     *      path= "/aula/sugerenciaReserva",
     *      summary =  "Filtro de aulas general",
     *      tags = {"Aulas"},
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *               @OA\Property(
     *                  property="fecha",
     *                  type="date"
     *               ),
     *               @OA\Property(
     *                  property="periodos",
     *                  type="array",
     *                  @OA\Items(
     *                      type="string"
     *                  ),
     *               ),
     *               @OA\Property(
     *                  property="capacidadMin",
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="capacidadMax",
     *                  type="int"
     *               ),
     *               @OA\Property(
     *                  property="area",
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
    public function darSugerenciaDeReserva(Request $request){
        if ($request->capacidadMin != null && $request->capacidadMax != null) {
            $aulas = DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
                ->where([["capacidad", ">=", $request->capacidadMin], ["capacidad", "<=", $request->capacidadMax]]) // ["ubicacion", $request->area]
                ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula",
                        "ubicacion")
                ->orderBy('nombre', "ASC")
                ->orderBy('capacidad', "DESC")
                ->orderBy('hora_inicio')
                ->get();
        } else {
            $aulas = DB::table(DB::raw('aulas, periodos'))
            //-> select(["nombre", "hora_inicio", "hora_fin, capacidad, descripcion "])
                ->select("aulas.nombre", "hora_inicio", "hora_fin", "capacidad", "descripcion", "aulas.id as idAula",
                "ubicacion")    
                ->orderBy('nombre', "ASC")
                ->orderBy('capacidad', "DESC")
                ->orderBy('hora_inicio')
                ->get();
        }

        $aulasTodas = array();

        if ($request->periodos != null) {
            $periodosRequest = $request->periodos;
            $bandera = false;
            for ($i = 0; $i < sizeof($aulas); $i++) {
                for ($j = 0; $j < sizeof($periodosRequest); $j++) {
                    if (strcmp($aulas[$i]->hora_inicio, $periodosRequest[$j]) == 0) {
                        array_push($aulasTodas, $aulas[$i]);
                        break;
                    }
                }
            }
        } else {
            $aulasTodas = $aulas;
        }
        
        if ($request->area != null) {
            $aulasPorArea = array();
            $area = $request->area;
            $bandera = false;
            for ($i = 0; $i < sizeof($aulasTodas); $i++) {
                if (strcmp($aulasTodas[$i]->ubicacion, $area) == 0) {
                    array_push($aulasPorArea, $aulasTodas[$i]);
                }
            }
            $aulasTodas = $aulasPorArea;
        }

        if($request->capacidadMax > 150){
            $aulasSeleccionadas = array();
            $capacidadActual = 0;
            $capacidadObjetivo = $request -> capacidadMax;
            $i = 0;
            while ($i < sizeof($aulasTodas) && $capacidadActual < $capacidadObjetivo) {
                $aulaAux = $aulasTodas[$i];
                array_push($aulasSeleccionadas, $aulaAux);
                $capacidadActual = $capacidadActual + $aulaAux -> capacidad;
                $i = $i + 1;
                echo $i;
            }

            $aulasTodas = $aulasSeleccionadas;
        }else{
            $aulasTodas = $aulasTodas[0];
        }

        return AulasController::anidarHorarios2($request, $aulasTodas);
    }
}
