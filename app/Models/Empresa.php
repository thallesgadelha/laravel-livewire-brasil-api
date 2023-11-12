<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = ['cnpj', 'razao_social', 'nome_fantasia', 'descricao_situacao_cadastral', 'cnae_fiscal_descricao'];
}
