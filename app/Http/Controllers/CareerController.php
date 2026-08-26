<?php

namespace App\Http\Controllers;

use App\Models\CareerJob;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Careers Page
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $jobs = CareerJob::orderBy('id', 'desc')->get();

        return view('careers.index', compact('jobs'));
    }


    /*
    |--------------------------------------------------------------------------
    | Job Details Page
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $job = CareerJob::findOrFail($id);

        return view('careers.show', compact('job'));
    }


    /*
    |--------------------------------------------------------------------------
    | Submit Job Application
    |--------------------------------------------------------------------------
    */

    public function apply(Request $request, $id)
    {
        $job = CareerJob::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',

            'email' => 'required|email|max:255',

            'phone' => 'required|string|max:50',

            'message' => 'nullable|string',

            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Upload CV
        |--------------------------------------------------------------------------
        */

        $cvFile = $request->file('cv');

        $cvName = $cvFile->getClientOriginalName();

        $cvPath = $cvFile->storeAs('cvs', $cvName, 'public');

        /*
        |--------------------------------------------------------------------------
        | Save Application
        |--------------------------------------------------------------------------
        */

        JobApplication::create([
            'career_job_id' => $job->id,

            'name' => $validated['name'],

            'email' => $validated['email'],

            'phone' => $validated['phone'],

            'cover_letter' => $validated['message'] ?? null,

            'cv' => $cvPath,
        ]);
       
        /*
        |--------------------------------------------------------------------------
        | Success
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('careers.show', $job->id)
            ->with('success', 'Your application has been submitted successfully.');
    }
}
