<?php

namespace App\Models;

use App\Enums\StatusTarefaEnum;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperTarefa
 */
class Tarefa extends Model
{
    protected $table = 'tarefas';

    protected $fillable = [
        'user_id',
        'meta_id',
        'titulo',
        'descricao',
        'concluida_em',
        'data_expiracao',
        'status'
    ];

    protected $casts = [
        'concluida_em' => 'datetime',
        'data_expiracao' => 'date',
        'status' => StatusTarefaEnum::class
    ];
}
