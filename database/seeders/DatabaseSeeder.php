<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@ksp-consulting.com'],
            [
                'name' => 'Admin KSP',
                'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
            ]
        );

        // 2. Call Page Update Seeders
        $this->call([
            HomeUpdateSeeder::class,
            AboutUpdateSeeder::class,
            ExperienceUpdateSeeder::class,
            PhilosophyUpdateSeeder::class,
            ServicesSettingsSeeder::class,
            TrainingSettingsSeeder::class,
        ]);

        // 3. Seed SWARNADWIPA Philosophy Values
        $philosophyValues = [
            [
                'letter' => 'S',
                'index' => 0,
                'title' => 'Synergy in Every Step',
                'description' => 'Working together across teams and disciplines to create solutions greater than the sum of their parts.',
                'features' => json_encode(['Cross-functional Teams', 'Collaborative Approach', 'Shared Goals']),
                'icon' => 'users',
            ],
            [
                'letter' => 'W',
                'index' => 1,
                'title' => 'Worldwide Perspective, Local Touch',
                'description' => 'We bring global standards and best practices with a deep understanding of local dynamics to deliver relevant and impactful solutions.',
                'features' => json_encode(['Global Standards', 'Local Understanding', 'Relevant Solutions']),
                'icon' => 'globe',
            ],
            [
                'letter' => 'A',
                'index' => 2,
                'title' => 'Ambition for the Future',
                'description' => 'Driven by a vision for long-term excellence and sustainable progress in every project we undertake.',
                'features' => json_encode(['Forward Thinking', 'Growth Mindset', 'Sustainable Development']),
                'icon' => 'trending-up',
            ],
            [
                'letter' => 'R',
                'index' => 3,
                'title' => 'Responsive to Change',
                'description' => 'Adapting quickly to evolving industry demands and client needs with agile and practical solutions.',
                'features' => json_encode(['Agile Methods', 'Quick Adaptation', 'Flexible Solutions']),
                'icon' => 'refresh',
            ],
            [
                'letter' => 'N',
                'index' => 4,
                'title' => 'Networking Excellence',
                'description' => 'Building strong professional networks that create value and open opportunities for our clients.',
                'features' => json_encode(['Strategic Connections', 'Industry Partnerships', 'Knowledge Sharing']),
                'icon' => 'link',
            ],
            [
                'letter' => 'A',
                'index' => 5,
                'title' => 'Aspiration for Collective Success',
                'description' => 'Committed to achieving shared goals where every stakeholder benefits from our collaborative efforts.',
                'features' => json_encode(['Shared Vision', 'Mutual Growth', 'Collective Achievement']),
                'icon' => 'star',
            ],
            [
                'letter' => 'D',
                'index' => 6,
                'title' => 'Diversity & Inclusion',
                'description' => 'Embracing diverse perspectives and inclusive practices to drive innovation and comprehensive solutions.',
                'features' => json_encode(['Diverse Perspectives', 'Inclusive Culture', 'Innovation Drive']),
                'icon' => 'heart',
            ],
            [
                'letter' => 'W',
                'index' => 7,
                'title' => 'Work Ethics',
                'description' => 'Upholding the highest standards of professionalism, accountability, and integrity in everything we do.',
                'features' => json_encode(['Professional Standards', 'Accountability', 'Ethical Practice']),
                'icon' => 'shield',
            ],
            [
                'letter' => 'I',
                'index' => 8,
                'title' => 'Integrated Approach',
                'description' => 'Delivering holistic solutions that connect strategy, operations, and people for maximum impact.',
                'features' => json_encode(['Holistic Solutions', 'Connected Strategy', 'Maximum Impact']),
                'icon' => 'layers',
            ],
            [
                'letter' => 'P',
                'index' => 9,
                'title' => 'Professional Excellence',
                'description' => 'Maintaining the highest levels of expertise, quality, and continuous improvement in our services.',
                'features' => json_encode(['Expert Knowledge', 'Quality Assurance', 'Continuous Improvement']),
                'icon' => 'award',
            ],
            [
                'letter' => 'A',
                'index' => 10,
                'title' => 'Achieving Together',
                'description' => 'Celebrating shared accomplishments and driving collective success through partnership and teamwork.',
                'features' => json_encode(['Team Success', 'Partnership Focus', 'Shared Achievements']),
                'icon' => 'check-circle',
            ],
        ];

        foreach ($philosophyValues as $val) {
            \App\Models\PhilosophyValue::updateOrCreate(['index' => $val['index']], $val);
        }

        // 4. Seed Experiences
        $experiences = [
            [
                'title' => 'TMSA Gap Assessment & Implementation',
                'company' => 'KSP Consulting Client Portfolio',
                'year' => '2017 - Present',
                'description' => 'Gap assessment, roadmap development, and structured implementation for Tanker Management and Self Assessment compliance.',
                'color_scheme' => 'style-navy',
                'icon' => 'file-text',
                'order_position' => 1,
            ],
            [
                'title' => 'Several HR Assessment Projects',
                'company' => 'Various Maritime Entities',
                'year' => '2018 - Present',
                'description' => 'Comprehensive HR profiles, competency gaps, psychometric insights, and evaluation audits for crew and leadership personnel.',
                'color_scheme' => 'style-orange',
                'icon' => 'users',
                'order_position' => 2,
            ],
            [
                'title' => 'Assessment & Profiling for 15+ Ship Management Entities',
                'company' => 'Leading Ship Managers',
                'year' => '2019 - Present',
                'description' => 'Conducted thorough evaluations and gap profiling to assess operational strength and organizational compliance for ship managers.',
                'color_scheme' => 'style-navy',
                'icon' => 'briefcase',
                'order_position' => 3,
            ],
            [
                'title' => 'Marine & Safety Studies',
                'company' => 'Maritime Infrastructure Operators',
                'year' => '2020 - Present',
                'description' => 'Strategic marine studies comprising structured HAZID, HAZOP analysis, and Vessel Traffic Services (VTS) feasibility evaluations.',
                'color_scheme' => 'style-orange',
                'icon' => 'shield',
                'order_position' => 4,
            ],
            [
                'title' => 'Due Diligence for Company Acquisition',
                'company' => 'Investment & Operational Groups',
                'year' => '2022',
                'description' => 'Performed technical, compliance, and structural due diligence to evaluate fleet assets and legal liability structures before purchase.',
                'color_scheme' => 'style-navy',
                'icon' => 'search',
                'order_position' => 5,
            ],
            [
                'title' => 'Bulk Carrier Vessel Inspection',
                'company' => 'Shipowners and Charterers',
                'year' => '2023',
                'description' => 'Rigorous physical and structural vessel inspection covering machinery strength, cargo gears, and onboard safety equipment parameters.',
                'color_scheme' => 'style-orange',
                'icon' => 'anchor',
                'order_position' => 6,
            ],
        ];

        foreach ($experiences as $exp) {
            \App\Models\Experience::updateOrCreate(['title' => $exp['title']], $exp);
        }

        // 5. Seed Services
        $services = [
            [
                'title' => 'Maritime Consulting',
                'slug' => 'maritime-consulting',
                'description' => 'Strategic maritime consulting services designed to support operational excellence, compliance, efficiency, and sustainable business growth.',
                'features' => json_encode([
                    [
                        'title' => 'Operational Strategy',
                        'desc' => 'Developing practical strategies that improve performance and support long-term operational goals.'
                    ],
                    [
                        'title' => 'Maritime Compliance',
                        'desc' => 'Ensuring compliance with international regulations and industry standards.'
                    ],
                    [
                        'title' => 'Business Improvement',
                        'desc' => 'Identifying opportunities and implementing solutions that drive efficiency and value.'
                    ],
                    [
                        'title' => 'Safety Culture Implementation',
                        'desc' => 'Building a strong safety culture through engagement, processes, and continuous improvement.'
                    ]
                ]),
                'icon' => 'flag',
                'image' => 'assets/bg-ship.jpg',
            ],
            [
                'title' => 'Risk Assessment',
                'slug' => 'risk-assessment',
                'description' => 'Comprehensive safety and operational risk assessments for maritime and industrial operations.',
                'features' => json_encode([
                    [
                        'title' => 'Hazard Identification',
                        'desc' => 'Systematic mapping of operational and workplace hazards to prevent accidents.'
                    ],
                    [
                        'title' => 'Risk Mitigation',
                        'desc' => 'Designing practical controls and standard practices to reduce risk levels.'
                    ],
                    [
                        'title' => 'Compliance Audits',
                        'desc' => 'Verification against national and international industrial safety regulations.'
                    ],
                    [
                        'title' => 'Safety Management',
                        'desc' => 'Standardizing emergency response workflows and dynamic contingency planning.'
                    ]
                ]),
                'icon' => 'shield',
                'image' => 'assets/bg-ship.jpg',
            ],
            [
                'title' => 'Vessel Inspection',
                'slug' => 'vessel-inspection',
                'description' => 'Professional vessel inspection services to ensure operational readiness and regulatory compliance.',
                'features' => json_encode([
                    [
                        'title' => 'Pre-purchase Inspections',
                        'desc' => 'Detailed condition and capability evaluations for informed acquisition decisions.'
                    ],
                    [
                        'title' => 'SIRE/OVID Prep',
                        'desc' => 'Mock vetting inspections to ensure seamless compliance approvals.'
                    ],
                    [
                        'title' => 'Technical Audits',
                        'desc' => 'Rigorous examination of machinery, structure, and essential onboard safety gear.'
                    ],
                    [
                        'title' => 'Cargo & Operations',
                        'desc' => 'Assessment of cargo handling systems and technical stability management.'
                    ]
                ]),
                'icon' => 'file-text',
                'image' => 'assets/bg-ship.jpg',
            ],
            [
                'title' => 'HR Assessment',
                'slug' => 'hr-assessment',
                'description' => 'Assessment and profiling systems designed to improve workforce capability and organizational performance.',
                'features' => json_encode([
                    [
                        'title' => 'Competency Profiling',
                        'desc' => 'Objective evaluation of crew operational skills and maritime knowledge parameters.'
                    ],
                    [
                        'title' => 'Psychometric Testing',
                        'desc' => 'Assessing crucial behavioral traits and decision-making under high-stress conditions.'
                    ],
                    [
                        'title' => 'Leadership Assessment',
                        'desc' => 'Thorough evaluation of the leadership and management capabilities of senior officers.'
                    ],
                    [
                        'title' => 'Training Gap Analysis',
                        'desc' => 'Pinpointing specific organizational training needs for continuous human resource improvements.'
                    ]
                ]),
                'icon' => 'users',
                'image' => 'assets/bg-ship.jpg',
            ],
            [
                'title' => 'Workshop & Training',
                'slug' => 'workshop-training',
                'description' => 'Practical training programs designed to strengthen capability, compliance, and operational standards.',
                'features' => json_encode([
                    [
                        'title' => 'Custom Curriculums',
                        'desc' => 'Tailored educational material fully aligned with specific corporate operational needs.'
                    ],
                    [
                        'title' => 'Interactive Delivery',
                        'desc' => 'Engaging case studies, hands-on casualty analyses, and active learning models.'
                    ],
                    [
                        'title' => 'Compliance & Standards',
                        'desc' => 'High-quality courses updated and mapped to international STCW & vetting codes.'
                    ],
                    [
                        'title' => 'Performance Reviews',
                        'desc' => 'Integrated metric reports to evaluate student performance and retention outcomes.'
                    ]
                ]),
                'icon' => 'award',
                'image' => 'assets/bg-ship.jpg',
            ],
            [
                'title' => 'Due Diligence',
                'slug' => 'due-diligence',
                'description' => 'Strategic due diligence support for acquisitions, operational reviews, and business evaluation.',
                'features' => json_encode([
                    [
                        'title' => 'Technical Due Diligence',
                        'desc' => 'Independent evaluation of asset conditions before commercial deals.'
                    ],
                    [
                        'title' => 'Regulatory Review',
                        'desc' => 'Thorough investigation of compliance history, active liabilities, and legal certification.'
                    ],
                    [
                        'title' => 'Operational Audit',
                        'desc' => 'In-depth assessment of fleet management structures and overall operational efficiency.'
                    ],
                    [
                        'title' => 'Strategic Risk Analysis',
                        'desc' => 'Auditing the long-term economic viability, lifecycle maintenance costs, and market suitability.'
                    ]
                ]),
                'icon' => 'search',
                'image' => 'assets/bg-ship.jpg',
            ],
        ];

        foreach ($services as $srv) {
            \App\Models\Service::updateOrCreate(['slug' => $srv['slug']], $srv);
        }

        // 6. Seed Trainings
        $trainings = [
            [
                'title' => 'TMSA & SIRE 2.0 Coaching',
                'slug' => 'tmsa-sire-coaching',
                'description' => 'Gap assessment, preparation & continuous improvement coaching.',
                'duration' => '3 Days',
                'price' => 'Contact Us',
                'syllabus' => '["Understanding SIRE 2.0 guidelines", "TMSA self-assessment audit preparation", "Developing continuous compliance loops"]',
                'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'title' => 'Marine Casualty Investigation',
                'slug' => 'marine-casualty-investigation',
                'description' => 'Root cause analysis and investigation techniques for incidents.',
                'duration' => '5 Days',
                'price' => 'Contact Us',
                'syllabus' => '["Root cause analysis models", "Collecting evidence & interviewing witnesses", "Drafting casualty investigation reports"]',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'title' => 'Port Risk Management',
                'slug' => 'port-risk-management',
                'description' => 'Risk assessment and control strategies for port and terminal operations.',
                'duration' => '2 Days',
                'price' => 'Contact Us',
                'syllabus' => '["Hazard identification at berths", "Vessel traffic risk controls", "Emergency response planning"]',
                'image' => 'https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'title' => 'Hazard Identification',
                'slug' => 'hazard-identification',
                'description' => 'Systematic hazard identification for safer work environments.',
                'duration' => '1 Day',
                'price' => 'Contact Us',
                'syllabus' => '["HAZID study guidelines", "Workplace risk classification", "Implementing preventive safety nets"]',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'title' => 'Terminal Tanker Inspection',
                'slug' => 'terminal-tanker-inspection',
                'description' => 'Inspection techniques and best practices for terminal and tanker operations.',
                'duration' => '3 Days',
                'price' => 'Contact Us',
                'syllabus' => '["Tanker structural safety elements", "Cargo manifold & discharge inspections", "Vapour recovery and terminal systems"]',
                'image' => 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?auto=format&fit=crop&w=400&q=80',
            ],
            [
                'title' => 'ISM Code Management',
                'slug' => 'ism-code-management',
                'description' => 'Implementation, auditing and improvement of ISM systems.',
                'duration' => '3 Days',
                'price' => 'Contact Us',
                'syllabus' => '["Safety Management System architectures", "Internal audit tools", "Corrective Action Plans (CAP)"]',
                'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80',
            ],
        ];

        foreach ($trainings as $tr) {
            \App\Models\Training::updateOrCreate(['slug' => $tr['slug']], $tr);
        }

        // 7. Seed Podcasts
        $podcasts = [
            [
                'title' => 'Building Resilient Maritime Operations in an Era of Complexity',
                'slug' => 'building-resilient-maritime-operations',
                'episode_number' => 12,
                'duration' => '32:45',
                'publish_date' => '2025-05-10',
                'youtube_id' => 'dQw4w9WgXcQ',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'We discuss how maritime leaders can strengthen operational resilience, manage risks, and create sustainable value across the maritime value chain.',
                'category' => 'Navigating Through Maritime',
                'is_featured' => true,
                'image' => 'assets/featured_podcast.png',
            ],
            [
                'title' => 'Purpose, Leadership, and Meaningful Impact',
                'slug' => 'purpose-leadership-and-meaningful-impact',
                'episode_number' => 11,
                'duration' => '28:16',
                'publish_date' => '2025-05-03',
                'youtube_id' => 'dQw4w9WgXcQ',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'A deep dive into self-purpose, executive leadership models, and leaving a lasting legacy.',
                'category' => 'Navigating Through Life',
                'is_featured' => false,
                'image' => 'assets/life_podcast.png',
            ],
            [
                'title' => 'Lessons from Setbacks: Turning Challenges into Growth',
                'slug' => 'lessons-from-setbacks-challenges-growth',
                'episode_number' => 10,
                'duration' => '26:48',
                'publish_date' => '2025-04-26',
                'youtube_id' => 'dQw4w9WgXcQ',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'Exploring case studies of failures and how individuals and teams pivot toward strategic strength.',
                'category' => 'Navigating Through Life',
                'is_featured' => false,
                'image' => 'assets/life_podcast.png',
            ],
            [
                'title' => 'Mindset for High Performance and Fulfillment',
                'slug' => 'mindset-high-performance-fulfillment',
                'episode_number' => 9,
                'duration' => '31:02',
                'publish_date' => '2025-04-19',
                'youtube_id' => 'dQw4w9WgXcQ',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'Unlocking cognitive mental models, emotional intelligence, and balance in high-demand environments.',
                'category' => 'Navigating Through Life',
                'is_featured' => false,
                'image' => 'assets/life_podcast.png',
            ],
            [
                'title' => 'The Future of Maritime Workforce: Skills, Safety, and Adaptability',
                'slug' => 'future-of-maritime-workforce',
                'episode_number' => 11,
                'duration' => '29:18',
                'publish_date' => '2025-05-02',
                'youtube_id' => 'dQw4w9WgXcQ',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'How digitalization, automation, and ESG safety demands are reshaping maritime human capital.',
                'category' => 'Navigating Through Maritime',
                'is_featured' => false,
                'image' => 'assets/maritime_podcast.png',
            ],
            [
                'title' => 'Navigating Regulatory Changes: What Operators Need to Know',
                'slug' => 'navigating-regulatory-changes-operators',
                'episode_number' => 10,
                'duration' => '27:33',
                'publish_date' => '2025-04-25',
                'youtube_id' => 'dQw4w9WgXcQ',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'A comprehensive review of upcoming environmental regulations and STCW updates for 2025.',
                'category' => 'Navigating Through Maritime',
                'is_featured' => false,
                'image' => 'assets/maritime_podcast.png',
            ],
        ];

        foreach ($podcasts as $pod) {
            \App\Models\Podcast::updateOrCreate(['slug' => $pod['slug']], $pod);
        }
    }
}
