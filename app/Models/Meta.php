<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperMetas
 */
class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo',
        'descricao',
        'prioridade',
        'data_expiracao',
        'concluida_em',
        'created_at',
        'updated_at'
    ];
}
