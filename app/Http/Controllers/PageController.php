<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        return "About Page";
    }

    public function contacts() {
        return "Contact Page";
    }

    public function service($id) {
        return "Service ID: " . $id;
    }
}
