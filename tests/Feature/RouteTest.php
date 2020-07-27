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
        $response->assertStatus(200);

        $response = $this->get('/login');
        $response->assertStatus(200);

        $response = $this->get('/registrar');
        $response->assertStatus(200);

        
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

    /**
     * @test
     */
    public function Authtoziation_routes()
    {
        $response = $this->get('/admin');
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

        $user = factory(User::class)->create();

        // dd($user);

        // $response = $this->actingAs(factory(User::class)->create())->get('/usuario/voos')->assertOk();
        $response = $this->actingAs($user)->get('/usuario/voos'); 
        $response->assertOk();

        // dd(factory(User::class)->create());

        // $response = $this->get('/usuario/voos')
        //     ->assertOk();
    }

    
}
