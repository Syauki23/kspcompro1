<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class GlobalSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Website Logo & Identity
            ['key' => 'site_logo', 'value' => '', 'group' => 'global', 'label' => 'Website Logo (Header & Footer)', 'type' => 'image'],
            
            // Social Media links
            ['key' => 'social_instagram', 'value' => 'https://instagram.com', 'group' => 'global', 'label' => 'Instagram URL', 'type' => 'text'],
            ['key' => 'social_linkedin', 'value' => 'https://linkedin.com', 'group' => 'global', 'label' => 'LinkedIn URL', 'type' => 'text'],
            ['key' => 'social_youtube', 'value' => 'https://youtube.com', 'group' => 'global', 'label' => 'YouTube URL', 'type' => 'text'],
            ['key' => 'social_spotify', 'value' => 'https://spotify.com', 'group' => 'global', 'label' => 'Spotify Podcast URL', 'type' => 'text'],

            // Contact Information
            ['key' => 'contact_phone', 'value' => '+62 878 8023 1853', 'group' => 'contact', 'label' => 'Contact Telephone Number', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'info@ksp-consulting.com', 'group' => 'contact', 'label' => 'Contact Email Address', 'type' => 'text'],
            ['key' => 'contact_address', 'value' => 'Jakarta, Indonesia', 'group' => 'contact', 'label' => 'Company Address Line', 'type' => 'textarea'],
            ['key' => 'contact_whatsapp_link', 'value' => 'https://wa.me/6287880231853', 'group' => 'contact', 'label' => 'WhatsApp Chat Link', 'type' => 'text'],
            ['key' => 'contact_map_url', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.24151746237!2d106.78918939726563!3d-6.229746499999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e849e7ecf1%3A0x2ad1b181a4b449b!2sJakarta!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid', 'group' => 'contact', 'label' => 'Google Map Embed URL (src attribute only)', 'type' => 'textarea'],
            ['key' => 'contact_banner_title_white', 'value' => 'Strategic Solutions for', 'group' => 'contact', 'label' => 'CTA Strip Title White Text', 'type' => 'text'],
            ['key' => 'contact_banner_title_orange', 'value' => 'Maritime Excellence', 'group' => 'contact', 'label' => 'CTA Strip Title Orange Text', 'type' => 'text'],
            ['key' => 'contact_banner_description', 'value' => 'Knowledge-driven consulting to help maritime and industrial businesses operate safely, efficiently, and sustainably.', 'group' => 'contact', 'label' => 'CTA Strip Description Text', 'type' => 'textarea'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
