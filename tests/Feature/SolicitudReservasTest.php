<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\SolicitudReservasTestSeeder;

class SolicitudReservasTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = SolicitudReservasTestSeeder::class;

    public function test_solicitar_solicitudes_de_reserva_por_antiguedad(){
        $response = $this -> get('solicitud-reserva/antiguedad');

        $response -> assertStatus(200);
    }

    public function test_verificar_cantidad_solicitudes_de_reserva_por_antiguedad(){
        $response = json_decode($this -> get('solicitud-reserva/antiguedad') -> getContent(), true);

        $tam = sizeof($response);

        $this -> assertEquals($tam, 3);
    }

    public function test_verificar_orden_correcto_solicitudes_de_reserva_por_antiguedad(){
        $response = json_decode($this -> get('solicitud-reserva/antiguedad') -> getContent(), true);

        $verificacion1 = $response[0]['fecha_creacion'] == '2021-01-20 00:00:00';
        $verificacion2 = $response[1]['fecha_creacion'] == '2021-01-21 00:00:00';
        $verificacion3 = $response[2]['fecha_creacion'] == '2021-01-23 00:00:00';

        $this -> assertTrue($verificacion1 and $verificacion2 and $verificacion3);
    }


    public function test_solicitar_solicitudes_de_reserva_por_proximidad(){
        $response = $this -> get('solicitud-reserva/proximos');

        $response -> assertStatus(200);
    }

    public function test_verificar_cantidad_solicitudes_de_reserva_por_proximidad(){
        $response = json_decode($this -> get('solicitud-reserva/proximos') -> getContent(), true);

        $tam = sizeof($response);

        $this -> assertEquals($tam, 3);
    }

    public function test_verificar_orden_correcto_solicitudes_de_reserva_por_proximidad(){
        $response = json_decode($this -> get('solicitud-reserva/proximos') -> getContent(), true);

        $verificacion1 = $response[0]['fecha'] == '2022-10-20';
        $verificacion2 = $response[1]['fecha'] == '2022-10-21';
        $verificacion3 = $response[2]['fecha'] == '2022-10-23';

        $this -> assertTrue($verificacion1 and $verificacion2 and $verificacion3);
    }


    
    public function test_solicitar_solicitudes_de_reserva_pendientes(){
        $response = $this -> get('solicitud-reserva/pendientes');

        $response -> assertStatus(200);
    }

    public function test_verificar_cantidad_solicitudes_de_reserva_pendientes(){
        $response = json_decode($this -> get('solicitud-reserva/pendientes') -> getContent(), true);

        $tam = sizeof($response);

        $this -> assertEquals($tam, 3);
    }

    public function test_verificar_orden_correcto_solicitudes_de_reserva_pendientes(){
        $response = json_decode($this -> get('solicitud-reserva/pendientes') -> getContent(), true);

        $verificacion1 = $response[0]['id'] == '1';
        $verificacion2 = $response[1]['id'] == '2';
        $verificacion3 = $response[2]['id'] == '4';

        $this -> assertTrue($verificacion1 and $verificacion2 and $verificacion3);
    }

    
    public function test_solicitar_estado(){
        $response = $this -> get('solicitud-reserva/estado/1');

        $response -> assertStatus(200);
    }

    public function test_verificar_estado_solicitud_pendiente(){
        $response = json_decode($this -> get('solicitud-reserva/estado/1') -> getContent(), true);

        $this -> assertEquals($response['estado'], 'pendiente');
    }
    
    public function test_verificar_estado_solicitud_rechazada(){
        $response = json_decode($this -> get('solicitud-reserva/estado/3') -> getContent(), true);

        $this -> assertEquals($response['estado'], 'RECHAZADO');
    }


    public function test_solicitar_cambio_estado_solicitud(){
        $response = $this -> put('solicitud-reserva/cambio-estado/1');

        $response -> assertStatus(200);
    }

    public function test_verificar_cambio_estado_solicitud(){
        $response = json_decode($this -> put('solicitud-reserva/cambio-estado/1') -> getContent(), true);

        $this->assertDatabaseHas('solicitud_reservas',[
            'id' => '1',
            'estado' => 'RECHAZADO'
        ]);
    }


    public function test_solicitar_solicitud_de_reserva_por_id(){
        $response = $this -> get('solicitud-reserva/1');

        $response -> assertStatus(200);
    }

    public function test_verificar_solicitud_de_reserva_por_id(){
        $response = json_decode($this -> get('solicitud-reserva/1') -> getContent(), true);

        print_r($response);

        $verificacion1 = $response['id'] == 1;
        $verificacion2 = $response['estado'] == 'pendiente';
        $verificacion3 = $response['fecha_creacion'] == '2021-01-20 00:00:00';
        $verificacion4 = $response['datos_reserva_id'] == 1;

        $this -> assertTrue($verificacion1 and $verificacion2 and $verificacion3 and $verificacion4);
    }

    public function test_solicitar_creacion_solicitud_de_reserva(){
        $response = $this -> post('solicitud-reserva',[
            "numero_estimado" => 0,
            "fecha" => "2022-12-30",
            "aulasId" => [1,2],
            "gruposId" => [1],
            "justificacionesLista" => ["Tomar examen"],
            "periodosId" => [1]
        ]);

        $response -> assertStatus(201);
    }

    public function test_verificar_cantidad_despues_creacion_solicitud_de_reserva(){
        $response = $this -> post('solicitud-reserva',[
            "numero_estimado" => 0,
            "fecha" => "2022-12-30",
            "aulasId" => [1,2],
            "gruposId" => [1],
            "justificacionesLista" => ["Tomar examen"],
            "periodosId" => [1]
        ]);

        $this->assertDatabaseCount('solicitud_reservas', 5);
    }
}
