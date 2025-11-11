<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste que verifica se a senha criptografada pode ser verificada
     * corretamente com a senha original usando Hash::check().
     */
    public function testeSenhaTemHash(): void
    {
        $password = '123456';
        $hashedPassword = Hash::make($password);

        $this->assertTrue(
            Hash::check($password, $hashedPassword),
            'A senha original deve corresponder ao hash gerado.'
        );
    }

    /**
     * Teste que garante que uma senha incorreta falhe na verificação.
     * Isso garante a segurança básica da função Hash::check().
     */
    public function testeSenhaIncorretaFalhaNaVerificacao(): void
    {
        $correctPassword = 'password123';
        $incorrectPassword = 'wrongpassword';
        $hashedPassword = Hash::make($correctPassword);

        $this->assertFalse(
            Hash::check($incorrectPassword, $hashedPassword),
            'Uma senha incorreta não deve corresponder ao hash gerado.'
        );
    }

    /**
     * Teste que verifica se o email do utilizador é guardado em minúsculas,
     * uma prática comum para evitar problemas de autenticação.
     */
    public function testeEmailESalvoEmMinusculas(): void
    {
        $user = User::create([
            'name' => 'Teste Utilizador',
            'email' => 'TESTE@EXEMPLO.COM',
            'password' => 'senha123',
        ]);

        $retrievedUser = User::find($user->id);

        $this->assertEquals(
            'teste@exemplo.com',
            $retrievedUser->email,
            'O email do utilizador deve ser guardado na base de dados em minúsculas.'
        );
    }
}
