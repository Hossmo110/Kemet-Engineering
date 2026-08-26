<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CareerJob;

class CareerJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CareerJob::create([
            'title' => 'Project Manager',
            'location' => 'United Arab Emirates',
            'department' => 'Project Management',
            'type' => 'Full Time',

            'description' =>
                'We are looking for an experienced Project Manager to lead and coordinate engineering projects from planning through completion.',

            'responsibilities' => implode("\n", [
                'Lead and manage engineering projects from planning through completion.',
                'Coordinate with clients, consultants, contractors, and internal teams.',
                'Monitor project schedules, budgets, and overall progress.',
                'Ensure projects are delivered according to quality and safety standards.',
                'Prepare project reports and provide regular updates to management.',
            ]),

            'qualifications' => implode("\n", [
                'Bachelor’s degree in Engineering or a related field.',
                'Minimum 5 years of experience in project management.',
                'Strong leadership and communication skills.',
                'Excellent planning and organizational abilities.',
                'Experience in engineering or construction projects is preferred.',
            ]),

            'posted_at' => '2026-08-05',
            'expires_at' => '2026-11-30',
        ]);


        CareerJob::create([
            'title' => 'Electrical Engineer',
            'location' => 'United Arab Emirates',
            'department' => 'Electrical Engineering',
            'type' => 'Full Time',

            'description' =>
                'We are looking for an Electrical Engineer to support the planning, coordination and execution of electrical engineering works.',

            'responsibilities' => implode("\n", [
                'Prepare and review electrical engineering designs.',
                'Coordinate electrical works with other engineering disciplines.',
                'Monitor installation and testing activities.',
                'Ensure compliance with project specifications and safety standards.',
                'Coordinate with contractors and project teams.',
            ]),

            'qualifications' => implode("\n", [
                'Bachelor’s degree in Electrical Engineering.',
                'Relevant experience in electrical engineering works.',
                'Good knowledge of electrical systems and standards.',
                'Ability to read technical drawings.',
                'Strong communication and problem-solving skills.',
            ]),

            'posted_at' => '2026-08-05',
            'expires_at' => '2026-11-30',
        ]);


        CareerJob::create([
            'title' => 'Mechanical Engineer',
            'location' => 'United Arab Emirates',
            'department' => 'Mechanical Engineering',
            'type' => 'Full Time',

            'description' =>
                'We are looking for a Mechanical Engineer to contribute to the design, coordination and execution of mechanical engineering works.',

            'responsibilities' => implode("\n", [
                'Prepare and review mechanical engineering designs.',
                'Coordinate mechanical works with other disciplines.',
                'Monitor installation and commissioning activities.',
                'Ensure compliance with project specifications and safety standards.',
                'Support project teams during execution.',
            ]),

            'qualifications' => implode("\n", [
                'Bachelor’s degree in Mechanical Engineering.',
                'Relevant experience in mechanical engineering works.',
                'Good knowledge of mechanical systems.',
                'Ability to read technical drawings.',
                'Strong communication and problem-solving skills.',
            ]),

            'posted_at' => '2026-08-05',
            'expires_at' => '2026-11-30',
        ]);
    }
}
