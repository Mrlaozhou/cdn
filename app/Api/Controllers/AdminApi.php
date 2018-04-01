<?php
namespace App\Api\Controllers;

use App\Api\Controllers\BaseApi;
use App\Models\RBAC\Admin;
use Dingo\Api\Http\FormRequest;

class AdminApi extends BaseApi
{
    public function index ()
    {
        $admins         =   Admin::status()->first();

        return $admins->roles;
    }
}