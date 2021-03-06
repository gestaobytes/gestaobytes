<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketsMensagens extends Model {
    
    use SoftDeletes;

    protected $table = 'mensagens_tickets';
    protected $primaryKey = 'MT_CODIGO';
    protected $fillable = [
        'user_id',
        'TICK_CODIGO',
        'TICK_MENSAGEM',
    ];
    
    public $rules = [
        'user_id' => 'numeric',
        'TICK_CODIGO' => 'required|numeric',
        'TICK_MENSAGEM' => 'required',
    ];

}
