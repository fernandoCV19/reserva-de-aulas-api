<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\ReservaTestSeeder;

class Res3rvaTest extends TestCase
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


    public function test_solicitar_creacion_de_reserva()
    {
        $response = $this->post('reserva/crearReserva/1');

        $response->assertStatus(201);
    }

    public function test_verificar_creacion_de_reserva()
    {
        $response = $this->post('reserva/crearReserva/1');

        $this->assertDatabaseCount('reservas',3);
    }

    public function test_verificar_eliminacion_solicitud_de_reserva()
    {
        $response = $this->post('reserva/crearReserva/1');

        $this->assertDatabaseCount('solicitud_reservas',1);
    }

    public function test_verificar_creacion_de_reserva_datos()
    {
        $response = $this->post('reserva/crearReserva/1');

        $this->assertDatabaseHas('reservas',[
            'datos_reserva_id' => 3
        ]);
    }


    public function test_solicitar_ver_reservas()
    {
        $response = $this->get('reserva');

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_ver_reservas()
    {
        $response = json_decode($this->get('reserva') -> getContent(), true);

        $tam = sizeof($response);

        $this -> assertEquals($tam, 2);
    }

    public function test_verificar_contenido_ver_reservas()
    {
        $response = json_decode($this->get('reserva') -> getContent(), true);

        $verificacion1 = $response[0]['id'] == 1 and $response[0]['datos_reserva_id'] == 1;
        $verificacion2 = $response[1]['id'] == 2 and $response[1]['datos_reserva_id'] == 2;

        $this -> assertTrue($verificacion1 and $verificacion2);
    }


    public function test_solicitar_ver_reservas_por_id()
    {
        $response = $this->get('reserva/1');

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_ver_reservas_por_id()
    {
        $response = json_decode($this->get('reserva/1') -> getContent(), true);

        $tam = sizeof($response);

        $this -> assertEquals($tam, 3);
    }

    public function test_verificar_contenido_ver_reservas_por_id()
    {
        $response = json_decode($this->get('reserva/1') -> getContent(), true);

        $verificacion1 = $response['id'] == 1 and $response['datos_reserva_id'] == 1;

        $this -> assertTrue($verificacion1);
    }

}
