<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Http\Requests\StoreLogRequest;
use App\Http\Requests\UpdateLogRequest;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show all logs
        $logs = Log::all();
        return view('logs.index', compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Show form to create a new log
        return view('logs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLogRequest $request)
    {
        // Validate and store the new log using the validated data via StoreLogRequest
        $validated = $request->validated();
        $log = Log::create($validated);
        return redirect()->route('logs.index')->with('success', 'Log created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Log $log)
    {
        //
        return view('logs.show', compact('log'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Log $log)
    {
        //
        return view('logs.edit', compact('log'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLogRequest $request, Log $log)
    {
        // Update the log with validated data
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Log $log)
    {
        //
    }
}
