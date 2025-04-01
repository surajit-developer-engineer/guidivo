<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Show the home page
    public function home()
    {
        return view('frontend.home');
    }
}
