<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class StreamingController extends Controller
{
    public function streaming() {
        $token = null;
        if($user = Auth::user()){
            $token = JWTAuth::fromUser($user);
        }
        return view('streaming', ['token' => $token]);
    }
}
