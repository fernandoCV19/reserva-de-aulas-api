<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Database\Seeders\AulaSeeder;
use Database\Seeders\DocenteSeeder;
use Database\Seeders\GrupoSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\DatosReservaSeeder;
use Database\Seeders\SolicitudReservaSeeder;
use Database\Seeders\JustificacionSeeder;
use Database\Seeders\ReservaSeeder;
use Database\Seeders\PeriodoSeeder;
use Database\Seeders\AdministradorSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call([
            AulaSeeder::class,
            DocenteSeeder::class,
            MateriaSeeder::class,
            GrupoSeeder::class,
            DatosReservaSeeder::class,
            SolicitudReservaSeeder::class,
            JustificacionSeeder::class,
            ReservaSeeder::class,
            PeriodoSeeder::class,
            AdministradorSeeder::class
        ]);
    }
}
