<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Setting::where('key', 'contact_map_url')->delete();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Setting::create([
            'key' => 'contact_map_url',
            'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.24151746237!2d106.78918939726563!3d-6.229746499999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e849e7ecf1%3A0x2ad1b181a4b449b!2sJakarta!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid',
            'group' => 'contact',
            'label' => 'Google Map Embed URL (src attribute only)',
            'type' => 'text'
        ]);
    }
};
