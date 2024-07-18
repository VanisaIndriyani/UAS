<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->get();

        return view('layouts.public.profiles', [
            "title" => "All Profiles",
            "profiles" => $profiles
        ]);
    }

    public function profile()
    {
        return view('layouts.public.profile');
    }

    public function contact()
    {
        return view('layouts.public.contact');
    }
}
