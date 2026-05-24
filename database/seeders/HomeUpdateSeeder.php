<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;
use App\Models\Partner;
use App\Models\Testimonial;

class HomeUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed New Home Settings
        $settings = [
            // Home Hero
            ['key' => 'home_banner_image', 'value' => '', 'group' => 'home', 'label' => 'Hero Banner Background Image', 'type' => 'image'],
            ['key' => 'home_hero_title_white', 'value' => 'Navigating Complexity.', 'group' => 'home', 'label' => 'Hero Title White Text', 'type' => 'text'],
            ['key' => 'home_hero_title_orange', 'value' => 'Delivering', 'group' => 'home', 'label' => 'Hero Title Orange Prefix', 'type' => 'text'],
            ['key' => 'home_typewriter_words', 'value' => 'Operational Excellence, Strategic Solutions, Maritime Expertise', 'group' => 'home', 'label' => 'Typewriter Cycling Phrases (Comma Separated)', 'type' => 'text'],
            ['key' => 'home_hero_description', 'value' => 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.', 'group' => 'home', 'label' => 'Hero Description', 'type' => 'textarea'],
            
            // Home Features
            ['key' => 'home_feature_1_title', 'value' => "Maritime Expertise", 'group' => 'home', 'label' => 'Feature 1 Title', 'type' => 'text'],
            ['key' => 'home_feature_1_desc', 'value' => "Years of hands-on industry experience", 'group' => 'home', 'label' => 'Feature 1 Description', 'type' => 'textarea'],
            ['key' => 'home_feature_2_title', 'value' => "Strategic Solutions", 'group' => 'home', 'label' => 'Feature 2 Title', 'type' => 'text'],
            ['key' => 'home_feature_2_desc', 'value' => "Tailored strategies that drive results", 'group' => 'home', 'label' => 'Feature 2 Description', 'type' => 'textarea'],
            ['key' => 'home_feature_3_title', 'value' => "Trusted Partner", 'group' => 'home', 'label' => 'Feature 3 Title', 'type' => 'text'],
            ['key' => 'home_feature_3_desc', 'value' => "Collaborative approach for lasting impact", 'group' => 'home', 'label' => 'Feature 3 Description', 'type' => 'textarea'],
            ['key' => 'home_feature_4_title', 'value' => "Global Perspective Local Understanding", 'group' => 'home', 'label' => 'Feature 4 Title', 'type' => 'text'],
            ['key' => 'home_feature_4_desc', 'value' => "Connecting standards with real-world execution", 'group' => 'home', 'label' => 'Feature 4 Description', 'type' => 'textarea'],

            // Core Services Highlights
            ['key' => 'home_services_subtitle', 'value' => 'WHAT WE DO', 'group' => 'home', 'label' => 'Core Services Subtitle', 'type' => 'text'],
            ['key' => 'home_services_title', 'value' => 'End-to-End Operational Excellence', 'group' => 'home', 'label' => 'Core Services Title', 'type' => 'text'],
            ['key' => 'home_services_desc', 'value' => 'We deliver integrated solutions connecting high-level strategy, thorough assessment, and on-the-ground training implementation.', 'group' => 'home', 'label' => 'Core Services Description', 'type' => 'textarea'],

            // Testimonials Section
            ['key' => 'home_testimonials_subtitle', 'value' => 'CLIENT TESTIMONIALS', 'group' => 'home', 'label' => 'Testimonials Subtitle', 'type' => 'text'],
            ['key' => 'home_testimonials_title', 'value' => "Trusted by Maritime Leaders", 'group' => 'home', 'label' => 'Testimonials Title', 'type' => 'text'],
            ['key' => 'home_testimonials_desc', 'value' => "We are proud to be a trusted partner for maritime and industrial businesses across Indonesia.", 'group' => 'home', 'label' => 'Testimonials Description', 'type' => 'textarea'],

            // Clients & Partners Section
            ['key' => 'home_clients_subtitle', 'value' => 'CLIENTS & PARTNERS', 'group' => 'home', 'label' => 'Clients Subtitle', 'type' => 'text'],
            ['key' => 'home_clients_title', 'value' => "Trusted By", 'group' => 'home', 'label' => 'Clients Title Main', 'type' => 'text'],
            ['key' => 'home_clients_title_accent', 'value' => "Industry Leaders", 'group' => 'home', 'label' => 'Clients Title Highlighted Text', 'type' => 'text'],
            ['key' => 'home_clients_desc', 'value' => 'We collaborate with leading organizations across maritime and industrial sectors to drive operational excellence and sustainable growth.', 'group' => 'home', 'label' => 'Clients Description', 'type' => 'textarea'],
            ['key' => 'home_clients_stat_1_num', 'value' => '50+', 'group' => 'home', 'label' => 'Client Stat 1 Number', 'type' => 'text'],
            ['key' => 'home_clients_stat_1_label', 'value' => 'Clients Served', 'group' => 'home', 'label' => 'Client Stat 1 Label', 'type' => 'text'],
            ['key' => 'home_clients_stat_2_num', 'value' => '15+', 'group' => 'home', 'label' => 'Client Stat 2 Number', 'type' => 'text'],
            ['key' => 'home_clients_stat_2_label', 'value' => 'Years Experience', 'group' => 'home', 'label' => 'Client Stat 2 Label', 'type' => 'text'],
            ['key' => 'home_clients_stat_3_num', 'value' => '100%', 'group' => 'home', 'label' => 'Client Stat 3 Number', 'type' => 'text'],
            ['key' => 'home_clients_stat_3_label', 'value' => 'Client Satisfaction', 'group' => 'home', 'label' => 'Client Stat 3 Label', 'type' => 'text'],
            ['key' => 'home_clients_marquee_label', 'value' => 'OUR TRUSTED CLIENTS & PARTNERS', 'group' => 'home', 'label' => 'Clients Marquee Label', 'type' => 'text'],

            // Latest Insights
            ['key' => 'home_insights_subtitle', 'value' => 'KNOWLEDGE SHARING', 'group' => 'home', 'label' => 'Insights Subtitle', 'type' => 'text'],
            ['key' => 'home_insights_title', 'value' => 'Latest Insights & Media', 'group' => 'home', 'label' => 'Insights Title', 'type' => 'text'],
            ['key' => 'home_insights_desc', 'value' => 'Stay updated with our analytical perspectives, practical case studies, and engaging dialogue on maritime operations.', 'group' => 'home', 'label' => 'Insights Description', 'type' => 'textarea'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }

        // 2. Seed Partners
        $partners = [
            ['name' => 'Pertamina International Shipping', 'logo' => 'assets/Pertamina_International_Shipping.webp', 'order_position' => 1],
            ['name' => 'PHE ONWJ', 'logo' => 'assets/PHE-ONWJ.png', 'order_position' => 2],
            ['name' => 'PTK', 'logo' => 'assets/ptk-logo.webp', 'order_position' => 3],
            ['name' => 'ABUPI', 'logo' => 'assets/abupi.png', 'order_position' => 4],
            ['name' => 'Pelabuhan Indonesia', 'logo' => 'assets/images-removebg-preview.png', 'order_position' => 5],
            ['name' => 'Samudra Bahari', 'logo' => 'assets/143092025_12_03_09_51_13-removebg-preview.png', 'order_position' => 6],
        ];

        foreach ($partners as $p) {
            Partner::updateOrCreate(['name' => $p['name']], $p);
        }

        // 3. Seed Testimonials
        $testimonials = [
            [
                'client_name' => 'PT Samudra Bahari',
                'client_position' => 'Operations Director',
                'client_company' => 'PT Samudra Bahari',
                'client_logo' => 'assets/ptk-logo.webp',
                'quote' => '"KSP Consulting provided practical and highly professional operational solutions for our maritime operations."',
                'order_position' => 1,
            ],
            [
                'client_name' => 'PT Oceanic Shipping',
                'client_position' => 'Marine Superintendent',
                'client_company' => 'PT Oceanic Shipping',
                'client_logo' => 'assets/Pertamina_International_Shipping.webp',
                'quote' => '"Their training and assessment approach helped improve both operational performance and safety awareness."',
                'order_position' => 2,
            ],
            [
                'client_name' => 'PT Nusantara Maritim',
                'client_position' => 'HSEQ Manager',
                'client_company' => 'PT Nusantara Maritim',
                'client_logo' => 'assets/PHE-ONWJ.png',
                'quote' => '"Professional team, deep expertise, and responsive support throughout our TMSA implementation process."',
                'order_position' => 3,
            ],
            [
                'client_name' => 'ABUPI',
                'client_position' => 'Port Association',
                'client_company' => 'ABUPI',
                'client_logo' => 'assets/abupi.png',
                'quote' => '"A valuable partner in standardizing port operational procedures and enhancing safety benchmarks across Indonesian ports."',
                'order_position' => 4,
            ],
            [
                'client_name' => 'Pelabuhan Indonesia',
                'client_position' => 'Port Authority',
                'client_company' => 'Pelabuhan Indonesia',
                'client_logo' => 'assets/images-removebg-preview.png',
                'quote' => '"Expert consultancy that bridges the gap between regulatory requirements and efficient on-the-ground terminal management."',
                'order_position' => 5,
            ]
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['client_name' => $t['client_name']], $t);
        }
    }
}
