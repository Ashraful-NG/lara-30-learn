<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function showWelcomePage()
    {
        $links = [
            ['url' => '/', 'text' => 'Home'],
            ['url' => '/about', 'text' => 'About'],
            ['url' => '/contact', 'text' => 'Contact'],
        ];

        return view('home', compact('links'));
    }
}
