<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonutController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
