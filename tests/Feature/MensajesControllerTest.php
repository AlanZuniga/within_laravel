<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MensajesControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_muestra_listado_mensajes(): void
    {
        //response()
        $response = $this->get('/');
        $response->assertSee('Listado de mensajes');

        $response->assertStatus(200);
    }
}
