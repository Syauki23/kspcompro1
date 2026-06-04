<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class PodcastSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Hero Section
            ['key' => 'podcast_hero_badge', 'value' => 'PODCAST', 'group' => 'podcast', 'label' => 'Hero Badge Text', 'type' => 'text'],
            ['key' => 'podcast_hero_title', 'value' => 'Conversations Beyond Operations', 'group' => 'podcast', 'label' => 'Hero Title', 'type' => 'text'],
            ['key' => 'podcast_hero_desc', 'value' => 'Executive conversations, strategic insights, and human-centered discussions that explore the real stories behind leadership, operations, and growth.', 'group' => 'podcast', 'label' => 'Hero Description', 'type' => 'textarea'],
            
            // Other (URLs)
            ['key' => 'podcast_youtube_url', 'value' => 'https://youtube.com', 'group' => 'podcast', 'label' => 'YouTube Channel URL', 'type' => 'text'],
            ['key' => 'podcast_spotify_url', 'value' => 'https://spotify.com', 'group' => 'podcast', 'label' => 'Spotify URL', 'type' => 'text'],

            // Platform Section
            ['key' => 'podcast_platform_badge', 'value' => 'ALSO AVAILABLE ON', 'group' => 'podcast', 'label' => 'Platform Section Badge', 'type' => 'text'],
            ['key' => 'podcast_platform_title', 'value' => 'Listen Anytime, Anywhere', 'group' => 'podcast', 'label' => 'Platform Section Title', 'type' => 'text'],
            ['key' => 'podcast_platform_desc', 'value' => 'Subscribe and listen on your favorite platform.', 'group' => 'podcast', 'label' => 'Platform Section Description', 'type' => 'textarea'],
        ];

        foreach ($settings as $s) {
            Setting::updateOrCreate(['key' => $s['key']], $s);
        }
    }
}
