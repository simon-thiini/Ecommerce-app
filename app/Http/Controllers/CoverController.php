<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoverController extends Controller
{
    public function cover(Request $request){
        return view('cover');
    }
}
