<?php

namespace App\Enums;

enum StatusTarefa: string
{
    case A_FAZER = 'a_fazer';
    case FAZENDO = 'fazendo';
    case CONCLUIDA = 'concluida';
}
