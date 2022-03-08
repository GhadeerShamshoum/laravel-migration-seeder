<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index() {
        $data_travel = Travel::all();
        
        return view('welcome', compact('data_travel'));
    }
}
