<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$settings = \App\Models\Setting::all()->pluck('key')->toArray();
$filtered = array_filter($settings, function($k) {
    return str_contains($k, 'icon') || str_contains($k, 'feature') || str_contains($k, 'core_') || str_contains($k, 'services_card_');
});
print_r(array_values($filtered));
