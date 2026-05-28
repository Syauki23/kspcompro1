<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class PodcastSettingsSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [
                'key' => 'podcast_hero_badge',
                'label' => 'Hero Badge Text',
                'value' => 'PODCAST',
                'type' => 'text',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_hero_title',
                'label' => 'Hero Title',
                'value' => 'Conversations Beyond Operations',
                'type' => 'text',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_hero_desc',
                'label' => 'Hero Description',
                'value' => 'Executive conversations, strategic insights, and human-centered discussions that explore the real stories behind leadership, operations, and growth.',
                'type' => 'textarea',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_platform_badge',
                'label' => 'Platform Section Badge',
                'value' => 'ALSO AVAILABLE ON',
                'type' => 'text',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_platform_title',
                'label' => 'Platform Section Title',
                'value' => 'Listen Anytime, Anywhere',
                'type' => 'text',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_platform_desc',
                'label' => 'Platform Section Description',
                'value' => 'Subscribe and listen on your favorite platform.',
                'type' => 'text',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_youtube_url',
                'label' => 'Global YouTube Channel URL',
                'value' => 'https://youtube.com',
                'type' => 'text',
                'group' => 'podcast',
            ],
            [
                'key' => 'podcast_spotify_url',
                'label' => 'Global Spotify URL',
                'value' => 'https://spotify.com',
                'type' => 'text',
                'group' => 'podcast',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
