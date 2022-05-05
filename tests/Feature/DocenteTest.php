<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\DocenteTestSeeder;

class DocenteTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = DocenteTestSeeder::class;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_solicitar_login(){
        //$this -> activarUsuario();
        $response = $this->post('auth/activar',[
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7776777',
            'contrasenia' => 'Prueba123',
            'email' => 'email@gmail.com'
        ]);
        //$response = $this->post('auth/login',['email' => 'email@gmail.com', 'password' => 'prueba123']);

        $response->assertStatus(200);
    }

    private function activarUsuario(){
        $response = $this->post('auth/activar',[
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7776777',
            'contrasenia' => 'Prueba123',
            'email' => 'email@gmail.com'
        ]);
    }
}
