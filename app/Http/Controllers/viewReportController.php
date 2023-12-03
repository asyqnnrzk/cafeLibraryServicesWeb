<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewReportController extends Controller
{
    public function index(){
        return view('viewReport');
    }
}