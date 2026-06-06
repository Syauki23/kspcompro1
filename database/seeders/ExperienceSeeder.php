<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'title' => 'TMSA Gap Assessment & Implementation',
                'description' => null,
                'color_scheme' => 'style-navy',
                'icon' => 'file-text',
                'order_position' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Several HR Assessment Projects',
                'description' => 'Comprehensive HR profiles, competency gaps, psychometric insights, and evaluation audits for crew and leadership personnel.',
                'color_scheme' => 'style-orange',
                'icon' => 'users',
                'order_position' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Assessment & Profiling for 15+ Ship Management Entities',
                'description' => null,
                'color_scheme' => 'style-navy',
                'icon' => 'briefcase',
                'order_position' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Marine & Safety Studies',
                'description' => 'Strategic marine studies comprising structured HAZID, HAZOP analysis, and Vessel Traffic Services (VTS) feasibility evaluations.',
                'color_scheme' => 'style-orange',
                'icon' => 'award',
                'order_position' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Due Diligence for Company Acquisition',
                'description' => 'Performed technical, compliance, and structural due diligence to evaluate fleet assets and legal liability structures before purchase.',
                'color_scheme' => 'style-navy',
                'icon' => 'heart',
                'order_position' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Bulk Carrier Vessel Inspection',
                'description' => 'Rigorous physical and structural vessel inspection covering machinery strength, cargo gears, and onboard safety equipment parameters.',
                'color_scheme' => 'style-orange',
                'icon' => 'anchor',
                'order_position' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::updateOrCreate(
                ['title' => $exp['title']],
                $exp
            );
        }
    }
}
