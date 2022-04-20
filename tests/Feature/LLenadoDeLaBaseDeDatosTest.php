<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\AulaSeeder;

class LLenadoDeLaBaseDeDatosTest extends TestCase
{
    use RefreshDatabase;

    public function test_insertar_tres_aulas(){
        $this->seed(AulaSeeder::class);

        $this->assertDatabaseCount('aulas',3);
    }

    public function test_verificar_existencia_aula(){
        $this->seed(AulaSeeder::class);
        $this->assertDatabaseHas('aulas',[
            'id' => '1'
        ]);
    }
}
