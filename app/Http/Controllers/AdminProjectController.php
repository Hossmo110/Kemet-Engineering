<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    /**
     * Display all projects.
     */
    public function index()
    {
        $projects = Project::orderBy('sort_order')
            ->orderBy('id', 'desc')
            ->get();

        return view(
            'admin.projects.projects',
            compact('projects')
        );
    }


    /**
     * Show create project page.
     */
    public function create()
    {
        return view('admin.projects.create');
    }


    /**
     * Store new project.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'title' => 'required|string|max:255',

            'location' => 'nullable|string|max:255',

            'category' => 'nullable|string|max:255',

            'status' => 'required|string|max:100',

            'consultant' => 'nullable|string|max:255',

            'main_contractor' => 'nullable|string|max:255',

            'subcontractor' => 'nullable|string|max:255',

            'bua' => 'nullable|numeric|min:0',

            'description' => 'nullable|string',

            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'gallery' => 'nullable|array',

            'gallery.*' => 'image|mimes:jpg,jpeg,png,webp|max:5120',

            'featured' => 'nullable|boolean',

            'sort_order' => 'nullable|integer|min:0',

            'start_date' => 'nullable|date',

            'completion_date' => 'nullable|date|after_or_equal:start_date',

        ]);


        /*
        |--------------------------------------------------------------------------
        | Generate Unique Slug
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($validated['title']);

        $originalSlug = $slug;

        $counter = 1;

        while (Project::where('slug', $slug)->exists()) {

            $slug = $originalSlug . '-' . $counter;

            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Main Image
        |--------------------------------------------------------------------------
        */

        $mainImagePath = null;

        if ($request->hasFile('main_image')) {

            $mainImagePath = $request
                ->file('main_image')
                ->store('projects', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Create Project
        |--------------------------------------------------------------------------
        */

        $project = Project::create([

            'title' => $validated['title'],

            'slug' => $slug,

            'location' => $validated['location'] ?? null,

            'category' => $validated['category'] ?? null,

            'status' => $validated['status'],

            'consultant' => $validated['consultant'] ?? null,

            'main_contractor' => $validated['main_contractor'] ?? null,

            'subcontractor' => $validated['subcontractor'] ?? null,

            'bua' => $validated['bua'] ?? null,

            'description' => $validated['description'] ?? null,

            'main_image' => $mainImagePath,

            'featured' => $request->boolean('featured'),

            'sort_order' => $validated['sort_order'] ?? 0,

            'start_date' => $validated['start_date'] ?? null,

            'completion_date' => $validated['completion_date'] ?? null,

        ]);


        /*
        |--------------------------------------------------------------------------
        | Gallery Images
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gallery')) {

            foreach ($request->file('gallery') as $index => $image) {

                $path = $image->store(
                    'projects/gallery',
                    'public'
                );

                $project->images()->create([

                    'image' => $path,

                    'sort_order' => $index,

                ]);
            }
        }


        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'Project has been created successfully.'
            );
    }


    /**
     * Show edit project page.
     */
    public function edit($id)
    {
        $project = Project::with('images')
            ->findOrFail($id);

        return view(
            'admin.projects.edit',
            compact('project')
        );
    }


    /**
     * Update project.
     */
    public function update(Request $request, $id)
    {
        $project = Project::with('images')
            ->findOrFail($id);


        $validated = $request->validate([

            'title' => 'required|string|max:255',

            'location' => 'nullable|string|max:255',

            'category' => 'nullable|string|max:255',

            'status' => 'required|string|max:100',

            'consultant' => 'nullable|string|max:255',

            'main_contractor' => 'nullable|string|max:255',

            'subcontractor' => 'nullable|string|max:255',

            'bua' => 'nullable|numeric|min:0',

            'description' => 'nullable|string',

            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',

            'gallery' => 'nullable|array',

            'gallery.*' => 'image|mimes:jpg,jpeg,png,webp|max:5120',

            'featured' => 'nullable|boolean',

            'sort_order' => 'nullable|integer|min:0',

            'start_date' => 'nullable|date',

            'completion_date' => 'nullable|date|after_or_equal:start_date',

        ]);


        /*
        |--------------------------------------------------------------------------
        | Generate Unique Slug
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($validated['title']);

        $originalSlug = $slug;

        $counter = 1;

        while (
            Project::where('slug', $slug)
                ->where('id', '!=', $project->id)
                ->exists()
        ) {

            $slug = $originalSlug . '-' . $counter;

            $counter++;
        }


        /*
        |--------------------------------------------------------------------------
        | Main Image
        |--------------------------------------------------------------------------
        */

        $mainImagePath = $project->main_image;

        if ($request->hasFile('main_image')) {

            // Delete old main image
            if (
                $project->main_image &&
                Storage::disk('public')->exists($project->main_image)
            ) {
                Storage::disk('public')->delete(
                    $project->main_image
                );
            }


            // Store new main image
            $mainImagePath = $request
                ->file('main_image')
                ->store('projects', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Update Project
        |--------------------------------------------------------------------------
        */

        $project->update([

            'title' => $validated['title'],

            'slug' => $slug,

            'location' => $validated['location'] ?? null,

            'category' => $validated['category'] ?? null,

            'status' => $validated['status'],

            'consultant' => $validated['consultant'] ?? null,

            'main_contractor' => $validated['main_contractor'] ?? null,

            'subcontractor' => $validated['subcontractor'] ?? null,

            'bua' => $validated['bua'] ?? null,

            'description' => $validated['description'] ?? null,

            'main_image' => $mainImagePath,

            'featured' => $request->boolean('featured'),

            'sort_order' => $validated['sort_order'] ?? 0,

            'start_date' => $validated['start_date'] ?? null,

            'completion_date' => $validated['completion_date'] ?? null,

        ]);


        /*
        |--------------------------------------------------------------------------
        | Add New Gallery Images
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('gallery')) {

            $lastSortOrder = $project->images()
                ->max('sort_order');

            $lastSortOrder = $lastSortOrder ?? -1;


            foreach ($request->file('gallery') as $index => $image) {

                $path = $image->store(
                    'projects/gallery',
                    'public'
                );

                $project->images()->create([

                    'image' => $path,

                    'sort_order' => $lastSortOrder + $index + 1,

                ]);
            }
        }


        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'Project has been updated successfully.'
            );
    }


    /**
     * Delete project.
     */
    public function destroy($id)
    {
        $project = Project::with('images')
            ->findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | Delete Main Image
        |--------------------------------------------------------------------------
        */

        if (
            $project->main_image &&
            Storage::disk('public')->exists($project->main_image)
        ) {
            Storage::disk('public')->delete(
                $project->main_image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Gallery Images
        |--------------------------------------------------------------------------
        */

        foreach ($project->images as $image) {

            if (
                $image->image &&
                Storage::disk('public')->exists($image->image)
            ) {
                Storage::disk('public')->delete(
                    $image->image
                );
            }

            $image->delete();
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Project
        |--------------------------------------------------------------------------
        */

        $project->delete();


        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'Project has been deleted successfully.'
            );
    }


    /**
     * Delete gallery image.
     */
    public function destroyImage($id)
    {
        $image = ProjectImage::findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | Delete Physical File
        |--------------------------------------------------------------------------
        */

        if (
            $image->image &&
            Storage::disk('public')->exists($image->image)
        ) {
            Storage::disk('public')->delete(
                $image->image
            );
        }


        /*
        |--------------------------------------------------------------------------
        | Delete Database Record
        |--------------------------------------------------------------------------
        */

        $image->delete();


        return back()
            ->with(
                'success',
                'Project image has been deleted successfully.'
            );
    }
}