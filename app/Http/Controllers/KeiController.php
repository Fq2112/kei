<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeiController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function projects()
    {
        return view('projects');
    }

    public function services()
    {
        return view('services');
    }

    public function pm()
    {
        return view('presmessage');
    }

    public function history()
    {
        return view('history');
    }

    public function vm()
    {
        return view('vision-mission-values');
    }

    public function hse()
    {
        return view('hse');
    }

    public function contact()
    {
        return view('contact');
    }
}
