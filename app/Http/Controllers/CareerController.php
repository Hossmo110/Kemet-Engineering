<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    private function getJobs()
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | JOB 1 - PROJECT MANAGER
            |--------------------------------------------------------------------------
            */

            [
                'id' => 1,

                'title' => 'Project Manager',

                'location' => 'United Arab Emirates',

                'department' => 'Project Management',

                'type' => 'Full Time',

                'posted' => '2026-08-05',

                'expires' => '2026-11-30',

                'description' => 'We are looking for an experienced Project Manager to lead and coordinate engineering projects from planning through completion. The successful candidate will be responsible for managing project activities, coordinating with internal teams and clients, monitoring progress, and ensuring that projects are delivered safely, efficiently, on time, and within budget.',

                'qualifications' => [

                    'Bachelor’s degree in Civil Engineering, Construction Management, or a related field.',

                    'Minimum 5 years of experience in project management within the engineering or construction industry.',

                    'Strong knowledge of project planning, execution, cost control, and scheduling.',

                    'Experience coordinating with clients, consultants, subcontractors, and internal engineering teams.',

                    'Strong leadership, communication, and problem-solving skills.',

                    'Ability to manage multiple projects and meet deadlines.',

                    'UAE/GCC experience is preferred.',

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | JOB 2 - ELECTRICAL ENGINEER
            |--------------------------------------------------------------------------
            */

            [
                'id' => 2,

                'title' => 'Electrical Engineer',

                'location' => 'United Arab Emirates',

                'department' => 'Electrical Engineering',

                'type' => 'Full Time',

                'posted' => '2026-08-05',

                'expires' => '2026-11-30',

                'description' => 'We are looking for an Electrical Engineer to support the planning, coordination and execution of electrical engineering works. The candidate will be responsible for ensuring that electrical systems are designed, installed, tested and completed in accordance with project requirements, safety standards and quality expectations.',

                'qualifications' => [

                    'Bachelor’s degree in Electrical Engineering.',

                    'Minimum 3–5 years of experience in electrical engineering or construction projects.',

                    'Strong knowledge of electrical systems, installations, testing, and commissioning.',

                    'Ability to read and understand electrical drawings and technical specifications.',

                    'Experience coordinating with consultants, contractors, and project teams.',

                    'Strong communication, analytical, and problem-solving skills.',

                    'UAE/GCC experience is preferred.',

                ],
            ],


            /*
            |--------------------------------------------------------------------------
            | JOB 3 - MECHANICAL ENGINEER
            |--------------------------------------------------------------------------
            */

            [
                'id' => 3,

                'title' => 'Mechanical Engineer',

                'location' => 'United Arab Emirates',

                'department' => 'Mechanical Engineering',

                'type' => 'Full Time',

                'posted' => '2026-08-05',

                'expires' => '2026-11-30',

                'description' => 'We are looking for a Mechanical Engineer to contribute to the design, coordination and execution of mechanical engineering works. The candidate will support project teams in delivering mechanical systems in accordance with technical specifications, safety requirements and quality standards.',

                'qualifications' => [

                    'Bachelor’s degree in Mechanical Engineering.',

                    'Minimum 3–5 years of experience in mechanical engineering or construction projects.',

                    'Strong knowledge of HVAC, plumbing, fire protection, and mechanical systems.',

                    'Ability to read mechanical drawings, specifications, and technical documents.',

                    'Experience with installation, testing, commissioning, and troubleshooting.',

                    'Strong communication and problem-solving skills.',

                    'UAE/GCC experience is preferred.',

                ],
            ],

        ];
    }


    /*
    |--------------------------------------------------------------------------
    | CAREERS PAGE
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $jobs = $this->getJobs();

        return view('careers.index', compact('jobs'));
    }


    /*
    |--------------------------------------------------------------------------
    | JOB DETAILS PAGE
    |--------------------------------------------------------------------------
    */

    public function show($id)
    {
        $jobs = $this->getJobs();

        $job = collect($jobs)->firstWhere(
            'id',
            (int) $id
        );

        abort_if(!$job, 404);

        return view(
            'careers.show',
            compact('job')
        );
    }
}
