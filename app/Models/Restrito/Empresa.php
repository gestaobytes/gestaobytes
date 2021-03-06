<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{

    use SoftDeletes;

    protected $table = 'empresas';
    protected $primaryKey = 'EMPR_CODIGO';
    protected $fillable = [
        'EMPR_NOMEFANTASIA', 'EMPR_RAZAOSOCIAL', 'EMPR_INSCRICAOMUNICIPAL', 'EMPR_INSCRICAOESTADUAL', 'EMPR_CNPJ', 'EMPR_ENDERECO', 'EMPR_CIDADE', 'EMPR_UF', 'EMPR_CEP', 'EMPR_FONE1', 'EMPR_FONE2', 'EMPR_LOGO',
    ];

    public $rules = [
        'EMPR_NOMEFANTASIA' => 'required|max:200',
        'EMPR_RAZAOSOCIAL' => 'required|max:200',
        'EMPR_INSCRICAOMUNICIPAL' => 'max:20',
        'EMPR_INSCRICAOESTADUAL' => 'max:20',
        'EMPR_CNPJ' => 'required|max:20',
        'EMPR_ENDERECO' => 'required|max:200',
        'EMPR_CIDADE' => 'required|max:120',
        'EMPR_UF' => 'required|max:2',
        'EMPR_CEP' => 'required|max:10',
        'EMPR_FONE1' => 'required|max:15',
        'EMPR_FONE2' => 'max:15',
        'EMPR_LOGO' => 'max:50',
    ];
}
