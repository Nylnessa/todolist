<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return <<<EOF
        <html>
            <head>
                <title>hello/index</title>
            </head>
            <body>
                <h1>Index</h1>
                <p>This is HelloController action index</p>
            </body>
        </html>
        EOF;
    }
}
