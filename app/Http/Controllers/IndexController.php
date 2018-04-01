<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index (Request $request)
    {
        dump( config('api.auth.jwt') );
    }
}
