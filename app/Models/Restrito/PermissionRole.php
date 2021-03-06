<?php

namespace App\Models\Restrito;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model {

    use SoftDeletes;

    protected $table = 'permission_role';
    protected $primaryKey = 'id';
    protected $fillable = ['permission_id', '	role_id'];
    
    public $rules = [
        'permission_id' => 'required|numeric',
        'role_id' => 'required|numeric'
    ];

}
