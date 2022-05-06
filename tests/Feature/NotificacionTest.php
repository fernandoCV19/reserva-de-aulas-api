<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\NotificacionTestSeeder;

class NotificacionTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = NotificacionTestSeeder::class;

    public function test_solicitar_notificacion()
    {
        $response = $this->get('notificacion/1');

        $response->assertStatus(200);
    }
    
    public function test_verificar_notificacion()
    {
        $response = json_decode($this->get('notificacion/1')->getContent(), true);

        $verificar = $response['mensaje'];

        $this -> assertEquals($verificar, "Este es el mensaje de la notificacion 1");
    }

    public function test_solicitar_crear_notificacion()
    {
        $response = $this->post('notificacion/', [
            'mensajeNotificacion' => "Este es el mensaje de la notificacion 1",
            'id_docente' => '1'
        ]);

        $response->assertStatus(201);
    }

    public function test_verificar_cantidad_notifaciones()
    {
        $response = $this->post('notificacion/', [
            'mensajeNotificacion' => "Este es el mensaje de la notificacion 1",
            'id_docente' => '1'
        ]);

        $this->assertDatabaseCount('notificacions',2);
    }

    public function test_verificar_datos_nueva_notificacion()
    {
        $response = $this->post('notificacion/', [
            'mensajeNotificacion' => "Este es el mensaje de la notificacion 1",
            'id_docente' => '1'
        ]);

        $this->assertDatabaseHas('notificacions',[
            'mensaje' => "Este es el mensaje de la notificacion 1",
            'fecha' => now(),
            'docente_id' => 1
        ]);
    }
}
