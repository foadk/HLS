<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamingController extends Controller
{
    public function streaming() {
        return view('streaming');
    }
}
