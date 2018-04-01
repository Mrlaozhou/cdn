<?php

namespace App\Models\RBAC;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    //
    protected $connection               =   'mysql';
    protected $primaryKey               =   'uuid';
    protected $keyType                  =   'string';
}
