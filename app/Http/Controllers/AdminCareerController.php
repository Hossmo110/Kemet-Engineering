<?php

namespace App\Http\Controllers;

use App\Models\CareerJob;
use Illuminate\Http\Request;

class AdminCareerController extends Controller
{
    /**
     * Display all career jobs.
     *
     * This is the main Admin Dashboard:
     * /admin
     */
    public function index()
    {
        $jobs = CareerJob::orderBy('id', 'desc')->get();

        return view('admin.careers.jobs', compact('jobs'));
    }


    /**
     * Show create job form.
     *
     * /admin/careers/create
     */
    public function create()
    {
        return view('admin.careers.create');
    }


    /**
     * Store a new career job.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'title' => 'required|string|max:255',

            'location' => 'required|string|max:255',

            'department' => 'required|string|max:255',

            'type' => 'required|string|max:100',

            'description' => 'required|string',

            'responsibilities' => 'nullable|string',

            'qualifications' => 'nullable|string',

            'posted_at' => 'required|date',

            'expires_at' => 'nullable|date|after_or_equal:posted_at',

        ]);


        CareerJob::create($validated);


        // After creating the job,
        // return directly to Admin Dashboard.
        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Job has been added successfully.');
    }


    /**
     * Display a specific job.
     *
     * Not used by the Admin Panel.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Show edit job form.
     *
     * /admin/careers/{id}/edit
     */
    public function edit(string $id)
    {
        $job = CareerJob::findOrFail($id);

        return view('admin.careers.edit', compact('job'));
    }


    /**
     * Update a career job.
     */
    public function update(Request $request, string $id)
    {
        $job = CareerJob::findOrFail($id);


        $validated = $request->validate([

            'title' => 'required|string|max:255',

            'location' => 'required|string|max:255',

            'department' => 'required|string|max:255',

            'type' => 'required|string|max:100',

            'description' => 'required|string',

            'responsibilities' => 'nullable|string',

            'qualifications' => 'nullable|string',

            'posted_at' => 'required|date',

            'expires_at' => 'nullable|date|after_or_equal:posted_at',

        ]);


        $job->update($validated);


        // After updating the job,
        // return directly to Admin Dashboard.
        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Job has been updated successfully.');
    }


    /**
     * Delete a career job.
     */
    public function destroy(string $id)
    {
        $job = CareerJob::findOrFail($id);

        $job->delete();


        // After deleting the job,
        // return directly to Admin Dashboard.
        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Job has been deleted successfully.');
    }
}
