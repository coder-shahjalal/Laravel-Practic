<?php

// app/Http/Controllers/HelloController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $name = "Shah Jalal";
        return view('hello', compact('name'));
    }
}