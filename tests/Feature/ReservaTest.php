<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\ReservaTestSeeder;

class ReservaTest extends TestCase
{
    use RefreshDatabase;
    protected $seeder = ReservaTestSeeder::class;
 
    public function test_solicitar_aulas_de_datos_de_reserva()
    {
        $response = $this->get('reserva/aulas/1');

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_aulas_de_datos_de_reserva()
    {
        $response = json_decode($this->get('reserva/aulas/1')->getContent(), true);

        $tam = sizeof($response['aulas']);

        $this -> assertEquals($tam, 3);
    }

    public function test_verificar_aulas_de_datos_de_reserva()
    {
        $response = json_decode($this->get('reserva/aulas/1')->getContent(), true);

        $verificacion1 = $response['aulas'][0]['nombre'] == "691F";
        $verificacion2 = $response['aulas'][1]['nombre'] == "692F";
        $verificacion3 = $response['aulas'][2]['nombre'] == "693F";

        $this -> assertTrue($verificacion1 and $verificacion2 and $verificacion3);
    }


    public function test_solicitar_creacion_datos_de_reserva()
    {
        $response = $this->post('reserva/crearReserva/1');

        $response->assertStatus(200);
    }
}
