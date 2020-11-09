<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($name = 'No Name')
    {
        $data = [
            'msg' => 'This is a message from HelloController',
            'name' => $name
        ];
        return view('hello.index', $data);
    }
}
