<?php

namespace Tests\Feature;

use App\Perro;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PerrosControllerTest extends TestCase
{
    /**
     * Prueba que muestra por get el formulario
     * para el perro.
     *
     */
    public function testFormularioPerros()
    {
        $response = $this->call('get','/perros/add');
        $response->assertStatus(200);
    }

    /**
     * Prueba que muestra la vista de detalle del perro
     */
    public function testShowPerro(){
        $response = $this->call('get','/perros/show');
        $response->assertStatus(200);
    }

    /**
     * Prueba de creacion de un perro
     */
    public function testCreatePerro(){
        $perro = factory(Perro::class)->create();
        $response = $this->actingAs($perro)->get('/');
        $response->assertSuccessful()
            ->assertStatus(200);
    }



}
