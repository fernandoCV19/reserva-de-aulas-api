<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Periodo;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{    
    /**
     * @OA\Get(
     *      path= "/periodo/{idPeriodo}",
     *      summary =  "Obtencion de una periodo por ID",
     *      tags = {"Periodos"},
     * 
     *      @OA\Parameter(
     *          name="idPeriodo",
     *          description="Id de periodos",
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
    public function getPeriodoPorId(Request $request){
        $periodo =  Periodo::findOrFail($request->idPeriodo);
        return response()->json($periodo, 200,[]);
    }

    /**
     * @OA\Get(
     *      path= "/periodo",
     *      summary =  "Obtencion de todas los periodos",
     *      tags = {"Periodos"},
     * 
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
    public function getPeriodos(){
        $periodos =  DB::table('periodos')->orderBy("hora_inicio")->get();
        return response()->json($periodos, 200,[]);
    }
}
