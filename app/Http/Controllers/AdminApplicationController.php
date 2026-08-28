<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;

class AdminApplicationController extends Controller
{
    /**
     * Display all job applications.
     */
    public function index()
    {
        $applications = JobApplication::with('careerJob')
            ->orderBy('id', 'desc')
            ->get();

        return view(
            'admin.applications.applications',
            compact('applications')
        );
    }


    /**
     * Display a specific job application.
     */
    public function show($id)
    {
        $application = JobApplication::with('careerJob')
            ->findOrFail($id);

        return view(
            'admin.applications.show',
            compact('application')
        );
    }
}