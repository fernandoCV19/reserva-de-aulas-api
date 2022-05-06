<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\AuthDocentesTestSeeder;

class AuthDocenteTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = AuthDocentesTestSeeder::class;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_solicitar_login(){
        $this -> activarUsuario();
        $response = $this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123']);

        $response->assertStatus(200);
    }

    public function test_verificar_token_al_hacer_login(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $this -> assertNotEquals($token, "");
    }

    public function test_verificar_rol_al_hacer_login(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $rol = $response['rol'];

        $this -> assertEquals($rol, 'docente');
    }

    public function test_solicitar_logout(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer' . $token
        ]) -> post('auth/logout');

        $response->assertStatus(200);
    }

    public function test_verificar_respuesta__logout(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $response = json_decode($this->withHeaders([
            'Authorization' => 'Bearer' . $token
        ]) -> post('auth/logout')->getContent(), true);
        
        $this -> assertEquals($response['message'], 'Successfully logged out');
    }

    public function test_solicitar_refresh(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer' . $token
        ]) -> post('auth/refresh');

        $response->assertStatus(200);
    }

    public function test_verificar_tiempo_refresh(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $response = json_decode($this->withHeaders([
            'Authorization' => 'Bearer' . $token
        ]) -> post('auth/refresh')->getContent(), true);

        $tiempo = $response['expires_in'];

        $this -> assertEquals($tiempo, 3600);
    }

    public function test_solicitar_me(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer' . $token
        ]) -> get('auth/me');

        $response->assertStatus(200);
    }

    public function test_verificar_me(){
        $this -> activarUsuario();
        $response = json_decode($this->post('auth/login',['cod_SIS' => '20001234', 'contrasenia' => 'Prueba123'])->getContent(),true);

        $token = $response['access_token'];

        $response = json_decode( $this->withHeaders([
            'Authorization' => 'Bearer' . $token
        ]) -> get('auth/me') ->getContent(), TRUE);

        $res = $response['cod_SIS'] == '20001234' and $response['nombre'] == 'Fernando Cuenca Vargas';

        $this->assertTrue($res);
    }

    public function test_solicitar_activar(){
        $response = $this->post('auth/activar',[
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7776777',
            'contrasenia' => 'Prueba123',
            'email' => 'email@gmail.com'
        ]);

        $response->assertStatus(201);
    }

    public function test_verificar_activar(){
        $response = json_decode( $this->post('auth/activar',[
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7776777',
            'contrasenia' => 'Prueba123',
            'email' => 'email@gmail.com'
        ])-> getContent(), true);

        $activado = $response['docente']['activado'];

        $this -> assertEquals($activado, 1);
    }

    public function test_verificar_activar_en_base_de_datos(){
        $response = $this->post('auth/activar',[
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7776777',
            'contrasenia' => 'Prueba123',
            'email' => 'email@gmail.com'
        ]);

        $this->assertDatabaseHas('docentes',[
            'cod_SIS' => '20001234',
            'nombre' => 'Fernando Cuenca Vargas',
            'celular' => '7776777',
            'email' => 'email@gmail.com'
        ]);
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
