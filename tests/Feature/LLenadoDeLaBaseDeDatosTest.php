<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\AulaSeeder;

class LLenadoDeLaBaseDeDatosTest extends TestCase
{
    use RefreshDatabase;

    public function test_insertar_un_aula(){
        $this->seed(AulaSeeder::class);

        $this->assertDatabaseCount('aulas',2);
    }
}
