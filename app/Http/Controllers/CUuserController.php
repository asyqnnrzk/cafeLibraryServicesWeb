<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CUuserController extends Controller
{
    public function create_update_user(){
        return view('CUuser');
    }
}