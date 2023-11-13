<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function Helloworld() {
        return view('helloworld');
    }

    public function Index() {
        return view('index');
    }
}
