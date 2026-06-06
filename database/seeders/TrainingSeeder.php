<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = [
            [
                'title' => 'TMSA & SIRE 2.0 Coaching',
                'slug' => 'tmsa-sire-coaching',
                'description' => 'Gap assessment, preparation & continuous improvement coaching.',
                'icon' => 'briefcase',
                'duration' => '3 Days',
                'price' => 'Contact Us',
                'syllabus' => ['Understanding SIRE 2.0 guidelines', 'TMSA self-assessment audit preparation', 'Developing continuous compliance loops'],
                'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=400&q=80',
                'is_active' => true,
            ],
            [
                'title' => 'Marine Casualty Investigation',
                'slug' => 'marine-casualty-investigation',
                'description' => 'Root cause analysis and investigation techniques for incidents.',
                'icon' => 'activity',
                'duration' => '5 Days',
                'price' => 'Contact Us',
                'syllabus' => ['Root cause analysis models', 'Collecting evidence & interviewing witnesses', 'Drafting casualty investigation reports'],
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80',
                'is_active' => true,
            ],
            [
                'title' => 'Port Risk Management',
                'slug' => 'port-risk-management',
                'description' => 'Risk assessment and control strategies for port and terminal operations.',
                'icon' => 'shield',
                'duration' => '2 Days',
                'price' => 'Contact Us',
                'syllabus' => ['Hazard identification at berths', 'Vessel traffic risk controls', 'Emergency response planning'],
                'image' => 'https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?auto=format&fit=crop&w=400&q=80',
                'is_active' => true,
            ],
            [
                'title' => 'Hazard Identification',
                'slug' => 'hazard-identification',
                'description' => 'Systematic hazard identification for safer work environments.',
                'icon' => 'alert-triangle',
                'duration' => '1 Day',
                'price' => 'Contact Us',
                'syllabus' => ['HAZID study guidelines', 'Workplace risk classification', 'Implementing preventive safety nets'],
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80',
                'is_active' => true,
            ],
            [
                'title' => 'Terminal Tanker Inspection',
                'slug' => 'terminal-tanker-inspection',
                'description' => 'Inspection techniques and best practices for terminal and tanker operations.',
                'icon' => 'search',
                'duration' => '3 Days',
                'price' => 'Contact Us',
                'syllabus' => ['Tanker structural safety elements', 'Cargo manifold & discharge inspections', 'Vapour recovery and terminal systems'],
                'image' => 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?auto=format&fit=crop&w=600&q=80',
                'is_active' => true,
            ],
            [
                'title' => 'ISM Code Management',
                'slug' => 'ism-code-management',
                'description' => 'Implementation, auditing and improvement of ISM systems.',
                'icon' => 'settings',
                'duration' => '3 Days',
                'price' => 'Contact Us',
                'syllabus' => ['Safety Management System architectures', 'Internal audit tools', 'Corrective Action Plans (CAP)'],
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80',
                'is_active' => true,
            ],
            [
                'title' => 'ISPS Inspection',
                'slug' => 'isps-inspection',
                'description' => 'Security inspection techniques and compliance with ISPS requirements.',
                'icon' => 'shield',
                'duration' => null,
                'price' => null,
                'syllabus' => null,
                'image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($trainings as $tr) {
            Training::updateOrCreate(
                ['slug' => $tr['slug']],
                $tr
            );
        }
    }
}
