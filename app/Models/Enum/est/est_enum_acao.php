<?php

namespace App\Models\Enum\est;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class EnumAcao{
    
    const ACAO_INCLUIR = 102,
          ACAO_ALTERAR = 103,
          ACAO_EXCLUIR = 104;
}
