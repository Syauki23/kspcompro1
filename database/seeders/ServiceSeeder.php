<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Operational Strategy',
                'slug' => 'operational-strategy',
                'icon' => 'ship',
                'category' => null,
                'short_description' => null,
                'description' => 'We design comprehensive, practical operational strategy frameworks tailored specifically to the maritime sector.',
                'features' => [
                    [
                        'title' => 'Operational Strategy',
                        'desc' => 'Developing practical strategies that improve performance and support long-term operational goals.',
                    ],
                    [
                        'title' => 'Maritime Compliance',
                        'desc' => 'Ensuring compliance with international regulations and industry standards.',
                    ],
                    [
                        'title' => 'Business Improvement',
                        'desc' => 'Identifying opportunities and implementing solutions that drive efficiency and value.',
                    ],
                    [
                        'title' => 'Safety Culture Implementation',
                        'desc' => 'Building a strong safety culture through engagement, processes, and continuous improvement.',
                    ],
                    [
                        'title' => 'Reliability Assured',
                        'desc' => 'Ensuring top quality results',
                    ],
                ],
                'image' => 'assets/bg-ship.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Risk Assessment',
                'slug' => 'risk-assessment',
                'icon' => 'shield',
                'category' => null,
                'short_description' => null,
                'description' => 'Comprehensive safety and operational risk assessments for maritime and industrial operations.',
                'features' => [
                    [
                        'title' => 'Hazard Identification',
                        'desc' => 'Systematic mapping of operational and workplace hazards to prevent accidents.',
                    ],
                    [
                        'title' => 'Risk Mitigation',
                        'desc' => 'Designing practical controls and standard practices to reduce risk levels.',
                    ],
                    [
                        'title' => 'Compliance Audits',
                        'desc' => 'Verification against national and international industrial safety regulations.',
                    ],
                    [
                        'title' => 'Safety Management',
                        'desc' => 'Standardizing emergency response workflows and dynamic contingency planning.',
                    ],
                ],
                'image' => 'services/JsgvM4hxtF2f5QfsSRq9PFIo0rOHi82L5Qxa7L7n.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Vessel Inspection',
                'slug' => 'vessel-inspection',
                'icon' => 'file-text',
                'category' => null,
                'short_description' => null,
                'description' => 'Professional vessel inspection services to ensure operational readiness and regulatory compliance.',
                'features' => [
                    [
                        'title' => 'Pre-purchase Inspections',
                        'desc' => 'Detailed condition and capability evaluations for informed acquisition decisions.',
                    ],
                    [
                        'title' => 'SIRE/OVID Prep',
                        'desc' => 'Mock vetting inspections to ensure seamless compliance approvals.',
                    ],
                    [
                        'title' => 'Technical Audits',
                        'desc' => 'Rigorous examination of machinery, structure, and essential onboard safety gear.',
                    ],
                    [
                        'title' => 'Cargo & Operations',
                        'desc' => 'Assessment of cargo handling systems and technical stability management.',
                    ],
                ],
                'image' => 'assets/bg-ship.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'HR Assessment',
                'slug' => 'hr-assessment',
                'icon' => 'users',
                'category' => null,
                'short_description' => null,
                'description' => 'Assessment and profiling systems designed to improve workforce capability and organizational performance.',
                'features' => [
                    [
                        'title' => 'Competency Profiling',
                        'desc' => 'Objective evaluation of crew operational skills and maritime knowledge parameters.',
                    ],
                    [
                        'title' => 'Psychometric Testing',
                        'desc' => 'Assessing crucial behavioral traits and decision-making under high-stress conditions.',
                    ],
                    [
                        'title' => 'Leadership Assessment',
                        'desc' => 'Thorough evaluation of the leadership and management capabilities of senior officers.',
                    ],
                    [
                        'title' => 'Training Gap Analysis',
                        'desc' => 'Pinpointing specific organizational training needs for continuous human resource improvements.',
                    ],
                ],
                'image' => 'assets/bg-ship.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Workshop & Training',
                'slug' => 'workshop-training',
                'icon' => 'award',
                'category' => null,
                'short_description' => null,
                'description' => 'Practical training programs designed to strengthen capability, compliance, and operational standards.',
                'features' => [
                    [
                        'title' => 'Custom Curriculums',
                        'desc' => 'Tailored educational material fully aligned with specific corporate operational needs.',
                    ],
                    [
                        'title' => 'Interactive Delivery',
                        'desc' => 'Engaging case studies, hands-on casualty analyses, and active learning models.',
                    ],
                    [
                        'title' => 'Compliance & Standards',
                        'desc' => 'High-quality courses updated and mapped to international STCW & vetting codes.',
                    ],
                    [
                        'title' => 'Performance Reviews',
                        'desc' => 'Integrated metric reports to evaluate student performance and retention outcomes.',
                    ],
                ],
                'image' => 'assets/bg-ship.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Due Diligence',
                'slug' => 'due-diligence',
                'icon' => 'search',
                'category' => null,
                'short_description' => null,
                'description' => 'Strategic due diligence support for acquisitions, operational reviews, and business evaluation.',
                'features' => [
                    [
                        'title' => 'Technical Due Diligence',
                        'desc' => 'Independent evaluation of asset conditions before commercial deals.',
                    ],
                    [
                        'title' => 'Regulatory Review',
                        'desc' => 'Thorough investigation of compliance history, active liabilities, and legal certification.',
                    ],
                    [
                        'title' => 'Operational Audit',
                        'desc' => 'In-depth assessment of fleet management structures and overall operational efficiency.',
                    ],
                    [
                        'title' => 'Strategic Risk Analysis',
                        'desc' => 'Auditing the long-term economic viability, lifecycle maintenance costs, and market suitability.',
                    ],
                ],
                'image' => 'assets/bg-ship.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($services as $srv) {
            Service::updateOrCreate(
                ['slug' => $srv['slug']],
                $srv
            );
        }
    }
}
