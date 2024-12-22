<?php

namespace App\Http\Controllers\landing_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index()
    {
        return view('landing_page.index');
    }
}
