<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LLenadoDeLaBaseDeDatosTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;

    public function test_insertar_tres_aulas(){
        $this->assertDatabaseCount('aulas',3);
    }

    public function test_verificar_existencia_aula(){
        $this->assertDatabaseHas('aulas',[
            'id' => '1'
        ]);
    }


    public function test_insertar_docente(){
        $this->assertDatabaseCount('docentes',1);
    }

    public function test_verificar_existencia_docente(){
        $this->assertDatabaseHas('docentes',[
            'id' => '1'
        ]);
    }


    public function test_insertar_materia(){
        $this->assertDatabaseCount('materias',1);
    }

    public function test_verificar_existencia_materia(){
        $this->assertDatabaseHas('materias',[
            'id' => '1'
        ]);
    }

    
    public function test_insertar_grupos(){
        $this->assertDatabaseCount('grupos',2);
    }

    public function test_verificar_existencia_grupo(){
        $this->assertDatabaseHas('grupos',[
            'id' => '1'
        ]);
    }
}
