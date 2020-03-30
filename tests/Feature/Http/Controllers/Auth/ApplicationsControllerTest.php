<?php

namespace Tests\Feature\Http\Controllers\Auth;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationsControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_returns_a_view()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get(route('home'));

        $response->assertStatus(200);
    }

    /** @test */
    public function index_redirects_when_unauthorized()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(302);
    }

    /** @test */
    public function create_form(){

        $reponse = $this->get(route('applications'));

        $response->assertStatus(302);
    }

    /** @test */
    public function store(){
        
        $reponse = $this->get(route('applications'));

        $response->assertStatus(302);
    }

}
