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
        
        DB::table('administradors')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'FERNANDO CUENCA VARGAS',
            'contrasenia' => '',
            'cod_SIS' => ''
        ]);

        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'DILAN ALEJANDRO ANTEZANA SERRANO',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('administradors')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'DILAN ALEJANDRO ANTEZANA SERRANO',
            'contrasenia' => '',
            'cod_SIS' => ''
        ]);
        
        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'PABLO SAUL MAGUINA APAZA',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('administradors')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'PABLO SAUL MAGUINA APAZA',
            'contrasenia' => '',
            'cod_SIS' => ''
        ]);

        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'ADRIAN MARCELO CUBA EGUINO',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('administradors')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'ADRIAN MARCELO CUBA EGUINO',
            'contrasenia' => '',
            'cod_SIS' => ''
        ]);

        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'DIANA VARGAS ORELLANA',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('administradors')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => '',
            'contrasenia' => 'DIANA VARGAS ORELLANA',
            'cod_SIS' => ''
        ]);

        DB::table('docentes')->insert([
            'id' => Str::uuid() -> toString(),
            'cod_SIS' => '',
            'nombre' => 'NIGEL DAVILA MATURANO',
            'celular' => '',
            'contrasenia' => '',
            'email' => ''
        ]);

        DB::table('administradors')->insert([
            'id' => Str::uuid() -> toString(),
            'nombre' => 'NIGEL DAVILA MATURANO',
            'contrasenia' => '',
            'cod_SIS' => ''
        ]);

    }
}
