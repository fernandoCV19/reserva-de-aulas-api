<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AulasTest extends TestCase
{
    public function test_solicitar_aulas_pendientes(){
        $response = $this->get('aula/disponibles', ['fecha' => '19-01-2000']);

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_de_aulas_solicitadas(){
        $response = $this->get('aula/disponibles', ['fecha' => '19-01-2000'])->getContent();
        var_dump($response);
    }
}
