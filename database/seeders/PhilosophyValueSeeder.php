<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhilosophyValue;

class PhilosophyValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
                'letter' => 'S',
                'index' => 0,
                'title' => 'Synergy in Every Step',
                'description' => 'Working together across teams and disciplines to create solutions greater than the sum of their parts.',
                'features' => ['Cross-functional Teams', 'Collaborative Approach', 'Shared Goals'],
                'icon' => 'users',
                'image' => null,
            ],
            [
                'letter' => 'W',
                'index' => 1,
                'title' => 'Worldwide Perspective, Local Touch',
                'description' => 'We bring global standards and best practices with a deep understanding of local dynamics to deliver relevant and impactful solutions.',
                'features' => ['Global Standards', 'Local Understanding', 'Relevant Solutions'],
                'icon' => 'globe',
                'image' => null,
            ],
            [
                'letter' => 'A',
                'index' => 2,
                'title' => 'Ambition for the Future',
                'description' => 'Driven by a vision for long-term excellence and sustainable progress in every project we undertake.',
                'features' => ['Forward Thinking', 'Growth Mindset', 'Sustainable Development'],
                'icon' => 'trending-up',
                'image' => null,
            ],
            [
                'letter' => 'R',
                'index' => 3,
                'title' => 'Responsive to Change',
                'description' => 'Adapting quickly to evolving industry demands and client needs with agile and practical solutions.',
                'features' => ['Agile Methods', 'Quick Adaptation', 'Flexible Solutions'],
                'icon' => 'refresh',
                'image' => null,
            ],
            [
                'letter' => 'N',
                'index' => 4,
                'title' => 'Networking Excellence',
                'description' => 'Building strong professional networks that create value and open opportunities for our clients.',
                'features' => ['Strategic Connections', 'Industry Partnerships', 'Knowledge Sharing'],
                'icon' => 'link',
                'image' => null,
            ],
            [
                'letter' => 'A',
                'index' => 5,
                'title' => 'Aspiration for Collective Success',
                'description' => 'Committed to achieving shared goals where every stakeholder benefits from our collaborative efforts.',
                'features' => ['Shared Vision', 'Mutual Growth', 'Collective Achievement'],
                'icon' => 'star',
                'image' => null,
            ],
            [
                'letter' => 'D',
                'index' => 6,
                'title' => 'Diversity & Inclusion',
                'description' => 'Embracing diverse perspectives and inclusive practices to drive innovation and comprehensive solutions.',
                'features' => ['Diverse Perspectives', 'Inclusive Culture', 'Innovation Drive'],
                'icon' => 'heart',
                'image' => null,
            ],
            [
                'letter' => 'W',
                'index' => 7,
                'title' => 'Work Ethics',
                'description' => 'Upholding the highest standards of professionalism, accountability, and integrity in everything we do.',
                'features' => ['Professional Standards', 'Accountability', 'Ethical Practice'],
                'icon' => 'shield',
                'image' => null,
            ],
            [
                'letter' => 'I',
                'index' => 8,
                'title' => 'Integrated Approach',
                'description' => 'Delivering holistic solutions that connect strategy, operations, and people for maximum impact.',
                'features' => ['Holistic Solutions', 'Connected Strategy', 'Maximum Impact'],
                'icon' => 'layers',
                'image' => null,
            ],
            [
                'letter' => 'P',
                'index' => 9,
                'title' => 'Professional Excellence',
                'description' => 'Maintaining the highest levels of expertise, quality, and continuous improvement in our services.',
                'features' => ['Expert Knowledge', 'Quality Assurance', 'Continuous Improvement'],
                'icon' => 'award',
                'image' => null,
            ],
            [
                'letter' => 'A',
                'index' => 10,
                'title' => 'Achieving Together',
                'description' => 'Celebrating shared accomplishments and driving collective success through partnership and teamwork.',
                'features' => ['Team Success', 'Partnership Focus', 'Shared Achievements'],
                'icon' => 'check-circle',
                'image' => null,
            ],
        ];

        foreach ($values as $val) {
            PhilosophyValue::updateOrCreate(
                ['letter' => $val['letter'], 'index' => $val['index']],
                $val
            );
        }
    }
}
