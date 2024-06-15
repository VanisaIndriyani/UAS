<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $profiles = Profile::latest()->paginate(5);
      
        return view('profiles.index', compact('profiles'));
                            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Display a listing of the latest resources without pagination.
     */
    public function profile(): View
    {
        $profiles = Profile::latest()->get();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        Profile::create($request->all());
       
        return redirect()->route('profiles.index')
                        ->with('success', 'Profile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile): View
    {
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile): View
    {
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $profile->update($request->all());
      
        return redirect()->route('profiles.index')
                        ->with('success', 'Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile): RedirectResponse
    {
        $profile->delete();
       
        return redirect()->route('profiles.index')
                        ->with('success', 'Profile deleted successfully');
    }
}
