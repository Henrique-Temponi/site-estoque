<?php

namespace Tests\Feature;

use App\Compahia;
use App\Destino;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function Test_admin_use()
    {
        $this->actingAsAdmin();

        $response = $this->get('/admin');
        $response->assertOk();
    }

    /** @test */
    public function Admin_routes_acting_as_admin()
    {
        $this->actingAsAdmin();

        $response = $this->get('/admin');
        $response->assertOk();

        $response = $this->get('/admin/voos/listar');
        $response->assertOk();

        $response = $this->get('/admin/usuarios/listar');
        $response->assertOk();

        $response = $this->get('/admin/destinos/listar');
        $response->assertOk();

        $response = $this->get('/admin/compahias/listar');
        $response->assertOk();
    }

    /** @test */
    public function Create_destino_through_form()
    {
        
        $this->actingAsAdmin();

        $response = $this->post('/admin/destinos/adicionar', $this->newDestinoData());

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/destinos/listar');
        
    }

    /** @test */
    public function edit_destino()
    {
        $this->actingAsAdmin();

        $this->post('/admin/destinos/adicionar', $this->newDestinoData());

        $response = $this->post('/admin/destinos/editar/1', $this->newDestinoData());

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/destinos/listar');
    }

    /** @test */
    public function edit_destino_with_invalid_name()
    {
        $this->actingAsAdmin();

        $this->post('/admin/destinos/adicionar', $this->newDestinoData());

        $response = $this->post('/admin/destinos/editar/1', array_merge($this->newDestinoData(), [ 'nome' => '' ]));

        $response->assertSessionHasErrors('nome');
    }


    /** @test */
    public function delete_destino()
    {
        $this->actingAsAdmin();

        $this->post('/admin/destinos/adicionar', $this->newDestinoData());

        $response = $this->get('/admin/destinos/deletar/1');

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/destinos/listar');
    }

    /** @test */
    public function Create_compahia_through_form()
    {
        
        $this->actingAsAdmin();

        $response = $this->post('/admin/compahias/adicionar', $this->newCompahiaData());

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/compahias/listar');
        
    }

    /** @test */
    public function edit_compahia()
    {
        $this->actingAsAdmin();

        $this->post('/admin/compahias/adicionar', $this->newCompahiaData());

        $response = $this->post('/admin/compahias/editar/1', $this->newCompahiaData());

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/compahias/listar');
    }

    /** @test */
    public function edit_compahia_with_invalid_name()
    {
        $this->actingAsAdmin();

        $this->post('/admin/compahias/adicionar', $this->newCompahiaData());

        $response = $this->post('/admin/compahias/editar/1', array_merge($this->newCompahiaData(), [ 'nome' => '' ]));

        $response->assertSessionHasErrors('nome');
    }

    /** @test */
    public function delete_compahia()
    {
        $this->actingAsAdmin();

        $this->post('/admin/compahias/adicionar', $this->newCompahiaData());

        $response = $this->get('/admin/compahias/deletar/1');

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/compahias/listar');
    }




    /** @test */
    public function add_flight()
    {

        factory(Destino::class)->create();
        factory(Compahia::class)->create();

        $this->actingAsAdmin();

        $response = $this->post('/admin/voos/adicionar', $this->newFlightData());

        $response->assertSessionHasNoErrors();
        $response->assertRedirect('/admin/voos/listar');
    }

    /** @test */
    public function Add_flight_with_invalid_destino_id()
    {

        // factory(Destino::class)->create();
        factory(Compahia::class)->create();

        $this->actingAsAdmin();
        $response = $this->post('/admin/voos/adicionar', $this->newFlightData());
        
        $response->assertRedirect('/');
    }

    /** @test */
    public function Add_flight_with_invalid_compahia_id()
    {

        factory(Destino::class)->create();
        // factory(Compahia::class)->create();

        $this->actingAsAdmin();
        $response = $this->post('/admin/voos/adicionar', $this->newFlightData());
        

        $response->assertRedirect('/');
    }

    
    public function actingAsAdmin()
    {
        $this->actingAs(factory(User::class)->create([
            'admin' => TRUE,
        ]));
    }

    private function newDestinoData()
    {
        return  [
            'nome' => 'Belo Horizonte',
            'abreviacao' => 'RF',
        ];
    }

    private function newCompahiaData()
    {
        return  [
            'nome' => 'JDOE',
        ];
    }

    private function newFlightData()
    {
        return [
            'voo' => 'HFJD',
            'destino_id' => 1,
            'compahia_id' => 1,
            'turno' => 1,
        ];
    }
}
