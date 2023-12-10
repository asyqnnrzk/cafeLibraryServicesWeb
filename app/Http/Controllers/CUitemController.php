<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CUitemController extends Controller
{
    public function create_update_item(){
        return view('CUitem');
    }
}