<?php

namespace App\Http\Controllers\dark;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('dark.home');
    }

    public function gallery()
    {
        return view ('dark.gallery');
    }

    public function contact()
    {
        return view ('dark.contact');
    }
}
