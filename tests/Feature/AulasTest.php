<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AulasTest extends TestCase
{
    public function test_solicitar_aulas_disponibles(){
        $response = $this->get('aula/disponibles', ['fecha' => '2022-06-23']);

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_de_aulas_disponibles(){
        $response = json_decode($this->get('aula/disponibles', ['fecha' => '2022-06-23'])->getContent(), true);
        
        $this->assertTrue(sizeof($response) > 0);
    }

    public function test_verificar_forma_de_respuesta_solicitud_de_aulas_disponibles(){
        $response = json_decode($this->get('aula/disponibles', ['fecha' => '2022-06-23'])->getContent(), true);
        $response = json_encode($response[0]);

        $this -> assertTrue(str_contains($response, "id") and str_contains($response, "nombre") and str_contains($response, "ubicacion") and str_contains($response, "capacidad") and str_contains($response, "descripcion") and str_contains($response, "disponible_para_uso") and str_contains($response, "hora_inicio") and str_contains($response, "hora_fin"));
    }
}
