<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home; // Mengimpor model Home

class HomeController extends Controller
{
    public function index(){
        $homes = Home::all();
        return view('layouts.public.home', compact('homes'));
    }
}
