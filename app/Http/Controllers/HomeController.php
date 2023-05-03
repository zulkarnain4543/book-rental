<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('home');
    }

    public function contact(): View
    {
        return view('contact');
    }
}
