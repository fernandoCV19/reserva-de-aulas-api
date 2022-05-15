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
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARZE RUBEN DARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDIETA BRITO SONIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CHACON MARIBEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '14';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '18';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '22';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008237' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004050' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004174' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004192' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTA¥O MERIDA ROSARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008241' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTELLON REYNAGA DILIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004044' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004147' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008066' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008067' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILES ALVARADO SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004062' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOJA CARDENAS GASTON GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016060' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIGO ROCHA INGRID VICKY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018057' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004056' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004059' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OPORTO PEREYRA CARLA GABRIELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004145' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA DAVILA ROSA FABIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVILA CABRERA MARCELO ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004169' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004195' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO MEJIA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004089' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004100' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004121' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004191' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004211' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES RIOS ABRAHAM' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016049' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LIMA VACAFLOR TITO ANIBAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GIANNINI ZALLOCCO MARIA ESTHER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAZARTE ASTULLA PATRICIA SANDRA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004203' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004204' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004206' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GALARZA BARRON ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004193' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004201' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004207' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDIVIESO SAENZ RENE JESUS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004210' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORALES MALDONADO ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004007' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004021' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004198' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004208' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004213' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004163' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006063' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008159' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ORELLANA ANA LINETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTELLON REYNAGA DILIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004091' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008160' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOYA ALBARRACIN MARTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COCA AVILES BLADIMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002007' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAHONERO IRAHOLA RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002008' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA VALERA CAROLA FATIMA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002009' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DEL CASTILLO ANTEZANA MARITHZA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004092' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ QUISPE VLADIMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008161' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAHONERO IRAHOLA RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ORELLANA ANA LINETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE LESLIE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIVERO LUJAN MIRTHA JUDITH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BRUCKNER BAZOBERRY MARIA LIDIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAHILL MANGUDO JENNIFER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002016' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARRAZOLA RIVERO SILVIA SUSANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'NAVARRO ANTEZANA FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ CALATAYUD MILTON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA LARA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BRUCKNER BAZOBERRY MARIA LIDIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002021' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAHILL MANGUDO JENNIFER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO MALDONADO MABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002023' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA ALBA MARTHA TERESA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'IRIARTE PU¥A MERCEDES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002025' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAPATA SCHULTZE MARIA LOTTY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002026' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'NAVARRO ANTEZANA FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO MALDONADO MABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002028' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ ZUBIETA JOSE CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARRAZOLA RIVERO SILVIA SUSANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002062' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ OLIVERA KARINA ROSSIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002030' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAPATA SCHULTZE MARIA LOTTY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002031' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA LARA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002032' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HIDALGO SANCHEZ MARY ISABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DE LA BARRA RICALDEZ NELLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002039' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MICHEL VARGAS ANA MARIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002040' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA VALERA CAROLA FATIMA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002044' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'NAVARRO ANTEZANA FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE LESLIE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002054' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE URIOSTE LUIS FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002066' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDRANO MERCADO NORAH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002035' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ CALATAYUD MILTON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002060' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AVILA ALBA MARTHA TERESA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016092' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ OSTRIA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002034' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ BETANCOURT OLGA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ TORRICO EDITH MARITZA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ TORRICO EDITH MARITZA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOVERA MAMANI MARIA BETHY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORAQUENI APAZA RUBEN PAZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ULUNQUE AGUILAR GEDSON FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDINA GAMBOA JULIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUILLEN SALVADOR ROXANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS MALDONADO EDGARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS MALDONADO EDGARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008029' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO MERIDA MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008066' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOLIZ MARTINEZ RENE FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MELENDRES TAMES FERNANDO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAINZ FERRUFINO MARCELO GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012007' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012060' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012008' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCOBAR SELEME MARCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PUMA ARAMAYO JHONNY ALVARO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES AMAYA ANDRES SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SORIANO HELMER JIMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SORIANO HELMER JIMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012068' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTENEGRO TERRAZAS LUIS EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTENEGRO TERRAZAS LUIS EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012069' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018075' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO CESPEDES RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCOBAR SELEME MARCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIGUEREDO ARISPE DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON GOMEZ MAURICIO FLORENCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAINZ FERRUFINO MARCELO GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAINZ FERRUFINO MARCELO GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERUVIA JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON GOMEZ MAURICIO FLORENCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES NAVARRO EPIFANIO JULIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012016' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012021' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO PE¥A CHRISTIAN BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012070' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA ROMAN OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012087' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JOFFRE ISMAEL JESSICA DIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERCADO GUZMAN ALVARO RODOLFO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYLLON ACOSTA JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLAZON ROCHA YAMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012025' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ ROCA GABRIEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PEREIRA LUIS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012071' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012072' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012086' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CABALLERO FLORES JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEDEZMA PERIZZA FERNANDO ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012026' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VERA CORTES CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAZARTE VILLARROEL LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012029' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SACA VENTURA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012031' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'EDUARDO FRANZ MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'EDUARDO FRANZ MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012032' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RIOS HUGO WILLIAM' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012073' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CABALLERO FLORES JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012074' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012035' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012036' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'EDUARDO FRANZ MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SAAVEDRA ANTEZANA FELIPE RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012038' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORERO ORTUNO OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012039' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DUCHEN AYALA JORGE MARTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012042' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYLLON ACOSTA JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012043' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYLLON ACOSTA JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012044' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAZARTE VILLARROEL LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ LOREDO GROVER DANTE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012050' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ VASQUEZ GALO OSVALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012051' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ TORRICO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ TORRICO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012076' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012077' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ TORRICO EDITH MARITZA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012078' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA CUADROS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012079' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA VASQUEZ ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012080' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012081' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO PE¥A CHRISTIAN BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2012088' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA GOMEZ MARCELO WALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008053' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'R';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008240' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'L';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008014' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = 'I';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006089' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008029' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008156' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1801033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANCIBIA GUZMAN MARCELO EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006031' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2002004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ TERRAZAS ERIKA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ QUISPE VLADIMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008053' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008070' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008075' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010008' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008077' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008080' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008214' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008081' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'E';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' G ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008029' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TOLA FLORES HERMENEGILDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ ZUBIETA JOSE CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JORGE GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUILLEN SALVADOR ROXANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008052' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '12';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCABADO QUIROGA JAZMIN GABRIELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008157' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ ARAMAYO VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CARVAJAL RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014007' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORTIZ CONDORI MARINA VALERIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014008' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014009' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZANEDA MAMANI JUVENAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERIDA LOPEZ REINALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OLIVERA CHAVEZ MARCELO ALVARO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014016' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZALLES MEDRANO MARIO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA MALDONADO GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS QUIROZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014021' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PACHECO GARCIA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PACHECO GARCIA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014023' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA MALDONADO GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HINOJOSA TORRICO MARCELO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014025' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014026' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOLIZ MARTINEZ RENE FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014028' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014029' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014030' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '12';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZALLES MEDRANO MARIO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '14';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOCER GARNICA RICHARD CESAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014041' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014088' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014031' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014032' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZANEDA MAMANI JUVENAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMAN ARISPE MANUEL FDO.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014034' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA MALDONADO GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014051' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'M';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MAMANI POCORI PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ BLANCO CARMEN ROSARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ FLORES ROBERT REYNOLDS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '15';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '19';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '20';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'I';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RAMOS DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TENORIO PANUNI DORIAN WILFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018023' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DIAZ COIMBRA ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DIAZ COIMBRA ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = ' G ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CACERES CRUZ FRANZ ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010008' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARDENAS RIVERA SERGIO RODRIGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018009' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO CESPEDES RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008052' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008157' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VIDAL DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ ARAMAYO VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CARVAJAL RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018008' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO LOPEZ PASCUAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018135' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COCA MENDEZ JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PONCE DE LEON MAURICIO LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014008' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014018' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO MEDINA SERGIO ARNALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016091' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018032' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018034' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS RODRIGUEZ LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEMPERTEGUI TAPIA ALDO GROVER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014029' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEZA ROSSO FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014063' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS ZAPATA ALEJANDRA CECILIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018040' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014014' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA ZELADA JOSE GABRIEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014143' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018043' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018049' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018050' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUILLAGUAMAN LEYTON JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018054' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE OSCAR JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018136' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANCIBIA MIRANDA MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016023' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016030' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANCIBIA MIRANDA MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'E';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' G ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008029' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TOLA FLORES HERMENEGILDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ ZUBIETA JOSE CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010010' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PAZ CANDIA ADRIANA MILENKA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HEREDIA SOLIZ EDILBERTO JONATHAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUILLEN SALVADOR ROXANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '12';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ GUZMAN HELDER OCTAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VELIZ GUARDIA AMIRA ABRIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ GUZMAN HELDER OCTAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCABADO QUIROGA JAZMIN GABRIELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014004' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008157' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARAOZ JALDIN JOAQUIN RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCOBA CAMPOS NORMAN ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ ARAMAYO VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TANCARA SANDAGORDA JOSE FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CARVAJAL RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014007' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORTIZ CONDORI MARINA VALERIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PEREDO YURI GERMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014059' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BARRON NORMAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014087' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTERO GUEVARA JUAN JOSE EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014063' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014064' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014065' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008052' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ALANES GERARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MERIDA LOPEZ REINALDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARZURI SANTOS ANAYS PITI' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN FLORERO HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014066' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014035' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORSI SALDIAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014071' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER ALBERTO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014075' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANDIA COSSIO WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014139' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORSI SALDIAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014140' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUTRON GANDARILLAS FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014141' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014030' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUTRON GANDARILLAS FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUTRON GANDARILLAS FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA OROSCO JOSE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014042' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARAMANI AGUILAR ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014142' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES BALDERRAMA ARIEL VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014143' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014034' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URRUTIA MEDRANO JOSE A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA VILAR JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ APARICIO JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014046' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA NOGALES VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014049' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDERRAMA ANGULO ROGER WILMER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014144' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA BURGOS JHOMIL EFRAIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RICO SORIA GALVARRO GIOVANNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'R';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'R4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008053' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'L';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008077' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008240' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAURE RICHARD PATRICIA ANGELICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = 'I';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO QUIROGA ROGER ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008081' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803009' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006031' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006034' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006089' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008156' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006090' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008157' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006042' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006039' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006041' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006059' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006046' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANDRADE UZIEDA MARKO JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006049' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006062' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006100' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'H';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'L3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '21';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ JUAN ZENON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS MALDONADO EDGARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010008' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORIHUELA ROJAS JESSICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'F';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA ANTURIANO OSCAR RICARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' G ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDINA GAMBOA JULIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008059' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO COCA MIROSLAVA LINNETE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018007' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004044' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'F3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008043' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014087' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA JIMENEZ JAIME' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016011' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ ANDRADE OSVALDO WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIGO ROCHA INGRID VICKY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018009' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016046' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016057' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ ANDRADE OSVALDO WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARMIENTO FRANCO ARIEL ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018066' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUINONES HERBAS WALTER DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ QUIROZ RICHARD MILTON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ QUIROZ RICHARD MILTON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016049' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LIMA VACAFLOR TITO ANIBAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016051' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016052' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016021' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ GONZALES JACINTO GER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016023' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016025' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016026' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO LOPEZ PASCUAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014088' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ GONZALES JACINTO GER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', "CHOQUE FLORES ALEX D'ANCHGELO" )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016028' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VILLAZON JIMMY ERICK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016029' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ OSTRIA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016030' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016031' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ECHEVERRIA HERRERA RODRIGO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018054' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE OSCAR JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004206' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GALARZA BARRON ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016032' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VILLAZON JIMMY ERICK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ OSTRIA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016034' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FUENTES OMAR DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016036' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016038' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN SALAZAR JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN SALAZAR JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016039' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CASTELLON PAMELA ALEJANDRA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016040' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016041' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JAUREGUI CARRASCO MARIA IVONNE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JAUREGUI CARRASCO MARIA IVONNE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016059' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ORELLANA GONZALO ENRIQUE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ORELLANA GONZALO ENRIQUE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016090' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006063' )->first()->id;
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '15';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JIMENEZ GUZMAN DANILO ERNESTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJEDA JORGE JAVIER EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '5A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLADERA MAMANI BENEDICTA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '12';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010200' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008060' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008140' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010014' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010041' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO DEL CASTILLO INDIRA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010206' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008029' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010038' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010197' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010016' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN ROSALES K. ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010040' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010042' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010201' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO DEL CASTILLO INDIRA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010049' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010202' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010203' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010100' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AZERO ALCOCER PABLO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010204' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010205' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010035' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010102' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010214' )->first()->id;
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010066' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AZERO ALCOCER PABLO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010178' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010188' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010189' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010209' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010215' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010216' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010217' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010218' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008053' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008070' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010008' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAURE RICHARD PATRICIA ANGELICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008075' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008214' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006004' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008077' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008078' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008079' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008080' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008081' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008085' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008086' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008087' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008122' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008092' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008093' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008236' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008242' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008098' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008034' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008100' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008258' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008053' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008070' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010008' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAURE RICHARD PATRICIA ANGELICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008075' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008214' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006004' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008077' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'Por Designar ...' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008078' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008079' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008080' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008081' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008085' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008086' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008087' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008122' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008092' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008093' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008236' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008242' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008258' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008098' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MATIAS MARCA VIDAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008100' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARZE RUBEN DARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDIETA BRITO SONIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CHACON MARIBEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '14';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '18';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '22';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008237' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004050' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004174' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004192' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTA¥O MERIDA ROSARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004044' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004147' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008066' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008067' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILES ALVARADO SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006023' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008241' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004056' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OPORTO PEREYRA CARLA GABRIELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004109' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004145' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA DAVILA ROSA FABIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVILA CABRERA MARCELO ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004169' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004059' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ QUINTEROS EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004105' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEDRANO ANTEZANA RUDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004114' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004175' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004176' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004115' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004119' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004130' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004173' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004116' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004120' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO VALLEJOS SONIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004046' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE OVANDO JOSE ISIDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOEPFNER REYNOLDS MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'M';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CHOQUE UNO FRANCISCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALISS PAREDES EMILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'P4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ LEON JUAN A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MAMANI POCORI PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ BLANCO CARMEN ROSARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ FLORES ROBERT REYNOLDS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '13';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '15';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMPOS GUEVARA SHIRLEY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '19';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ VENTURA JORGE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '20';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803238' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'I';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL GIL ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RAMOS DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TENORIO PANUNI DORIAN WILFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRUJILLO ARANIBAR WILSON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'URE¥A PEREZ EDWIN CLAUDIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018016' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = ' G ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008014' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO ENCINAS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CACERES CRUZ FRANZ ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010008' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARDENAS RIVERA SERGIO RODRIGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS COLQUE AIDEE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO CESPEDES RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008052' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008157' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARRASCO CALVO ALVARO HERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREJON ROCABADO JULIO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO VIDAL DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARNICA AROSTEGUI ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018023' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE TORRICO IVAN FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018008' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MALDONADO LOPEZ PASCUAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CRESPO GARCIA ALBERTO RUDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SEVERICHE CHACON ANGELICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018026' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DIAZ COIMBRA ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUIRRE TORRICO IVAN FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018028' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES GARCIA HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018033' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018135' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COCA MENDEZ JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PONCE DE LEON MAURICIO LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014087' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTILLO ZEGARRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016091' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ RAMIREZ CARLOS ALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARISTO CRUZ ROGER IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS RODRIGUEZ LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018032' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018041' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BAUTISTA HERBAS TORIBIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018037' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018038' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018039' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOMEZ UGARTE GUIDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018040' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018044' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018056' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSSIO CABRERA WALTER FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018042' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018043' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018076' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTELLON TORRICO RAUL FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018079' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS ZAPATA ALEJANDRA CECILIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018046' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018049' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LAFUENTE RENAN JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDEZ VELASQUEZ IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018050' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LANGE GONZALES WILHELM EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUILLAGUAMAN LEYTON JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018077' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ PARRA GUSTAVO ADOLFO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016023' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PARDO IRIARTE JUAN FERNANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROCHA TRIVENO EDWIN AUGUSTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018054' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GOITIA ARZE OSCAR JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIVENO HERRERA PEDRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MORATO GAMBOA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARRIDO VARGAS ANDRES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CANEDO ESPINOZA WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARZE RUBEN DARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MENDIETA BRITO SONIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HERBAS ANGULO ADELINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERRUFINO GUARDIA ERICK VLADIMIR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CHACON MARIBEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ARNEZ CINTHIA CAROLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004045' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006018' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS VALLEJOS LUZ VIRGINIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORREZ PELAEZ RAUL WILDER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALENZUELA MIRANDA ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'M2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'N4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'O4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'Q2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '14';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '18';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '22';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZEGARRA DORADO LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008237' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALIZAYA CAHUANA FLAVIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO MOREIRA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALINAS PERICON WALTER OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004050' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA FERNANDEZ HENRY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004174' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006019' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO TROCHE MILKA MONICA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'I4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'J3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ CESPEDES ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'K5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS REINAGA JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CASTELLON CARLOS ESTEBAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MARTINEZ MAIDA AMILCAR SAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUARACHI ARELLANO RONALD ROLY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RELOS PACO SANTIAGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008241' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ CORDOVA ELIZABETH' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004044' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARCE GARCIA OMAR ORLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004147' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS CESPEDES JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESPINOZA ALCOCER JENNY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA ROSAS BORIS ARTURO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MUNOZ COLLAZOS MARIA SUSANA DEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006020' )->first()->id;
        $nombreGrupo = 'A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RUIZ UCUMARI IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'A2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VISCARRA VARGAS MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'B2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLAROS CRUZ LUIS GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'G4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUELLAR OLIVERA OSCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ MARTINEZ VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'H3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008066' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MULLER SANTA CRUZ HANS CRISTIAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEREZ FERREL ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZURITA ORELLANA RIMER MAURICIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILES ALVARADO SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004055' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004183' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS MALDONADO ISRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016060' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TRIGO ROCHA INGRID VICKY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2018057' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERAN AIZA RODOLFO RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UREY CONTRERAS MARIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004056' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILASECA GAMARRA LUIS ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004061' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OPORTO PEREYRA CARLA GABRIELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004145' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA DAVILA ROSA FABIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'HOSSE SAHONERO RONALD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVILA CABRERA MARCELO ARMANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004169' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARZABE MAURE JOSE OMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DOMINGUEZ CHURA RAUL AGAPITO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALVAREZ CAERO MARIA MERCEDES' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA MEJIA EDWIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004184' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALFARO DENUS GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004196' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOJA CARDENAS GASTON GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004069' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SOTO SOLIZ JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004072' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004191' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004197' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004198' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALCON PU¥A JUAN NOLASCO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004201' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO JALDIN ANA MARIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004005' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JOFFRE ISMAEL JESSICA DIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004078' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004200' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOJA CARDENAS GASTON GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008067' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014087' )->first()->id;
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARISPE SANTANDER AGUSTIN WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004006' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004181' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004187' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO MEJIA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004193' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ALEJO ESPINOZA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004199' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004079' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RIOS DEL PRADO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004083' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDERRAMA IDINA JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004180' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CARBALLO CADIMA SERGIO CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA MONTAN JOSE EDUARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004182' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BALDERRAMA IDINA JOSE LUIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004186' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ ARZE JAVIER BERNARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LOPEZ ARZE JAVIER BERNARDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2004188' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGUILAR MAMANI WILSON GONZALO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARNEZ CAMACHO MARIA DEL CARMEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010122' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803001' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CESPEDES GUIZADA MARIA BENITA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2006063' )->first()->id;
        $nombreGrupo = ' C ';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CASTRO LAZARTE CECILIA BEATRIZ' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'C7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FUENTES MIRANDA IVAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'UGARTE CEJAS FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LUCANO LUCANO MARCELO JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS VARGAS JUAN CARLOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES FLORES FREDDY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'D7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MOREIRA CALIZAYA RENE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SHITIKOV GAGARINA GALINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORDONEZ SALVATIERRA MIGUEL ANGEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN SAAVEDRA ROCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAVALOS BROZOVIC JORGE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = 'E8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VASQUEZ CARRILLO MICHAEL HUASCAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008019' )->first()->id;
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '14';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYALA TRUJILLO SERGIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TABORGA ACHA FIDEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PENALOZA PACHECO JUAN PABLO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PATINO TITO RONALD EDGAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LEON ROMERO GUALBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRES JURADO HANS BYRON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008054' )->first()->id;
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GONZALES CARTAGENA LUCIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '11';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROJAS ZURITA RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '12';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '17';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ SEJAS JUAN ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'IBARRA VAQUILLA OSMAR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '9';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DAMIAN LORENZO CESILIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010010' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '10';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'USTARIZ VARGAS HERNAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010140' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LAIME ZAPATA VALENTIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008022' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SILVA RAMOS HERNAN VICTOR' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CLADERA MAMANI BENEDICTA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '8';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008056' )->first()->id;
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TERRAZAS LOBO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OJOPI MORENO LUIS GUSTAVO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BUSTILLOS VARGAS ALEX ISRRAEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '7A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VALLEJO CAMACHO MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ZURITA FREDDY MARCOS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008057' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FERNANDEZ RAMOS DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'DELGADILLO COSSIO DAVID ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010003' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010013' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AGREDA CORRALES LUIS ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008058' )->first()->id;
        $nombreGrupo = '3A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CATARI RIOS RAUL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TAYLOR TERRAZAS DARLONG HOWARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008059' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA LUPI CELSO ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE GIL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008060' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JUCHANI BAZUALDO DEMETRIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZABALAGA MONTANO OSCAR A.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010012' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANZUR SORIA CARLOS B.' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '6';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010015' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010141' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ZAMBRANA BURGOS JHOMIL EFRAIN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2008061' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SORUCO MAITA JOSE ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'OMONTE OJALVO JOSE ROBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010016' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'APARICIO YUJA TATIANA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010017' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010018' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016046' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEJIA URQUIETA VICTOR RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016048' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PERICON BALDERRAMA ALFREDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'REVOLLO TERAN LUZ MAYA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803002' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'PEETERS ILONAA MAGDA LENA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010022' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '1A';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SALAZAR SERRUDO CARLA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN ROSALES K. ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010035' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CUSSI NICOLAS GROVER HUMBERTO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYOROA CARDOZO JOSE RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010053' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES SOLIZ JUAN MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010142' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016051' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MANCHEGO CASTELLON ROBERTO JUAN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016057' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUTIERREZ ANDRADE OSVALDO WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'SARMIENTO FRANCO ARIEL ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010019' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010020' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CAMACHO DEL CASTILLO INDIRA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010027' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010047' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010143' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA MOLINA JUAN RUBEN' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010144' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010177' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010024' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FLORES VILLARROEL CORINA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'BLANCO COCA LETICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ESCALERA FERNANDEZ DAVID' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010145' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'TORRICO BASCOPE ROSEMARY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010146' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTECINOS CHOQUE MARCO ANTONIO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010186' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ORELLANA ARAOZ JORGE WALTER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010216' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTOYA BURGOS YONY RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2014087' )->first()->id;
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ACHA PEREZ SAMUEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016092' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS ANTEZANA ADEMAR MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '1803009' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GRILO SALVATIERRA MARIA ESTELA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010102' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010116' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'AYOROA CARDOZO JOSE RICHARD' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010119' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'JALDIN ROSALES K. ROLANDO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL TAPIA HENRY FRANK' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010209' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010210' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016059' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GUZMAN ORELLANA GONZALO ENRIQUE' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010122' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MONTANO QUIROGA VICTOR HUGO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '4';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ROMERO RODRIGUEZ PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '5';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VILLARROEL NOVILLO JIMMY' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010147' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ANTEZANA CAMACHO MARCELO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010178' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSTAS JAUREGUI VLADIMIR ABEL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010188' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'FIORILO LOZADA AMERICO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010189' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'GARCIA PEREZ CARMEN ROSA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010217' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'CALANCHA NAVIA BORIS' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2010218' )->first()->id;
        $nombreGrupo = '1';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'RODRIGUEZ BILBAO ERIKA PATRICIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016021' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'QUIROZ CHAVEZ ABDON' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016023' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'VARGAS PEREDO EMIR FELIX' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'ARANIBAR LA FUENTE LIGIA' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016027' )->first()->id;
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', "CHOQUE FLORES ALEX D'ANCHGELO" )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016049' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'LIMA VACAFLOR TITO ANIBAL' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $nombreGrupo = '3';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'MEJIA URQUIETA VICTOR RAMIRO' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        $codigoMateria = DB::table('materias')->select('id')->where('codigo', '=', '2016052' )->first()->id;
        $nombreGrupo = '2';
        $codigoDocente = DB::table('docentes')->select('id')->where('nombre', '=', 'COSIO PAPADOPOLIS CARLOS JAVIER' )->first()->id;
        
        DB::table('grupos')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => $nombreGrupo ,
            'docente_id' => $codigoDocente ,
            'materia_id' => $codigoMateria ,
        ]);
        
        
        
    }
}
