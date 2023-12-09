<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createUpdateController extends Controller
{
    public function create_update(){
        return view('createUpdate');
    }
}