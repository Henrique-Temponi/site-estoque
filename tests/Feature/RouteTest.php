<?php

namespace Tests\Feature;

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

    public function actingAsUser()
    {
        $this->actingAs(factory(User::class)->create());
    }
    
}
