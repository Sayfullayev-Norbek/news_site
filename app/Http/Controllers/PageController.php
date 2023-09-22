<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $services = \App\Models\Service::all();
        return view('welcome', compact('services'));
    }
}
