<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MailTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_solicitar_notificar_rechazo()
    {
        $response = $this->post('mail/notificarRechazo', ['email' => "prueb@gmail.com"]);

        $response->assertStatus(200);
    }

    public function test_solicitar_notificar_aceptacion()
    {
        $response = $this->post('mail/notificarAceptacion', ['email' => "prueb@gmail.com"]);

        $response->assertStatus(200);
    }

    public function test_solicitar_notificar_notificacion_perzonalizada()
    {
        $response = $this->post('mail/notificarRechazo', ['email' => "prueb@gmail.com", "mensaje" => "Mensaje personalizado"]);

        $response->assertStatus(200);
    }
}
