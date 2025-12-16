<?php


// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MetaTest extends TestCase
{
    use RefreshDatabase;
    public function testeCriarMeta(): void
    {
        $data = [
            'user_id' => '1',
            'titulo'=> 'teste',
            'descricao'=> 'teste',
            'prioridade'=>  1,
            'data_expiracao'=> "2025-12-31",
            "concluida_em"=> "2025-12-15"
        ];
        $response = $this->post('/api/metas', $data);

        $response->assertStatus(200);
        $this->assertDatabaseHas('metas', $data);


    }
}
