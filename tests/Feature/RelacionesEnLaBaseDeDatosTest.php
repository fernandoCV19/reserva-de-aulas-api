<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RelacionesEnLaBaseDeDatosTest extends TestCase
{
    use RefreshDatabase;
    protected $seed = true;

    public function test_insertar_relacion_datos_reserva_grupo(){
        $this->assertDatabaseCount('datos_reserva_grupo', 1);
    }

    public function test_verificar_relacion_datos_reserva_grupo(){
        $this->assertDatabaseHas('datos_reserva_grupo',[
            'id' => '1'
        ]);
    }

    public function test_insertar_relacion_datos_reserva_periodo(){
        $this->assertDatabaseCount('datos_reserva_periodo', 1);
    }

    public function test_verificar_relacion_datos_reserva_periodo(){
        $this->assertDatabaseHas('datos_reserva_periodo',[
            'id' => '1'
        ]);
    }

    public function test_insertar_relacion_aula_datos_reserva(){
        $this->assertDatabaseCount('aula_datos_reserva', 1);
    }

    public function test_verificar_relacion_aula_datos_reserva(){
        $this->assertDatabaseHas('aula_datos_reserva',[
            'id' => '1'
        ]);
    }
}
