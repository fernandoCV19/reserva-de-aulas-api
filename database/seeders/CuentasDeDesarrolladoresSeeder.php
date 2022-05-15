<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class CuentasDeDesarrolladoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'FERNANDO CUENCA VARGAS',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345001",
            "nombre" => "FERNANDO CUENCA VARGAS",
            "celular" => "7123456",
            "contrasenia" => "12345001",
            "email" => "fercv@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=', "FERNANDO CUENCA VARGAS" )->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);


        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/crearAdmin',[
            "cod_SIS" => "12346001",
            "nombre" => "FERNANDO CUENCA VARGAS",
            "contrasenia" => "12346001"
        ]);



        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'DILAN ALEJANDRO ANTEZANA SERRANO',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345002",
            "nombre" => "DILAN ALEJANDRO ANTEZANA SERRANO",
            "celular" => "7776777",
            "contrasenia" => "12345002",
            "email" => "dilanaas@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"DILAN ALEJANDRO ANTEZANA SERRANO")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/crearAdmin',[
            "cod_SIS" => "12346002",
            "nombre" => "DILAN ALEJANDRO ANTEZANA SERRANO",
            "contrasenia" => "12346002",
        ]);


        
        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'PABLO SAUL MAGUINA APAZA',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345003",
            "nombre" => "PABLO SAUL MAGUINA APAZA",
            "celular" => "7123456",
            "contrasenia" => "12345003",
            "email" => "pablosma@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=', "PABLO SAUL MAGUINA APAZA" )->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/crearAdmin',[
            "cod_SIS" => "12346003",
            "nombre" => "PABLO SAUL MAGUINA APAZA",
            "contrasenia" => "12346003"
        ]);




        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'ADRIAN MARCELO CUBA EGUINO',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345004",
            "nombre" => "ADRIAN MARCELO CUBA EGUINO",
            "celular" => "7123456",
            "contrasenia" => "12345004",
            "email" => "adrianmce@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=', "ADRIAN MARCELO CUBA EGUINO" )->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/crearAdmin',[
            "cod_SIS" => "12346004",
            "nombre" => "ADRIAN MARCELO CUBA EGUINO",
            "contrasenia" => "12346004"
        ]);



        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'DIANA VARGAS ORELLANA',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345005",
            "nombre" => "DIANA VARGAS ORELLANA",
            "celular" => "7776777",
            "contrasenia" => "12345005",
            "email" => "dianavo@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=', "DIANA VARGAS ORELLANA" )->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/crearAdmin',[
            "cod_SIS" => "12346005",
            "nombre" => "DIANA VARGAS ORELLANA",
            "contrasenia" => "12346005"
        ]);



        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'NIGEL DAVILA MATURANO',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345006",
            "nombre" => "NIGEL DAVILA MATURANO",
            "celular" => "7776777",
            "contrasenia" => "12345006",
            "email" => "nigeldm@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"NIGEL DAVILA MATURANO")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/crearAdmin',[
            "cod_SIS" => "12345006",
            "nombre" => "NIGEL DAVILA MATURANO",
            "contrasenia" => "12345006"
        ]);

                                  

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345007",
            "nombre" => "VILLARROEL TAPIA HENRY FRANK",
            "celular" => "7776777",
            "contrasenia" => "12345007",
            "email" => "henryvt@gmail.com"
        ]);  

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"VILLARROEL TAPIA HENRY FRANK")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345008",
            "nombre" => "MANZUR SORIA CARLOS B.",
            "celular" => "7776777",
            "contrasenia" => "12345008",
            "email" => "carlosms@gmail.com"
        ]);

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"MANZUR SORIA CARLOS B.")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        

        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345009",
            "nombre" => "MONTANO QUIROGA VICTOR HUGO",
            "celular" => "7776777",
            "contrasenia" => "12345009",
            "email" => "victormq@gmail.com"
        ]);  

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"MONTANO QUIROGA VICTOR HUGO")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345010",
            "nombre" => "SALAZAR SERRUDO CARLA",
            "celular" => "7776777",
            "contrasenia" => "12345010",
            "email" => "carlass@gmail.com"
        ]);  

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=', "SALAZAR SERRUDO CARLA")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345011",
            "nombre" => "COSTAS JAUREGUI VLADIMIR ABEL",
            "celular" => "7776777",
            "contrasenia" => "12345011",
            "email" => "vladimircj@gmail.com"
        ]);  

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"COSTAS JAUREGUI VLADIMIR ABEL")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345012",
            "nombre" => "BLANCO COCA LETICIA",
            "celular" => "7776777",
            "contrasenia" => "12345012",
            "email" => "leticiabc@gmail.com"
        ]);  

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"BLANCO COCA LETICIA")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345013",
            "nombre" => "USTARIZ VARGAS HERNAN",
            "celular" => "7776777",
            "contrasenia" => "12345013",
            "email" => "hernanuv@gmail.com"
        ]);  

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"USTARIZ VARGAS HERNAN")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
        
        
        Http::post('https://reserva-aulas-stage.herokuapp.com/auth/activarDocente',[
            "cod_SIS" => "12345014",
            "nombre" => "FLORES VILLARROEL CORINA",
            "celular" => "7776777",
            "contrasenia" => "12345014",
            "email" => "corinafv@gmail.com"
        ]);    

        $idDocente = DB::table('docentes')->select('id')->where('nombre', '=',"FLORES VILLARROEL CORINA")->first()->id;

        Http::put('https://reserva-aulas-stage.herokuapp.com/admin/validarCuenta/'.$idDocente);
    }
}
