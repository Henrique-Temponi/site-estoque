<?php

namespace Tests\Feature;

use App\Destino;
use App\Flight;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{

    use RefreshDatabase;


    /**
     * A basic feature test example.
     *
     * @test 
     * @return void
     */
    public function User_routes()
    {
        $response = $this->get('/');
        $response->assertOk();

        $response = $this->get('/login');
        $response->assertOk();

        $response = $this->get('/registrar');
        $response->assertOk();

        
    }

    /**
     * @test
     */
    public function Protected_routes()
    {
        $response = $this->get('/logout');
        $response->assertStatus(302);

        $response = $this->get('/usuario/reservar/1');
        $response->assertStatus(302);
    }

    /** @test */
    public function Test_with_assertRedirect()
    {
        $response = $this->get('/admin')
            ->assertRedirect('/login');
    }

    /** @test */
    public function Test_with_actingAs()
    {
        // $this->actingAs(factory(User::class)->create());

        $this->withoutExceptionHandling();
        $this->actingAsUser();
        // dd($user);

        // $response = $this->actingAs(factory(User::class)->create())->get('/usuario/voos')->assertOk();
        $response = $this->get('/usuario/voos'); 
        $response->assertOk();

        // dd(factory(User::class)->create());

        // $response = $this->get('/usuario/voos')
        //     ->assertOk();
    }

    /** @test */
    public function Redirect_if_user_does_not_have_access_rights_panel()
    {

        // $this->withoutExceptionHandling();

        $this->actingAsUser();

        $response = $this->get('/admin');
        $response->assertForbidden();

        $response = $this->get('/admin/voos/listar');
        $response->assertForbidden();

        $response = $this->get('/admin/usuarios/listar');
        $response->assertForbidden();

        $response = $this->get('/admin/destinos/listar');
        $response->assertForbidden();

        $response = $this->get('/admin/compahias/listar');
        $response->assertForbidden();
    }

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
    public function Create_new_user()
    {
        

        $response = $this->post('/registrar', $this->newUserData());

        $response->assertRedirect('/login');
        $response->assertSessionHas('msg');
    }

    /** @test */
    public function new_user_with_invalid_name()
    {
        $response = $this->post('/registrar', array_merge($this->newUserData(), [ 'name' => '']));

        $response->assertSessionHasErrors('name');
    }

    /** @test */
    public function new_user_with_invalid_password()
    {
        
        $response = $this->post('/registrar', array_merge($this->newUserData(), [ 'password' => '']));

        $response->assertSessionHasErrors('password');
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


    public function actingAsUser()
    {
        $this->actingAs(factory(User::class)->create());
    }
    
    public function actingAsAdmin()
    {
        $this->actingAs(factory(User::class)->create([
            'admin' => TRUE,
        ]));
    }

    private function newUserData()
    {
        return  [
            'name' => 'Ronaldinho soccer 64',
            'email' => 'Ronaldo@dev.com',
            'password' => '123',
        ];
    }

    private function newDestinoData()
    {
        return  [
            'nome' => 'Belo Horizonte',
            'abreviacao' => 'RF',
        ];
    }
}