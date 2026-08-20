<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CareerController extends Controller
{
    public function index(): View
    {
        $jobs = [
            [
                'title' => 'Civil Engineer',
                'department' => 'Engineering',
                'type' => 'Full Time',
                'location' => 'Egypt',
                'description' => 'We are looking for a qualified Civil Engineer to join our engineering team and contribute to the successful delivery of our projects.',
            ],

            [
                'title' => 'Architect',
                'department' => 'Design',
                'type' => 'Full Time',
                'location' => 'Egypt',
                'description' => 'We are seeking a talented Architect to support our design team in developing innovative and practical engineering solutions.',
            ],

            [
                'title' => 'Site Engineer',
                'department' => 'Project Management',
                'type' => 'Full Time',
                'location' => 'Egypt',
                'description' => 'Join our project team and help coordinate site activities while ensuring quality, safety and timely project delivery.',
            ],

            [
                'title' => 'Electrical Engineer',
                'department' => 'MEP',
                'type' => 'Full Time',
                'location' => 'Egypt',
                'description' => 'We are looking for an Electrical Engineer to support the planning, coordination and execution of electrical engineering works.',
            ],
        ];

        return view('careers.index', compact('jobs'));
    }
}
