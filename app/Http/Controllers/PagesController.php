<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        // return "Hello from the controller";
        return view('pages.home');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function facebook()
    {
        return view('<a href="https://www.facebook.com/CMAtchley1/"></a>');
    }
}
