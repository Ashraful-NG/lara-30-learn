<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

abstract class Controller
{
    public function showNav()
    {
        $links = [
            ['url' => '/', 'text' => 'Home'],
            ['url' => '/about', 'text' => 'About'],
            ['url' => '/contact', 'text' => 'Contact'],
        ];

        return View::make('nav')->with('links', $links);
    }
}
