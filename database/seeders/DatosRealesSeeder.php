<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Database\Seeders\AulasRealesSeeder;
use Database\Seeders\PeriodosRealesSeeder;
use Database\Seeders\MateriasRealesSeeder;
use Database\Seeders\DocentesRealesSeeder;
use Database\Seeders\GruposRealesSeeder;

use Database\Seeders\ReservasParaPruebas;
use Database\Seeders\SolicitudesReservasParaPruebas;
use Database\Seeders\CuentasDeDesarrolladoresSeeder;

class DatosRealesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AulasRealesSeeder::class,
            PeriodosRealesSeeder::class,
            MateriasRealesSeeder::class,
            DocentesRealesSeeder::class,
            GruposRealesSeeder::class,
            ReservasParaPruebas::class,
            SolicitudesReservasParaPruebas::class,
            CuentasDeDesarrolladoresSeeder::class
        ]);
    }
}
