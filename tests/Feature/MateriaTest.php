<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Seeders\MateriaTestSeeder;

class MateriaTest extends TestCase
{

    use RefreshDatabase;
    protected $seeder = MateriaTestSeeder::class;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_solicitar_docentes_de_una_materia(){
        $response = $this -> get('materia/docentes/2');

        $response -> assertStatus(200);
    }

    public function test_verificar_cantidad_docentes_de_una_materia(){
        $response = json_decode( $this -> get('materia/docentes/2')->getContent(), true);

        $tamanio = sizeof($response);

        $this -> assertEquals($tamanio, 2);
    }

    public function test_verificar_docentes_de_una_materia(){
        $response = json_decode( $this -> get('materia/docentes/2')->getContent(), true);

        $verificacion1 = $response[0]['nombre_grupo'] == 1 and $response[0]['nombre_docente'] == 'ARZABE MAURE JOSE OMAR';
        $verificacion2 = $response[1]['nombre_grupo'] == 2 and $response[1]['nombre_docente'] == 'ROJAS ARZE RUBEN DARIO';
        
        $this -> assertTrue($verificacion1 and $verificacion2);
    }


    public function test_solicitar_grupos_de_una_materia(){
        $response = $this -> get('materia/grupos/1');

        $response -> assertStatus(200);
    }

    public function test_verificar_cantidad_grupos_de_una_materia(){
        $response = json_decode( $this -> get('materia/grupos/1')->getContent(), true);

        $tamanio = sizeof($response);

        $this -> assertEquals($tamanio, 3);
    }

    public function test_verificar_datos_grupos_de_una_materia(){
        $response = json_decode( $this -> get('materia/docentes/1')->getContent(), true);

        print_r($response);

        $verificacion1 = $response[0]['nombre_grupo'] == 1 and $response[0]['nombre_docente'] == 'ARZABE MAURE JOSE OMAR';
        $verificacion2 = $response[1]['nombre_grupo'] == 2 and $response[1]['nombre_docente'] == 'ROJAS ARZE RUBEN DARIO';
        $verificacion2 = $response[2]['nombre_grupo'] == 3 and $response[2]['nombre_docente'] == 'PEDRO GONZALEZ ZAPATA';
        

        $this -> assertTrue($verificacion1 and $verificacion2);
    }
}
