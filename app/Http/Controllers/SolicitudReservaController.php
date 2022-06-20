<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\SolicitudReserva;
use App\Models\Reserva;
use App\Models\DatosReserva;
use Illuminate\Support\Facades\DB;
use App\Models\Notificacion;
use App\Models\Docente;

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
        $fechaActual = now();

        $datos_reserva = DatosReservaController::crearDatosReserva($request);
        
        $solicitud_reserva  = new SolicitudReserva();
        $solicitud_reserva ->estado ="PENDIENTE";
        $solicitud_reserva ->fecha_creacion = $fechaActual;
        //$solicitud_reserva ->fecha_creacion = now();
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
            $notificacion -> fecha = $fechaActual;
            //$notificacion -> fecha = now();
            $notificacion -> save();
        }

        return $solicitud_reserva;
    }
    /**
     * @OA\Put(
     *      path= "/solicitud-reserva/eliminar/{idSolicitud}",
     *      summary =  "Eliminacion solicitud por id",
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
    public function eliminarSolicitud(Request $request){
        $solicitud = DB::table("solicitud_reservas") -> where ("solicitud_reservas.id",$request->idSolicitud)->get();
        $idDatosReserva = $solicitud[0]->datos_reserva_id;
        $fecha = $solicitud[0]->fecha_creacion; //Si queremos borrar notificacion
        $estadoReserva = $solicitud[0]->estado;

        if ($estadoReserva =="PENDIENTE" || $estadoReserva=="ACEPTADO"){
            //DB::table("reservas")->where("reservas.datos_reserva_id",$idDatosReserva)->delete();
            if ($estadoReserva != "PENDIENTE"){
                $reserva = Reserva::where("datos_reserva_id","=",$idDatosReserva)->first()->delete(); //Soft Deleting
            }
            //DB::table("justificacions")->where("justificacions.datos_reserva_id",$idDatosReserva)->delete();
            //DB::table("datos_reserva_periodo")->where("datos_reserva_periodo.datos_reserva_id",$idDatosReserva)->delete();
            //DB::table("datos_reserva_grupo")->where("datos_reserva_grupo.datos_reserva_id",$idDatosReserva)->delete();
            //DB::table("aula_datos_reserva")->where("aula_datos_reserva.datos_reserva_id",$idDatosReserva)->delete();

            DB::table("solicitud_reservas") -> where ("solicitud_reservas.id",$request->idSolicitud)->update(['estado'=>'CANCELADO']);

            $docente = DB::table("datos_reservas")->where("datos_reservas.id",$idDatosReserva)->get();
            $idDocente = $docente [0] -> docente_id;   //Si queremos borrar notificacion

            //DB::table("datos_reservas")->where("datos_reservas.id",$idDatosReserva)->delete();

            //Borrar notificacion si es necesario 
            //DB::table("notificacions") -> where([["notificacions.docente_id","=",$idDocente],["notificacions.fecha","=",$fecha]]);
            return response()->json("Eliminacion Correcta",200,[]);
        }else{
            return response()->json("Reserva Aceptada, Incancelable",400,[]);
        }
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
            ->where("aulas.disponible_para_uso", "=", "1")
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
     *      @OA\RequestBody(
     *         @OA\JsonContent(
     *              @OA\Property(
     *                  property="motivo", 
     *                  type="string"
     *               ),
     *          ),
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

        $idDatos = $solicitud ->datos_reserva_id;
        
        $materia = DB::table("grupos")
        ->where("docente_id", $docentes[0]->docente_id)
        ->join("materias", "materias.id", "grupos.materia_id")
        ->select("materias.nombre")
        ->get();
        echo $request->motivo;
        $fechaActual = DatosReserva::find($idDatos)->fecha;
        $mensaje = " Su solicitud de reserva para la fecha ". $fechaActual;
        $mensaje = $mensaje . " de la materia ";
        $mensaje = $mensaje . $materia[0]->nombre." fue rechazada debido a";
        $mensaje = $mensaje . $request->motivo .". Agradecemos su comprension.";
        
        for($i=0; $i<sizeof($docentes); $i++){
            $notificacion = new Notificacion();
            $notificacion -> mensaje = "La solicitud de reserva ha sido rechazada";
            $notificacion ->docente_id = $docentes[$i]->docente_id;
            $notificacion -> fecha = now();
            $notificacion -> save();

            $email = Docente::find($docentes[$i]->docente_id)->email;
            
            $return = MailController::sendEmailPersonalizado(new Request(
                array('email' => $email, 
                      'asunto' => "Notificación rechazó solicitud de reserva.",
                      'mensaje' => $mensaje,
                      
                )
            ));
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
            $grupos = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id",$solicitudesPendientes[$i]->datos_reserva_id)
            ->join("grupos", "grupos.id","datos_reserva_grupo.grupo_id")
            ->select("grupos.nombre")
            ->get();

            $horarios = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->get();


            $aulas=DB::table('aulas')
            ->join('aula_datos_reserva','aula_datos_reserva.aula_id',"aulas.id")
            ->where("aulas.disponible_para_uso", "=", "1")
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
            $solicitudCompleta -> grupos = $grupos;

            array_push($pendientes, $solicitudCompleta);

            //echo $this::juntarConflictos($this::estadoAulas($solicitudesPendientes[$i]->id), $aulas);
        }
        
        return $pendientes;
        
    }
    private function juntarConflictos($conflictos, $aulas){
        if(sizeof($conflictos) == 0) return [] ;
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
        $solicitudesPendientes = SolicitudReserva::where("estado", "PENDIENTE")
                               ->orderBy('fecha_creacion','ASC')
                               ->get();
        $pendientes = array();
        for($i = 0; $i<sizeof($solicitudesPendientes); $i++){ 
            $docentes = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("grupos", "datos_reserva_grupo.grupo_id","grupos.id")
            ->join("docentes", "grupos.docente_id", "docentes.id")
            ->select("docentes.nombre", "docentes.email", "docentes.cod_SIS")
            ->get();
            //"datos_reservas.numero_estimado"

            $grupos = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id",$solicitudesPendientes[$i]->datos_reserva_id)
            ->join("grupos", "grupos.id","datos_reserva_grupo.grupo_id")
            ->select("grupos.nombre")
            ->get();
            $horarios = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->get();


            $aulas=DB::table('aulas')
            ->join('aula_datos_reserva','aula_datos_reserva.aula_id',"aulas.id")
            ->where("aulas.disponible_para_uso", "=", "1")
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
            $solicitudCompleta -> grupos = $grupos;

            array_push($pendientes, $solicitudCompleta);

            //echo $this::juntarConflictos($this::estadoAulas($solicitudesPendientes[$i]->id), $aulas);
        }
        
        return $pendientes;
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
        $solicitudesPendientes=DB::table('datos_reservas')
        ->join('solicitud_reservas', function ($join) {
            $join->on('solicitud_reservas.datos_reserva_id',"=","datos_reservas.id")
            -> where([["datos_reservas.fecha",">=", now()],["estado", "=", "PENDIENTE"]]);  
        })
        -> orderBy("fecha", "ASC")
        -> get();
        $pendientes = array();
        for($i = 0; $i<sizeof($solicitudesPendientes); $i++){ 
            $docentes = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("grupos", "datos_reserva_grupo.grupo_id","grupos.id")
            ->join("docentes", "grupos.docente_id", "docentes.id")
            ->select("docentes.nombre", "docentes.email", "docentes.cod_SIS")
            ->get();
            //"datos_reservas.numero_estimado"

            $grupos = DB::table("datos_reserva_grupo")
            ->where("datos_reserva_grupo.datos_reserva_id",$solicitudesPendientes[$i]->datos_reserva_id)
            ->join("grupos", "grupos.id","datos_reserva_grupo.grupo_id")
            ->select("grupos.nombre")
            ->get();

            $horarios = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $solicitudesPendientes[$i]->datos_reserva_id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->get();


            $aulas=DB::table('aulas')
            ->join('aula_datos_reserva','aula_datos_reserva.aula_id',"aulas.id")
            ->where("aulas.disponible_para_uso", "=", "1")
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
            $solicitudCompleta -> grupos = $grupos;

            array_push($pendientes, $solicitudCompleta);

            //echo $this::juntarConflictos($this::estadoAulas($solicitudesPendientes[$i]->id), $aulas);
        }
        
        return $pendientes;
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
        $solicitud = SolicitudReserva::find($idSolicitud);
        if($solicitud -> estado == "CANCELADO")
            return [];
        $datosReserva = SolicitudReserva::find($idSolicitud)->datos_reserva_id;
        $fecha = DatosReserva::find($datosReserva)->fecha;
        
        $periodos = DB::table('datos_reserva_periodo')
        ->where("datos_reserva_periodo.datos_reserva_id","=",  $datosReserva )
        ->join("periodos", "periodos.id", "=", "datos_reserva_periodo.periodo_id")
        ->join("datos_reservas", "datos_reservas.id", "datos_reserva_periodo.datos_reserva_id")
        ->join("aula_datos_reserva", "aula_datos_reserva.datos_reserva_id", "datos_reserva_periodo.datos_reserva_id")
        ->join("aulas", "aulas.id", "=", "aula_datos_reserva.aula_id")
        ->where("aulas.disponible_para_uso", "=", "1")
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
                    
                    if($bandera){
                        if(SolicitudReservaController::tieneReserva($periodos[$i]->datosReservaId)){
                            $periodos[$i]->estado = "tiene reserva";
                        }
                        else {
                            $periodos[$i]->estado = "tiene una solicitud";
                        }
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

    /**
     * @OA\Get(
     *      path= "/solicitud-reserva/docente-solicitud/{idDocente}",
     *      summary =  "Obtencion de las solicitudes de un docente",
     *      tags = {"Solicitud de reservas"},
     *      @OA\Parameter(
     *          name="idDocente",
     *          description="Id del docente",
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
    public function getSolicitudesDocentes(Request $request){
        $datosReserva = DB::table("datos_reservas")
        -> where("datos_reservas.docente_id", $request->idDocente)
        ->orderBy("fecha", "DESC")
        -> get();
        $solicitudes = array();
        for($i = 0; $i < sizeof($datosReserva); $i++){
            $docentes = DB::table("datos_reserva_grupo")
            -> where("datos_reserva_grupo.datos_reserva_id",$datosReserva[$i]->id)
            -> join("grupos", "grupos.id", "datos_reserva_grupo.grupo_id")
            -> join("docentes", "docentes.id", "grupos.docente_id")
            -> select("docentes.nombre as nombreDocente")
            -> get(); 

            
            $aulas = DatosReservaController::getAulasDatosReserva($datosReserva[$i]->id);
            $aulas = json_decode($aulas-> getContent(), true)["aulas"];
            $capacidad = 0;
   
            for($j = 0; $j<sizeof($aulas); $j++){
                $capacidad += $aulas[$j]["capacidad"];
                
            }
            
            $periodos = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $datosReserva[$i]->id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->select("periodos.hora_inicio", "periodos.hora_fin")
            ->get();
            
            $estadoConsulta = DB::table("solicitud_reservas")
            ->where("datos_reserva_id", $datosReserva[$i]->id)
            ->get();

            $estado = "";
            if(sizeof($estadoConsulta) == 0){
                $reserva = DB::table("reservas")
                -> where("datos_reserva_id", $datosReserva[$i]->id)
                -> get();
                $estado = "ACEPTADO";
            }
            else {
                $estado = $estadoConsulta[0]->estado;
            }
            
            $justificaciones = DB::table("justificacions")
            ->where("datos_reserva_id","=",$datosReserva[$i]->id)
            ->select("justificacion")
            ->get();
        
            $solicitudActual = DB::table("solicitud_reservas")
            ->where("datos_reserva_id","=",$datosReserva[$i]->id)
            ->get();
            $res = new\stdClass();
            $res -> aulas = $aulas;
            $res -> periodos = $periodos;
            $res -> estado = $estado;
            $res -> docentes = $docentes;
            $res -> motivo = $justificaciones;
            $res -> fecha = $datosReserva[$i]->fecha;
            $res -> numero_estimado = $datosReserva[$i]->numero_estimado;
            $res -> solicitud = $solicitudActual;
            //echo json_encode($res);
            array_push($solicitudes, $res);
        }
        /*$solicitudes = DB::table('solicitud_reservas')
        ->join("datos_reserva_grupo", "solicitud_reservas.datos_reserva_id","=","datos_reserva_grupo.datos_reserva_id")
        ->join("datos_reserva_periodo", "solicitud_reservas.datos_reserva_id", "=", "datos_reserva_periodo.datos_reserva_id") 
        ->join("periodos","datos_reserva_periodo.periodo_id","=","periodos.id")
        ->join ("grupos", "datos_reserva_grupo.grupo_id","=","grupos.id")
        ->join("docentes","grupos.docente_id","=","docentes.id")
        ->join("materias","grupos.materia_id","=","materias.id")
        ->where ("grupos.docente_id","=",$request->idDocente)
        ->get();*/
        return $solicitudes;
    }
    public function getHistorialAdmin(){
        $solicitudesReserva = DB::table("solicitud_reservas")
        ->orderBy("fecha_creacion", "DESC")
        ->get();
        $datosReserva = array();
        for($i = 0; $i < sizeof($solicitudesReserva); $i++){
            $idDatosReserva = SolicitudReserva::find($solicitudesReserva[$i]->id)->datos_reserva_id;
            $datosReservaSolicitud = DatosReserva::find($idDatosReserva);
            array_push($datosReserva, $datosReservaSolicitud);
            
        }
        
        
        $solicitudes = array();
        for($i = 0; $i < sizeof($datosReserva); $i++){
            
            $docentes = DB::table("datos_reserva_grupo")
            -> where("datos_reserva_grupo.datos_reserva_id",$datosReserva[$i]->id)
            -> join("grupos", "grupos.id", "datos_reserva_grupo.grupo_id")
            -> join("docentes", "docentes.id", "grupos.docente_id")
            -> select("docentes.nombre as nombreDocente")
            -> get(); 
            
            $aulas = DatosReservaController::getAulasDatosReserva($datosReserva[$i]->id);
            $aulas = json_decode($aulas-> getContent(), true)["aulas"];
            $capacidad = 0;
   
            for($j = 0; $j<sizeof($aulas); $j++){
                $capacidad += $aulas[$j]["capacidad"];
                
            }
            
            $periodos = DB::table("datos_reserva_periodo")
            ->where("datos_reserva_periodo.datos_reserva_id", $datosReserva[$i]->id)
            ->join("periodos", "periodos.id", "datos_reserva_periodo.periodo_id")
            ->select("periodos.hora_inicio", "periodos.hora_fin")
            ->get();
            
            $estadoConsulta = DB::table("solicitud_reservas")
            ->where("datos_reserva_id", $datosReserva[$i]->id)
            ->get();

            $estado = "";
            if(sizeof($estadoConsulta) == 0){
                $reserva = DB::table("reservas")
                -> where("datos_reserva_id", $datosReserva[$i]->id)
                -> get();
                $estado = "ACEPTADO";
            }
            else {
                $estado = $estadoConsulta[0]->estado;
            }
            
            $justificaciones = DB::table("justificacions")
            ->where("datos_reserva_id","=",$datosReserva[$i]->id)
            ->select("justificacion")
            ->get();
        
            $res = new\stdClass();
            $res -> aulas = $aulas;
            $res -> periodos = $periodos;
            $res -> estado = $estado;
            $res -> docentes = $docentes;
            $res -> motivo = $justificaciones;
            $res -> fecha = $datosReserva[$i]->fecha;
            $res -> numero_estimado = $datosReserva[$i]->numero_estimado;
            $res -> solicitud = $solicitudesReserva[$i];
            //echo json_encode($res);
            array_push($solicitudes, $res);
        }
        return $solicitudes;
    }
}
