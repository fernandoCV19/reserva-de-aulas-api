<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\SolicitudReserva;
use App\Models\DatosReserva;
use Illuminate\Support\Facades\DB;
use App\Models\Notificacion;

use Exception;

class SolicitudReservaController extends Controller
{
    /**
     * @OA\Post(
     *      path= "/solicitud-reserva",
     *      summary =  "Creacion de una solicitud de reserva",
     *      tags = {"Solicitud de reservas"},
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

    public function crearSolitud(Request $request)
    {
        $datos_reserva = DatosReservaController::crearDatosReserva($request);
        
        $solicitud_reserva  = new SolicitudReserva();
        $solicitud_reserva ->estado ="PENDIENTE";
        $solicitud_reserva ->fecha_creacion = now();
        $solicitud_reserva ->datos_reserva_id = $datos_reserva->id;
        $solicitud_reserva->save();

        

        $docentes = DB::table("datos_reserva_grupo")
        ->where("datos_reserva_grupo.datos_reserva_id", $solicitud_reserva -> datos_reserva_id)
        -> join("grupos", "datos_reserva_grupo.grupo_id", "grupos.id")
        -> join("docentes", "docentes.id", "grupos.docente_id")
        -> get();

        for($i=0; $i<sizeof($docentes); $i++){
            $notificacion = new Notificacion();
            $notificacion -> mensaje = "La solicitud de reserva ha sido realizada con exito";
            $notificacion ->docente_id = $docentes[$i]->docente_id;
            $notificacion -> fecha = now();
            $notificacion -> save();
        }

        return $solicitud_reserva;
    }
    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/{idSolicitud}",
     *      summary =  "Obtencion de una solicitud de reserva apartir de un id",
     *      tags = {"Solicitud de reservas"},
     * 
     *      @OA\Parameter(
     *          name="idSolicitud",
     *          description="Id de la Solicitud de Reserva",
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
    public function getSolicitudPorId(Request $request){
        $solicitud =  SolicitudReserva::where("id","=",$request->idSolicitud)->get();
        $complete = array();
        for($i = 0; $i<sizeof($solicitud); $i++){ 
            $docentes = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id", $solicitud[$i]->datos_reserva_id)
            ->join("grupos", "datos_reserva_grupo.grupo_id","grupos.id")
            ->join("docentes", "grupos.docente_id", "docentes.id")
            
            ->select("docentes.nombre", "docentes.email", "docentes.cod_SIS", )
            ->get();
            //"datos_reservas.numero_estimado"


            $horarios = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $solicitud[$i]->datos_reserva_id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->get();


            $aulas=DB::table('aulas')
            ->join('aula_datos_reserva','aula_datos_reserva.aula_id',"aulas.id")
            ->where('aula_datos_reserva.datos_reserva_id', '=', $solicitud[$i]->datos_reserva_id)
            ->get();
           
            $justificaciones = DB::table("justificacions")
            ->where("datos_reserva_id", $solicitud[$i]->datos_reserva_id)
            ->select("justificacion")
            ->get();

            $fecha = DB::table("datos_reservas")
            ->where("id", $solicitud[$i]->datos_reserva_id)
            ->select("fecha")
            ->get()->first()->fecha; 
            $solicitudCompleta = new \stdClass();
            $solicitudCompleta -> numero_estimado = DatosReserva::find($solicitud[$i]->datos_reserva_id)->numero_estimado;
            $solicitudCompleta -> aulas = $aulas;//DatosReservaController::getAulasDatosReserva($solicitudesPendientes[$i]->datos_reserva_id)->original;
            $solicitudCompleta -> horarios = $horarios;
            $solicitudCompleta -> solicitud  = $solicitud[$i];
            $solicitudCompleta -> docentes = $docentes;
            $solicitudCompleta -> justificaciones = $justificaciones;
            $solicitudCompleta -> fecha = $fecha;
            $solicitudCompleta -> conflictos = $this::estadoAulas($solicitud[$i]->id);

            array_push($complete, $solicitudCompleta);
        }
        
        return $complete;
    }
    
    public function getEstado(Request $request){
        $solicitud = SolicitudReserva::findOrFail($request-> idSolicitud);
        $estadoSolicitud = ["estado"=>$solicitud->estado]; ;
        return response()->json($estadoSolicitud,200,[]);
    }
    /**
     * @OA\Put(
     *      path= "/solicitud-reserva/cambio-estado/{idSolicitud}",
     *      summary =  "Actualizacion del estado de una solicitud de reserva a rechazado",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Parameter(
     *          name="idSolicitud",
     *          description="Id de la Solicitud de Reserva",
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
     * 
     */
    public function actualizarEstado(Request $request){
        $solicitud = SolicitudReserva::findOrFail($request-> idSolicitud);
        $solicitud->estado = 'RECHAZADO';
        $solicitud -> save();
        $docentes = DB::table("datos_reserva_grupo")
        ->where("datos_reserva_grupo.datos_reserva_id",  $solicitud -> datos_reserva_id)
        -> join("grupos", "datos_reserva_grupo.grupo_id", "grupos.id")
        -> join("docentes", "docentes.id", "grupos.docente_id")
        -> get();

        for($i=0; $i<sizeof($docentes); $i++){
            $notificacion = new Notificacion();
            $notificacion -> mensaje = "La solicitud de reserva ha sido rechazada";
            $notificacion ->docente_id = $docentes[$i]->docente_id;
            $notificacion -> fecha = now();
            $notificacion -> save();
        }
        return $solicitud;
    }

    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/pendientes",
     *      summary =  "Obtencion de todas las solicitudes pendientes",
     *      tags = {"Solicitud de reservas"},
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
        $solicitudesPendientes =  SolicitudReserva::where("estado", "PENDIENTE")->get();
        $pendientes = array();
        for($i = 0; $i<sizeof($solicitudesPendientes); $i++){ 
            $docentes = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("grupos", "datos_reserva_grupo.grupo_id","grupos.id")
            ->join("docentes", "grupos.docente_id", "docentes.id")
            ->select("docentes.nombre", "docentes.email", "docentes.cod_SIS")
            ->get();
            //"datos_reservas.numero_estimado"


            $horarios = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->get();


            $aulas=DB::table('aulas')
            ->join('aula_datos_reserva','aula_datos_reserva.aula_id',"aulas.id")
            ->where('aula_datos_reserva.datos_reserva_id', '=', $solicitudesPendientes[$i]->datos_reserva_id)
            ->get();
           
            $justificaciones = DB::table("justificacions")
            ->where("datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->select("justificacion")
            ->get();

            $fecha = DB::table("datos_reservas")
            ->where("id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->select("fecha")
            ->get()->first()->fecha; 
            $solicitudCompleta = new \stdClass();
            $solicitudCompleta -> numero_estimado = DatosReserva::find($solicitudesPendientes[$i]->datos_reserva_id)->numero_estimado;

            $conflictos = $this::estadoAulas($solicitudesPendientes[$i]->id);
            $aulaConflicto = $this::juntarConflictos($conflictos, $aulas);
            

            $solicitudCompleta -> aulas = $aulaConflicto;//DatosReservaController::getAulasDatosReserva($solicitudesPendientes[$i]->datos_reserva_id)->original;
            $solicitudCompleta -> horarios = $horarios;
            $solicitudCompleta -> solicitud  = $solicitudesPendientes[$i];
            $solicitudCompleta -> docentes = $docentes;
            $solicitudCompleta -> justificaciones = $justificaciones;
            $solicitudCompleta -> fecha = $fecha;
            $solicitudCompleta -> conflictos = $conflictos;

            array_push($pendientes, $solicitudCompleta);

            //echo $this::juntarConflictos($this::estadoAulas($solicitudesPendientes[$i]->id), $aulas);
        }
        
        return $pendientes;
        
    }
    private function juntarConflictos($conflictos, $aulas){
        for($i = 0; $i <sizeof($aulas); $i++){
            if($conflictos[$i]-> nombreAula == $aulas[$i]-> nombre){
                $aulas[$i] -> estado = $conflictos[$i]-> estado;
            }
        }
        return $aulas;
    }
    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/antiguedad",
     *      summary =  "Obtencion de todas las solicitudes pendientes filtradas por antiguedad",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      )
     * )
     * 
     * 
     */
    public function getPendientesPorAntiguedad(){
        return SolicitudReserva::where("estado", "PENDIENTE")
                               ->orderBy('fecha_creacion','ASC')
                               ->get();
    }

    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/proximos",
     *      summary =  "Obtencion de todas las solicitudes pendientes filtradas por fecha mas proxima",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Response(
     *          response=200,
     *          description = "OK"),
     *      @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *      )
     * )
     * 
     * 
     */
    public function getPendientesPorProximidad(){
        $solicitud=DB::table('datos_reservas')
        ->join('solicitud_reservas', function ($join) {
            $join->on('solicitud_reservas.datos_reserva_id',"=","datos_reservas.id")
            -> where([["datos_reservas.fecha",">=", now()],["estado", "=", "PENDIENTE"]]);  
        })
        -> orderBy("fecha", "ASC")
        -> get();
        
        return $solicitud;
    }

    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/estado-aulas/{idSolicitud}",
     *      summary =  "Obtencion del estado de todas las aulas pertenecientes a una solicitud de reserva",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Parameter(
     *          name="idSolicitud",
     *          description="Id de la Solicitud de Reserva",
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
     * 
     */
    public function estadoAulas($idSolicitud){
        $datosReserva = SolicitudReserva::find($idSolicitud)->datos_reserva_id;
        $fecha = DatosReserva::find($datosReserva)->fecha;
        
        $periodos = DB::table('datos_reserva_periodo')
        ->where("datos_reserva_periodo.datos_reserva_id","=",  $datosReserva )
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->join("datos_reservas", "datos_reservas.id", "datos_reserva_periodo.datos_reserva_id")
        ->join("aula_datos_reserva", "aula_datos_reserva.datos_reserva_id", "datos_reserva_periodo.datos_reserva_id")
        ->join("aulas", "aulas.id", "=", "aula_datos_reserva.aula_id")
        ->select("datos_reservas.id as datosReservaId", "aulas.nombre as nombreAula", 
                 "aulas.ubicacion as ubicacionAula", "datos_reservas.fecha", "periodos.hora_inicio as periodoIni")
        
        ->orderBy("hora_inicio")
        ->get();
        
        $aulasOcupadas = DB::table('aula_datos_reserva')
            ->join('aulas', 'aula_datos_reserva.aula_id', "=", "aulas.id")
            ->join('datos_reserva_periodo',
                'datos_reserva_periodo.datos_reserva_id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join('datos_reservas', 'datos_reservas.id', "=", "aula_datos_reserva.datos_reserva_id")
            ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
            ->where("fecha", "=", $fecha)
            ->get();

        //echo json_encode($aulasOcupadas);


        $bandera = false;
        for($i=0; $i<sizeof($periodos); $i++){
            for($j=0; $j<sizeof($aulasOcupadas); $j++){
                if($periodos[$i]->datosReservaId != $aulasOcupadas[$j]->datos_reserva_id){
                    if ($aulasOcupadas[$j]->nombre == $periodos[$i]->nombreAula &&
                    $aulasOcupadas[$j]->hora_inicio == $periodos[$i]->periodoIni) {
                    $bandera = true;
                }
                    $bandera = true;
                    if(SolicitudReservaController::tieneReserva($periodos[$i]->datosReservaId)){
                        $periodos[$i]->estado = "tiene reserva";
                    }
                    else {
                        $periodos[$i]->estado = "tiene una solicitud";
                    }
                }
            }
            if($bandera) {
                
                $bandera = false;
            }
            else{
                $periodos[$i]->estado = "libre";
            }
            
        }
        for($i =0; $i<sizeof($periodos); $i++){
            $estado = AulasController::aulaEstado(new Request(
                array('fecha' => $periodos[$i]->fecha, 
                      'nombreAula' => $periodos[$i]->nombreAula,    
                      'ubicacionAula' => $periodos[$i]->ubicacionAula,
                      'periodoIni' => $periodos[$i]->periodoIni,),
                )
            );
            //echo json_encode($estado);
        }
        return $periodos;
    }


    public function tieneReserva($idDatos){
        $reserva = DB::table('reservas')
        ->where("datos_reserva_id", $idDatos)
        ->get();
        if(sizeof($reserva)==0) return false;    
        else return true;
    }
}
