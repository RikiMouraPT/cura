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
        $profiles = Profile::all();
        return view('app.profile.show', compact('profiles'));
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
        $profile->load('medicalInfo', 'qualifications');

        return view('app.profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        $profile->load('medicalInfo', 'qualifications');

        return view('app.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        $data = $request->validated();

        $profile->user()->update($data['user']);

        $profile->update($data['profile']);

        $profile->medicalInfo()->update($data['medical_info']);

        // Tratar do upload do documento de qualificações, se houver
        if (isset($data['qualifications']['document'])) {
            $path = $data['qualifications']['document']
                ->store('qualifications', 'public');

            $data['qualifications']['document'] = $path;
        }

        $profile->qualifications()->update($data['qualifications']);

        return redirect()->route('app.profile.show', $profile)->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
