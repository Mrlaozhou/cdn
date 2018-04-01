<?php

namespace App\Http\Controllers;

use App\Models\RBAC\Admin;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class TestController extends Controller
{
    //


    public function index (Request $request)
    {
        dump( JWTAuth::fromUser(Admin::first()) );
        dump( base64_decode('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9') );
        dump( base64_decode('eyJzdWIiOiIxOTU5ODExMjc1MzBFNjI4RUQ0ODg2ODBDRTk0REQ2QSIsImlzcyI6Imh0dHA6Ly93d3cuY2RuLmxvY2FsL3Rlc3QiLCJpYXQiOjE1MjI1MDE5NzEsImV4cCI6MTUyMjUwNTU3MSwibmJmIjoxNTIyNTAxOTcxLCJqdGkiOiJpaEdndG9qT3NlVDYyR2Q0In0') );
        return view('test');
    }
}
