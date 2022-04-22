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

    //Inicio tests restantes

    public function test_insertar_solicitud_reserva(){
        $this->assertDatabaseCount('solicitud_reservas', 1);
    }

    public function test_verificar_existencia_solicitud_reserva(){
        $this->assertDatabaseHas('solicitud_reservas',[
            'id' => '1'
        ]);
    }

    //

    public function test_insertar_datos_reserva(){
        $this->assertDatabaseCount('datos_reservas',1);
    }

    public function test_verificar_existencia_datos_reserva(){
        $this->assertDatabaseHas('datos_reservas',[
            'id' => '1'
        ]);
    }
    //

    public function test_insertar_justificacion(){
        $this->assertDatabaseCount('justificacions', 2);
    }

    public function test_verificar_existencia_justificacion(){
        $this->assertDatabaseHas('justificacions',[
            'datos_reserva_id' => '1'
        ]);
    }

    //

    public function test_insertar_reserva(){
        $this->assertDatabaseCount('reservas', 1);
    }

    public function test_verificar_existencia_reserva(){
        $this->assertDatabaseHas('reservas',[
            'id' => '1'
        ]);
    }

    //

    public function test_insertar_periodo(){
        $this->assertDatabaseCount('periodos', 1);
    }

    public function test_verificar_existencia_periodo(){
        $this->assertDatabaseHas('periodos',[
            'id' => '1'
        ]);
    }

    //

    public function test_insertar_administrador(){
        $this->assertDatabaseCount('administradors', 1);
    }

    public function test_verificar_existencia_administrador(){
        $this->assertDatabaseHas('administradors',[
            'id' => '1'
        ]);
    }
}
