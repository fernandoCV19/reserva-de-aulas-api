<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\DocentesTestSeeder;

class DocentesTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = DocentesTestSeeder::class;

    public function test_solicitar_notificaciones_docente(){
        $response = $this -> get('docente/notificaciones/1');

        $response -> assertStatus(200);
    }

    public function test_verificar_cantidad_notificaciones_docente(){
        $response = json_decode( $this -> get('docente/notificaciones/1') -> getContent(), True);

        $val = sizeof($response);

        $this -> assertEquals($val, 3);
    }

    public function test_verificar_contenido_notificaciones_docente(){
        $response = json_decode( $this -> get('docente/notificaciones/1') -> getContent(), True);

        $verificacion1 = $response[0]['mensaje'] == 'Este es el mensaje de la notificacion 1';
        $verificacion2 = $response[1]['mensaje'] == 'Este es el mensaje de la notificacion 2';
        $verificacion3 = $response[2]['mensaje'] == 'Este es el mensaje de la notificacion 3';

        $this -> assertTrue($verificacion1 and $verificacion2 and $verificacion3);
    }
}
