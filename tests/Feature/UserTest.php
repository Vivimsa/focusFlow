<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function testeCriarUsuario(): void
    {
        $response = $this->post('/api/user', [
            'name' => 'Teste',
            'email'=> 'teste@teste.com',
            'password'=> '123456',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', ['email'=> 'teste@teste.com']);
    }

    public function testeUserNotFound404(){
        $response = $this->get('api/user/999');
        $response->assertStatus(404);
    }
}
