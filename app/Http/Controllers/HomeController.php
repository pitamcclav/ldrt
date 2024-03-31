<?php

namespace App\Http\Controllers;

use App\Mail\SubmitForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function projects()
    {
        return view('projects');
    }
    
}
