<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homes;

class homesController extends Controller
{
    public function index(){
        $homes = homes::all();
        return view('layouts.public.home', compact('homes'));
    }
}
