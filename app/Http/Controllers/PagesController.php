<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }

    public function price()
    {
        return view('price');
    }

    public function team()
    {
        return view('team');
    }

    public function contact()
    {
        return view('contact');
    }
}
