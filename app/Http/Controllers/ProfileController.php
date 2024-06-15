<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        return view('layouts.public.profiles', [
            "title" => "All Profiles",
            "profiles" => Profile::latest()->get()
        ]);
        
    }

    public function show(Profile $profile)
    {
        return view('layouts.public.profile', compact('profile'));
    }
}
