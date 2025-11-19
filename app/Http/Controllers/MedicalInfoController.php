<?php

namespace App\Http\Controllers;

use App\Models\MedicalInfo;
use App\Http\Requests\StoreMedicalInfoRequest;
use App\Http\Requests\UpdateMedicalInfoRequest;

class MedicalInfoController extends Controller
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
    public function store(StoreMedicalInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicalInfo $medicalInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicalInfo $medicalInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicalInfoRequest $request, MedicalInfo $medicalInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicalInfo $medicalInfo)
    {
        //
    }
}
