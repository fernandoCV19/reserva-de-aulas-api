<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PeriodosRealesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '6:45:00',
            'hora_fin' => '8:15:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '8:15:00',
            'hora_fin' => '9:45:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '9:45:00',
            'hora_fin' => '11:15:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '11:15:00',
            'hora_fin' => '12:45:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '12:45:00',
            'hora_fin' => '14:15:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '14:15:00',
            'hora_fin' => '15:45:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '15:45:00',
            'hora_fin' => '17:15:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '17:15:00',
            'hora_fin' => '18:45:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '18:45:00',
            'hora_fin' => '20:15:00'
        ]);

        DB::table('periodos')->insert([
            'id' => Str::uuid() -> toString(),
            'hora_inicio' => '20:15:00',
            'hora_fin' => '21:45:00'
        ]);
    }
}
