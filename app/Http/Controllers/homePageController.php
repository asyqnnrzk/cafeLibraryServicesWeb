<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homePageController extends Controller
{
    public function home(){
        return view('homePage');
    }
}