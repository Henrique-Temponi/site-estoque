<?php

namespace Tests\Feature;

use App\Compahia;
use App\Destino;
use App\Flight;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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

        // $this->withoutExceptionHandling();
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
    public function Test_flight()
    {
        $d = factory(Destino::class)->create();
        $c = factory(Compahia::class)->create();
        $f = factory(Flight::class)->make();

        // dd($d,$c,$f);

        // $this->withoutExceptionHandling();

        $this->actingAsUser();

        $response = $this->get('/usuario/reservar/1');
        $response->assertRedirect('/');

        $this->get('/');
        $response = $this->get('/usuario/reservar/2');
        $response->assertRedirect('/');

        $this->get('/');
        $response = $this->get('/usuario/reservar/3');
        $response->assertRedirect('/');

        $f->save();

        $response = $this->get('/usuario/reservar/1');
        $response->assertRedirect('/usuario/voos');

        $this->get('/');
        $response = $this->get('/usuario/reservar/1');
        $response->assertRedirect('/');
    }

    /** @test */
    public function reserve_with_same_time_period()
    {
        factory(Destino::class)->create();
        factory(Compahia::class)->create();
        $f = factory(Flight::class, 2)->create([
            'turno' => 1,
        ]);

        // dd($f);

        $this->actingAsUser();


        $response = $this->get('/usuario/reservar/1');
        $response->assertRedirect('/usuario/voos');

        $this->get('/');
        $response = $this->get('/usuario/reservar/2');
        $response->assertRedirect('/');
    }

    /** @test */
    public function login_with_existent_user()
    {
        $user = factory(User::class)->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response->assertSessionHas('msg');
        $response->assertRedirect('/');
    }

    /** @test */
    public function logout_with_active_user()
    {
        $this->actingAsUser();

        $response = $this->get('/logout');
        $response->assertRedirect('/');

    }

    /** @test */
    public function logout_without_active_user()
    {
        $this->get('/');
        $response = $this->get('/logout');
        $response->assertRedirect('/login');
    }

    private function newUserData()
    {
        return  [
            'name' => 'Ronaldinho soccer 64',
            'email' => 'Ronaldo@dev.com',
            'password' => '123',
        ];
    }


    public function actingAsUser()
    {
        $this->actingAs(factory(User::class)->create());
    }
}
