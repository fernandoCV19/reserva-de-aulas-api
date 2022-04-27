<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GruposRealesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $codigoMateria = "";
        $nombreGrupo = "";
        $codigoDocente = "";
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARZE RUBEN DARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDIETA BRITO SONIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CHACON MARIBEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '14';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '18';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '22';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008237' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004050' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004174' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004192' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTA¥O MERIDA ROSARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008241' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTELLON REYNAGA DILIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004044' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004147' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008066' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008067' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILES ALVARADO SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004062' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOJA CARDENAS GASTON GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016060' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIGO ROCHA INGRID VICKY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018057' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004056' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004059' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OPORTO PEREYRA CARLA GABRIELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004145' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA DAVILA ROSA FABIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVILA CABRERA MARCELO ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004169' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004195' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO MEJIA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004089' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004100' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004121' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004191' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004211' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES RIOS ABRAHAM' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016049' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LIMA VACAFLOR TITO ANIBAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GIANNINI ZALLOCCO MARIA ESTHER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAZARTE ASTULLA PATRICIA SANDRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004203' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004204' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004206' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GALARZA BARRON ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004193' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004201' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004207' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDIVIESO SAENZ RENE JESUS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004210' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORALES MALDONADO ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004007' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004021' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004198' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004208' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004213' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004163' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006063' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008159' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ORELLANA ANA LINETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTELLON REYNAGA DILIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004091' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008160' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOYA ALBARRACIN MARTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COCA AVILES BLADIMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002007' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAHONERO IRAHOLA RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002008' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA VALERA CAROLA FATIMA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002009' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DEL CASTILLO ANTEZANA MARITHZA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004092' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ QUISPE VLADIMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008161' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAHONERO IRAHOLA RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ORELLANA ANA LINETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE LESLIE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIVERO LUJAN MIRTHA JUDITH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BRUCKNER BAZOBERRY MARIA LIDIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAHILL MANGUDO JENNIFER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002016' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARRAZOLA RIVERO SILVIA SUSANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'NAVARRO ANTEZANA FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ CALATAYUD MILTON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA LARA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BRUCKNER BAZOBERRY MARIA LIDIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002021' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAHILL MANGUDO JENNIFER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO MALDONADO MABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002023' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA ALBA MARTHA TERESA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'IRIARTE PU¥A MERCEDES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002025' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAPATA SCHULTZE MARIA LOTTY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002026' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'NAVARRO ANTEZANA FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO MALDONADO MABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002028' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ ZUBIETA JOSE CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARRAZOLA RIVERO SILVIA SUSANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002062' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ OLIVERA KARINA ROSSIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002030' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAPATA SCHULTZE MARIA LOTTY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002031' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA LARA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002032' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HIDALGO SANCHEZ MARY ISABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DE LA BARRA RICALDEZ NELLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002039' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MICHEL VARGAS ANA MARIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002040' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA VALERA CAROLA FATIMA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002044' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'NAVARRO ANTEZANA FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE LESLIE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002054' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE URIOSTE LUIS FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002066' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDRANO MERCADO NORAH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002035' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ CALATAYUD MILTON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002060' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA ALBA MARTHA TERESA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016092' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ OSTRIA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002034' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ BETANCOURT OLGA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ TORRICO EDITH MARITZA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ TORRICO EDITH MARITZA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOVERA MAMANI MARIA BETHY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORAQUENI APAZA RUBEN PAZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ULUNQUE AGUILAR GEDSON FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDINA GAMBOA JULIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUILLEN SALVADOR ROXANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS MALDONADO EDGARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS MALDONADO EDGARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008029' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO MERIDA MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008066' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOLIZ MARTINEZ RENE FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MELENDRES TAMES FERNANDO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAINZ FERRUFINO MARCELO GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012007' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012060' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012008' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCOBAR SELEME MARCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PUMA ARAMAYO JHONNY ALVARO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCOBAR SELEME MARCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES AMAYA ANDRES SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SORIANO HELMER JIMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SORIANO HELMER JIMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012068' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTENEGRO TERRAZAS LUIS EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTENEGRO TERRAZAS LUIS EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012069' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018075' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO CESPEDES RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCOBAR SELEME MARCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIGUEREDO ARISPE DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCOBAR SELEME MARCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON GOMEZ MAURICIO FLORENCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAINZ FERRUFINO MARCELO GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAINZ FERRUFINO MARCELO GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON GOMEZ MAURICIO FLORENCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012016' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012021' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO PE¥A CHRISTIAN BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012070' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012087' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JOFFRE ISMAEL JESSICA DIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERCADO GUZMAN ALVARO RODOLFO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYLLON ACOSTA JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012025' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ ROCA GABRIEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012071' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012072' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012086' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CABALLERO FLORES JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012026' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAZARTE VILLARROEL LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012029' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012031' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'EDUARDO FRANZ MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'EDUARDO FRANZ MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012032' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012073' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CABALLERO FLORES JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012074' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012035' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012036' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'EDUARDO FRANZ MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012038' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012039' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012042' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYLLON ACOSTA JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012043' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYLLON ACOSTA JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012044' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAZARTE VILLARROEL LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012050' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012051' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ TORRICO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ TORRICO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012076' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012077' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ TORRICO EDITH MARITZA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012078' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012079' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012080' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012081' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO PE¥A CHRISTIAN BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2012088' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA GOMEZ MARCELO WALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008053' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'R';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008240' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'L';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008014' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = 'I';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006089' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008029' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008156' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1801033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANCIBIA GUZMAN MARCELO EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006031' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2002004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ QUISPE VLADIMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008053' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008070' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008075' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010008' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008077' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008080' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008214' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008081' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'E';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' G ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008029' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TOLA FLORES HERMENEGILDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ ZUBIETA JOSE CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JORGE GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUILLEN SALVADOR ROXANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008052' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '12';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCABADO QUIROGA JAZMIN GABRIELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008157' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ ARAMAYO VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CARVAJAL RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014007' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORTIZ CONDORI MARINA VALERIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014008' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014009' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZANEDA MAMANI JUVENAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZANEDA MAMANI JUVENAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERIDA LOPEZ REINALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERIDA LOPEZ REINALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OLIVERA CHAVEZ MARCELO ALVARO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014016' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZALLES MEDRANO MARIO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA MALDONADO GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS QUIROZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014021' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PACHECO GARCIA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PACHECO GARCIA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014023' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA MALDONADO GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HINOJOSA TORRICO MARCELO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014025' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014026' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOLIZ MARTINEZ RENE FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014028' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014029' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014030' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '12';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZALLES MEDRANO MARIO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '14';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOCER GARNICA RICHARD CESAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014041' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014088' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014031' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014032' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZANEDA MAMANI JUVENAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014034' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA MALDONADO GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014051' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'M';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MAMANI POCORI PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ BLANCO CARMEN ROSARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ FLORES ROBERT REYNOLDS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '15';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '19';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '20';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'I';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RAMOS DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TENORIO PANUNI DORIAN WILFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018023' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DIAZ COIMBRA ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DIAZ COIMBRA ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = ' G ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CACERES CRUZ FRANZ ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010008' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARDENAS RIVERA SERGIO RODRIGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018009' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO CESPEDES RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008052' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008157' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VIDAL DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ ARAMAYO VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CARVAJAL RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018008' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO LOPEZ PASCUAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018135' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COCA MENDEZ JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PONCE DE LEON MAURICIO LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014008' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014018' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO MEDINA SERGIO ARNALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016091' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018032' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018034' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS RODRIGUEZ LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014029' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014063' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS ZAPATA ALEJANDRA CECILIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018040' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014014' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA ZELADA JOSE GABRIEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014143' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018043' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018049' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018050' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUILLAGUAMAN LEYTON JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018054' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE OSCAR JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018136' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANCIBIA MIRANDA MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016023' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016030' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANCIBIA MIRANDA MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'E';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' G ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008029' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TOLA FLORES HERMENEGILDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ ZUBIETA JOSE CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010010' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PAZ CANDIA ADRIANA MILENKA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ EDILBERTO JONATHAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUILLEN SALVADOR ROXANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '12';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ GUZMAN HELDER OCTAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VELIZ GUARDIA AMIRA ABRIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ GUZMAN HELDER OCTAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ GUZMAN HELDER OCTAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCABADO QUIROGA JAZMIN GABRIELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014004' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008157' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ ARAMAYO VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CARVAJAL RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014007' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORTIZ CONDORI MARINA VALERIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014059' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BARRON NORMAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014087' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014063' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014064' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014065' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008052' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERIDA LOPEZ REINALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERIDA LOPEZ REINALDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014066' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014035' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORSI SALDIAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014071' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014075' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANDIA COSSIO WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014139' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORSI SALDIAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014140' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUTRON GANDARILLAS FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014141' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014030' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUTRON GANDARILLAS FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUTRON GANDARILLAS FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014042' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014142' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014143' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014034' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014046' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014049' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDERRAMA ANGULO ROGER WILMER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014144' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA BURGOS JHOMIL EFRAIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RICO SORIA GALVARRO GIOVANNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA BURGOS JHOMIL EFRAIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'R';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008053' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'L';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008077' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008240' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAURE RICHARD PATRICIA ANGELICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = 'I';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008081' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803009' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006031' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006034' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006089' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008156' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006090' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008157' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006042' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006039' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006041' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006059' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006046' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006049' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006062' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006100' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'H';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '21';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS MALDONADO EDGARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010008' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORIHUELA ROJAS JESSICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'F';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' G ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDINA GAMBOA JULIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008059' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO COCA MIROSLAVA LINNETE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018007' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004044' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008043' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014087' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016011' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ ANDRADE OSVALDO WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIGO ROCHA INGRID VICKY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018009' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016046' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016057' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ ANDRADE OSVALDO WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARMIENTO FRANCO ARIEL ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018066' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUINONES HERBAS WALTER DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ QUIROZ RICHARD MILTON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ QUIROZ RICHARD MILTON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016049' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LIMA VACAFLOR TITO ANIBAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016051' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016052' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016021' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ GONZALES JACINTO GER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016023' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016025' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016026' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO LOPEZ PASCUAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014088' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ GONZALES JACINTO GER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', "CHOQUE FLORES ALEX D'ANCHGELO" )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016028' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VILLAZON JIMMY ERICK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016029' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ OSTRIA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016030' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016031' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ECHEVERRIA HERRERA RODRIGO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018054' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE OSCAR JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004206' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GALARZA BARRON ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016032' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VILLAZON JIMMY ERICK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ OSTRIA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016034' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016036' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016038' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN SALAZAR JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN SALAZAR JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016039' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CASTELLON PAMELA ALEJANDRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016040' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016041' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JAUREGUI CARRASCO MARIA IVONNE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JAUREGUI CARRASCO MARIA IVONNE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016059' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ORELLANA GONZALO ENRIQUE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ORELLANA GONZALO ENRIQUE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016090' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006063' )->first();
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '15';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO PEREZ ALEXANDRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ EDILBERTO JONATHAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '5A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLADERA MAMANI BENEDICTA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '12';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ EDILBERTO JONATHAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010200' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008060' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008140' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010014' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010041' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO DEL CASTILLO INDIRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010206' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008029' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010038' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010197' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010016' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN ROSALES K. ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010040' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010042' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010201' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO DEL CASTILLO INDIRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010049' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010202' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010203' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010100' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AZERO ALCOCER PABLO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010204' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010205' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010035' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010102' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010214' )->first();
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010066' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AZERO ALCOCER PABLO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010178' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010188' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010189' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010209' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010215' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010216' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010217' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010218' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008053' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008070' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010008' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAURE RICHARD PATRICIA ANGELICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008075' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008214' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006004' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008077' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008078' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008079' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008080' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008081' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008085' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008086' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008087' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008122' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008092' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008093' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008236' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008242' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008098' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008034' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008100' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008258' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008053' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008070' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010008' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAURE RICHARD PATRICIA ANGELICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008075' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008214' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006004' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008077' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008078' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008079' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008080' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008081' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008085' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008086' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008087' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008122' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008092' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008093' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008236' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008242' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008258' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008098' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008100' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARZE RUBEN DARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDIETA BRITO SONIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CHACON MARIBEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '14';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '18';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '22';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008237' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004050' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004174' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004192' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTA¥O MERIDA ROSARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004044' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004147' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008066' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008067' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILES ALVARADO SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006023' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008241' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004056' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OPORTO PEREYRA CARLA GABRIELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004109' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004145' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA DAVILA ROSA FABIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVILA CABRERA MARCELO ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004169' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004059' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004105' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDRANO ANTEZANA RUDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004114' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004175' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004176' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004115' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004119' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004130' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004173' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004116' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004120' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO VALLEJOS SONIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004046' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'M';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MAMANI POCORI PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ BLANCO CARMEN ROSARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ FLORES ROBERT REYNOLDS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '13';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '15';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '19';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '20';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803238' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'I';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RAMOS DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TENORIO PANUNI DORIAN WILFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018016' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = ' G ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008014' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CACERES CRUZ FRANZ ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010008' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARDENAS RIVERA SERGIO RODRIGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO CESPEDES RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008052' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008157' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VIDAL DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARNICA AROSTEGUI ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018023' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE TORRICO IVAN FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018008' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO LOPEZ PASCUAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEVERICHE CHACON ANGELICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018026' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DIAZ COIMBRA ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE TORRICO IVAN FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018028' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018033' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018135' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COCA MENDEZ JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PONCE DE LEON MAURICIO LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014087' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016091' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS RODRIGUEZ LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018032' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018041' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018037' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018038' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018039' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018040' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018044' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018056' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018042' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018043' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018076' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTELLON TORRICO RAUL FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018079' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS ZAPATA ALEJANDRA CECILIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018046' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018049' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018050' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUILLAGUAMAN LEYTON JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018077' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PARRA GUSTAVO ADOLFO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016023' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018054' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE OSCAR JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARZE RUBEN DARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDIETA BRITO SONIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CHACON MARIBEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004045' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006018' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '14';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '18';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '22';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008237' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004050' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004174' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006019' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008241' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004044' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004147' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006020' )->first();
        $nombreGrupo = 'A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008066' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILES ALVARADO SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004055' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004183' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016060' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIGO ROCHA INGRID VICKY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2018057' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004056' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004061' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OPORTO PEREYRA CARLA GABRIELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004145' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA DAVILA ROSA FABIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVILA CABRERA MARCELO ARMANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004169' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004184' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004196' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOJA CARDENAS GASTON GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004069' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004072' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004191' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004197' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004198' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004201' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004005' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JOFFRE ISMAEL JESSICA DIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004078' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004200' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOJA CARDENAS GASTON GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008067' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014087' )->first();
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004006' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004181' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004187' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO MEJIA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004193' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004199' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004079' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004083' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDERRAMA IDINA JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004180' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARBALLO CADIMA SERGIO CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004182' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDERRAMA IDINA JOSE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004186' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ ARZE JAVIER BERNARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ ARZE JAVIER BERNARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2004188' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010122' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803001' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2006063' )->first();
        $nombreGrupo = ' C ';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008019' )->first();
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '14';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYALA TRUJILLO SERGIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TABORGA ACHA FIDEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PENALOZA PACHECO JUAN PABLO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES JURADO HANS BYRON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008054' )->first();
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '11';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '12';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '17';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'IBARRA VAQUILLA OSMAR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010010' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO PEREZ ALEXANDRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ EDILBERTO JONATHAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010140' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAIME ZAPATA VALENTIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008022' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLADERA MAMANI BENEDICTA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008056' )->first();
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'auxiliar por designar ayudante' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008057' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RAMOS DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010003' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ EDILBERTO JONATHAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010013' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008058' )->first();
        $nombreGrupo = '3A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008059' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO COCA MIROSLAVA LINNETE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008060' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010012' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010015' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010141' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA BURGOS JHOMIL EFRAIN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2008061' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010016' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010017' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010018' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016046' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEJIA URQUIETA VICTOR RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016048' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803002' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010022' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN ROSALES K. ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010035' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYOROA CARDOZO JOSE RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010053' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010142' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016051' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016057' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ ANDRADE OSVALDO WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARMIENTO FRANCO ARIEL ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010019' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010020' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO DEL CASTILLO INDIRA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010027' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010047' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010143' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010144' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010177' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010024' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA FERNANDEZ DAVID' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010145' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010146' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010186' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010216' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2014087' )->first();
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016092' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS ANTEZANA ADEMAR MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '1803009' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010102' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010116' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYOROA CARDOZO JOSE RICHARD' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010119' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN ROSALES K. ROLANDO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010209' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010210' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016059' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ORELLANA GONZALO ENRIQUE' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010122' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010147' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010178' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010188' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010189' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010217' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2010218' )->first();
        $nombreGrupo = '1';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016021' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016023' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016027' )->first();
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', "CHOQUE FLORES ALEX D'ANCHGELO" )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016049' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LIMA VACAFLOR TITO ANIBAL' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEJIA URQUIETA VICTOR RAMIRO' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('code', '=', '2016052' )->first();
        $nombreGrupo = '2';
        $nombreDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first();
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
    }
}
