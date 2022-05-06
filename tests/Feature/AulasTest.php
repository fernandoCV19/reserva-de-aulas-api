<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\AulasTestSeeder;

class AulasTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = AulasTestSeeder::class;

    public function test_solicitar_aulas_disponibles(){
        $response = $this->post('aula/disponibles', ['fecha' => '2022-01-19']);

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_de_aulas_disponibles_cuando_un_aulas_esta_ocupada(){
        $response = json_decode($this->post('aula/disponibles', ['fecha' => '2022-01-19'])->getContent(), true);

        $this->assertTrue(sizeof($response) == 4);
    }

    public function test_verificar_cantidad_de_aulas_disponibles_cuando_ningun_aula_esta_reservada(){
        $response = json_decode($this->post('aula/disponibles', ['fecha' => '2022-01-22'])->getContent(), true);
        
        $this->assertTrue(sizeof($response) == 5);
    }

    public function test_verificar_forma_de_respuesta_solicitud_de_aulas_disponibles(){
        $response = json_decode($this->post('aula/disponibles', ['fecha' => '2022-01-19'])->getContent(), true);
        $response = json_encode($response[0]);

        $this -> assertTrue(str_contains($response, "id") and str_contains($response, "nombre") and str_contains($response, "ubicacion") and str_contains($response, "capacidad") and str_contains($response, "descripcion") and str_contains($response, "disponible_para_uso") and str_contains($response, "hora_inicio") and str_contains($response, "hora_fin"));
    }



    public function test_solicitar_aulas_pendientes(){
        $response = $this->post('aula/pendientes', ['fecha' => '2022-01-20']);

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_aulas_pendientes(){
    
        $response = $this->post('aula/pendientes', ['fecha' => '2022-01-20']);

        $response = json_decode($response->getContent(), true);

        $this->assertTrue(sizeof($response) == 1);
    }

    public function test_verificar_cantidad_de_aulas_disponibles_cuando_ningun_aula_esta_pendiente(){
        $response = json_decode($this->post('aula/pendientes', ['fecha' => '2022-01-15'])->getContent(), true);
        
        $this->assertTrue(sizeof($response) == 0);
    }
    
    public function test_verificar_forma_de_respuesta_solicitud_de_aulas_pendientes(){
        $response = json_decode($this->post('aula/pendientes', ['fecha' => '2022-01-20'])->getContent(), true);

        $response = json_encode($response[0]);

        $this -> assertTrue(str_contains($response, "id") and str_contains($response, "nombre") and str_contains($response, "ubicacion") and str_contains($response, "capacidad") and str_contains($response, "descripcion") and str_contains($response, "disponible_para_uso") and str_contains($response, "hora_inicio") and str_contains($response, "hora_fin"));
    }
    
}
