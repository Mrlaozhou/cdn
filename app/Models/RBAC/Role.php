<?php

namespace App\Models\RBAC;

use Illuminate\Database\Eloquent\Model;

class Role extends Base
{
    //
    protected $table                =   'role';

    protected $hidden               =   [
        'createdby'
    ];
}
