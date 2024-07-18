<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homee;


class HomeController extends Controller
{
    public function index()
    {
        $homes = Homee::all();
    
        return view('layouts.public.home', compact('homes'));
    }
    

}