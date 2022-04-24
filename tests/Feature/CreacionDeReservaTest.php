<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreacionDeReservaTest extends TestCase
{

    public function anadirUnaNuevaSolicitudValida(){
        $response = $this->post('ruta', [

        ]);

        $response -> assertStatus(200);
    }

    public function intentarAnadirUnaNuevaSolicitudInvalida(){
        $response = $this->post('ruta', [

        ]);

        $response -> assertStatus(200);
    }

}
