<?php

namespace App\Models\RBAC;


class Admin extends Base
{
    //
    protected $table = 'admin';

    protected $hidden = [
        'password', 'issalt', 'salt'
    ];

    public function roles ()
    {
        return $this->hasManyThrough(
            Role::class,
            Relation1::class,
            'auuid',
            'uuid',
            'uuid',
            'ruuid'
        );
    }

    public function scopeStatus($query)
    {
        return $query->where( 'status', '1' );
    }
}
