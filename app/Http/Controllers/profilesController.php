<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile; // Perbaiki nama model yang diimpor di sini

class ProfilesController extends Controller
{
    public function index()
    {
        $profiles = Profile::all(); // Perbaiki nama model yang digunakan di sini

        return view('layouts.public.profile', compact('profiles'));
    }
}
