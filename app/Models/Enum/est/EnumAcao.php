<?php

namespace App\Models\Enum\est;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class EnumAcao{
    
    const ACAO_CONSULTAR = 1,
          ACAO_INCLUIR   = 2,
          ACAO_ALTERAR   = 3,
          ACAO_EXCLUIR   = 4;
}
