<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
        $profile->update($request->validated());
        
        $profile = Profile::findOrFail($profile->id);
        // Update all profile fields to the requested values
        

        return redirect()->route('profiles.show', $profile)->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
