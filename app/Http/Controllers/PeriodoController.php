<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Periodo;
use Illuminate\Support\Facades\DB;

class PeriodoController extends Controller
{
    public function getPeriodoPorId(Request $request){
        $periodo =  Periodo::findOrFail($request->idPeriodo);
        return response()->json($periodo, 200,[]);
    }

    public function getPeriodos(){
        $periodos =  Periodo::all();
        return response()->json($periodos, 200,[]);
    }
}
