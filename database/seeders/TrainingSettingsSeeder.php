<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\TrainingEvent;

class TrainingSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Banner / Hero
            ['key' => 'training_banner_image',       'value' => '',                                                                                                    'group' => 'training', 'label' => 'Banner Background Image',          'type' => 'image'],
            ['key' => 'training_hero_subtitle',      'value' => 'OUR TRAINING & KNOWLEDGE SHARING',                                                                   'group' => 'training', 'label' => 'Hero Subtitle (kecil atas)',        'type' => 'text'],
            ['key' => 'training_hero_title',         'value' => 'Training &',                                                                                         'group' => 'training', 'label' => 'Hero Title Baris 1',               'type' => 'text'],
            ['key' => 'training_hero_title_accent',  'value' => 'Knowledge Sharing',                                                                                  'group' => 'training', 'label' => 'Hero Title Baris 2 (orange)',       'type' => 'text'],
            ['key' => 'training_hero_description',   'value' => 'KSP Consulting actively contributes to industry development through workshops, coaching programs, technical training, and speaking engagements.', 'group' => 'training', 'label' => 'Hero Description', 'type' => 'textarea'],

            // Feature Strip (4 items)
            ['key' => 'training_feature_1_title',    'value' => 'Industry Experts',                'group' => 'training', 'label' => 'Feature 1 Title',       'type' => 'text'],
            ['key' => 'training_feature_1_desc',     'value' => 'Delivered by practitioners',      'group' => 'training', 'label' => 'Feature 1 Description',  'type' => 'text'],
            ['key' => 'training_feature_2_title',    'value' => 'Practical Learning',              'group' => 'training', 'label' => 'Feature 2 Title',       'type' => 'text'],
            ['key' => 'training_feature_2_desc',     'value' => 'Real case studies & best practices', 'group' => 'training', 'label' => 'Feature 2 Description', 'type' => 'text'],
            ['key' => 'training_feature_3_title',    'value' => 'Actionable Insights',             'group' => 'training', 'label' => 'Feature 3 Title',       'type' => 'text'],
            ['key' => 'training_feature_3_desc',     'value' => 'Tools & strategies you can apply','group' => 'training', 'label' => 'Feature 3 Description',  'type' => 'text'],
            ['key' => 'training_feature_4_title',    'value' => 'Trusted Partner',                 'group' => 'training', 'label' => 'Feature 4 Title',       'type' => 'text'],
            ['key' => 'training_feature_4_desc',     'value' => 'Commitment to safety & quality',  'group' => 'training', 'label' => 'Feature 4 Description',  'type' => 'text'],

            // Topics Section
            ['key' => 'training_topics_title',       'value' => 'Our Training & Workshop Topics',                                                                     'group' => 'training', 'label' => 'Topics Section Title',             'type' => 'text'],
            ['key' => 'training_topics_subtitle',    'value' => 'Comprehensive programs designed to enhance knowledge, build capability, and drive operational excellence.', 'group' => 'training', 'label' => 'Topics Section Subtitle', 'type' => 'textarea'],

            // Recent Events Section
            ['key' => 'training_events_title',       'value' => 'Recent Workshop & Training Recap','group' => 'training', 'label' => 'Events Section Title',            'type' => 'text'],
            ['key' => 'training_events_link_text',   'value' => 'View all events',                 'group' => 'training', 'label' => 'Events "View All" Link Text',      'type' => 'text'],
            ['key' => 'training_events_link_url',    'value' => '#',                               'group' => 'training', 'label' => 'Events "View All" Link URL',       'type' => 'text'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }

        // Seed sample training events
        $events = [
            ['title' => 'TMSA & SIRE 2.0 Coaching Program',       'location' => 'Jakarta, Indonesia',  'event_date' => '2024-04-24', 'image' => 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=400&q=80', 'order_position' => 1],
            ['title' => 'Marine Casualty Investigation Workshop',  'location' => 'Surabaya, Indonesia', 'event_date' => '2024-06-15', 'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80', 'order_position' => 2],
            ['title' => 'Port Risk Management Training',           'location' => 'Batam, Indonesia',    'event_date' => '2024-09-10', 'image' => 'https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?auto=format&fit=crop&w=400&q=80', 'order_position' => 3],
            ['title' => 'ISM Code Management Workshop',            'location' => 'Jakarta, Indonesia',  'event_date' => '2024-11-22', 'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80', 'order_position' => 4],
        ];

        foreach ($events as $e) {
            TrainingEvent::updateOrCreate(['title' => $e['title']], array_merge($e, ['is_active' => true]));
        }
    }
}
