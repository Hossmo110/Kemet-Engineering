<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Show project details.
     */
    public function show($slug)
    {
        $project = Project::with('images')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('projects.show', compact('project'));
    }
}