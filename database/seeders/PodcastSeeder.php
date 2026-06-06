<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Podcast;

class PodcastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
                'is_featured' => false,
                'image' => 'assets/featured_podcast.png',
                'is_active' => true,
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
                'image' => 'assets/sumatra.jpg',
                'is_active' => true,
            ],
            [
                'title' => 'Lessons from Setbacks: Turning Challenges into Growth',
                'slug' => 'lessons-from-setbacks-turning-challenges-into-growth',
                'episode_number' => 29,
                'duration' => '26:48',
                'publish_date' => '2025-04-26',
                'youtube_id' => 'JgcwSsxL6RM',
                'spotify_url' => 'https://open.spotify.com',
                'description' => 'Exploring case studies of failures and how individuals and teams pivot toward strategic strength.',
                'category' => 'Navigating Through Life',
                'is_featured' => true,
                'image' => 'assets/experient.jpg',
                'is_active' => true,
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
                'is_active' => true,
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
                'image' => 'assets/training.png',
                'is_active' => true,
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
                'image' => 'assets/bg-ship.jpg',
                'is_active' => true,
            ],
        ];

        foreach ($podcasts as $pod) {
            Podcast::updateOrCreate(
                ['slug' => $pod['slug']],
                $pod
            );
        }
    }
}
