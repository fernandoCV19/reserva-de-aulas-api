<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\DatosReservaTestSeeder;

class DatosReservaTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = DatosReservaTestSeeder::class;

    /**
     * A basic feature test example.
     *   datos-reserva
     * @return void
     */
    public function test_solicitar_aulas_de_datos_reserva(){
        $response = $this->get('datos-reserva/aulas/1');

        $response->assertStatus(200);
    }

    public function test_verificar_aulas_de_datos_reserva(){
        $response = json_decode($this->get('datos-reserva/aulas/1')->getContent(),true);

        $response = $response['aulas'];
    
        $res = $response[0]['nombre'] == '691F' and $response[1]['nombre'] == '692F' and $response[2]['nombre'] == '693F';

        $this->assertTrue($res);
    }

    public function test_verificar_cantidad_aulas_de_datos_reserva(){
        $response = json_decode($this->get('datos-reserva/aulas/1')->getContent(),true);

        $this->assertTrue(sizeof($response['aulas']) == 3);
    }

    public function test_verificar_informacion_de_datos_reserva(){
        $response = json_decode($this->get('datos-reserva/aulas/1')->getContent(),true);

        $response = $response['datos_reserva'];
    
        $res = $response['id'] == 1 and $response['fecha'] == '2022-01-19' and $response['numero_estimado'] == 100;

        $this->assertTrue($res);
    }



    public function test_solicitar_eliminacion_aulas_de_datos_reserva(){
        $response = $this->delete('datos-reserva/aulas/1');

        $response->assertStatus(200);
    }

    public function test_verificar_cantidad_aulas_despues_de_eliminacion_de_datos_reserva(){
        $response = $this->delete('datos-reserva/aulas/1');

        $response = json_decode($this->get('datos-reserva/aulas/1')->getContent(),true);

        $this->assertTrue(sizeof($response['aulas']) == 0);
    }



    public function test_solicitar_datos_reserva(){
        $response = $this->get('datos-reserva/1');

        $response->assertStatus(200);
    }

    public function test_verificar_datos_reserva(){
        $response = json_decode($this->get('datos-reserva/1')->getContent(),true);
    
        $res = $response['id'] == 1 and $response['fecha'] == '2022-01-19' and $response['numero_estimado'] == 100;

        $this->assertTrue($res);
    }

    

    public function test_solicitar_creacion_datos_reserva(){
        $response = $this->post('datos-reserva/',[]);

        $response->assertStatus(200);
    }

    public function test_verificar_creacion_datos_reserva(){
        $response = $this->post('datos-reserva/',[]);

        $this->assertDatabaseHas('datos_reservas',[
            'id' => '2'
        ]);
    }
}
