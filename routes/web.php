<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $settings = \App\Models\Setting::whereIn('group', ['home', 'contact'])->pluck('value', 'key');
    $partners = \App\Models\Partner::where('is_active', true)->orderBy('order_position')->get();
    $testimonials = \App\Models\Testimonial::where('is_active', true)->orderBy('order_position')->get();
    $latestPodcast = \App\Models\Podcast::where('is_active', true)->orderByDesc('id')->first();
    return view('index', compact('settings', 'partners', 'testimonials', 'latestPodcast'));
});

// Route Utilitas untuk Seed Database secara langsung lewat Browser
Route::get('/seed-database-ksp', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('db:seed');
        return "Sukses! Seluruh data pengaturan (Home, About, Experience, Philosophy, Services, Training, Global/Contact) berhasil di-seed ke database. Silakan kembali ke website/admin panel.";
    } catch (\Exception $e) {
        return "Terjadi kesalahan saat seeding: " . $e->getMessage();
    }
});

Route::get('/about', function () {
    $settings = \App\Models\Setting::where('group', 'about')->pluck('value', 'key');
    return view('about', compact('settings'));
});

Route::get('/experience', function () {
    $settings = \App\Models\Setting::where('group', 'experience')->pluck('value', 'key');
    $experiences = \App\Models\Experience::where('is_active', true)->orderBy('order_position')->get();
    return view('experience', compact('settings', 'experiences'));
});

Route::get('/philosophy', function () {
    $settings = \App\Models\Setting::where('group', 'philosophy')->pluck('value', 'key');
    $values = \App\Models\PhilosophyValue::orderBy('index')->get();
    return view('philosophy', compact('settings', 'values'));
});

Route::get('/services', function () {
    $services = \App\Models\Service::where('is_active', true)->orderBy('id')->get();
    $settings = \App\Models\Setting::where('group', 'services')->pluck('value', 'key');
    return view('services', compact('services', 'settings'));
});

Route::get('/training', function () {
    $trainings = \App\Models\Training::where('is_active', true)->orderBy('id')->get();
    $settings  = \App\Models\Setting::where('group', 'training')->pluck('value', 'key');
    $events    = \App\Models\TrainingEvent::where('is_active', true)->orderBy('order_position')->orderByDesc('event_date')->get();
    return view('training', compact('trainings', 'settings', 'events'));
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/podcast', function () {
    $featured = \App\Models\Podcast::where('is_featured', true)->where('is_active', true)->first();
    $categories = \App\Models\Podcast::where('is_active', true)->where('is_featured', false)
        ->orderBy('episode_number', 'desc')->get()->groupBy('category');
    $settings = \App\Models\Setting::where('group', 'contact')->pluck('value', 'key');
    return view('podcast', compact('featured', 'categories', 'settings'));
});

Route::get('/contact', function () {
    $settings = \App\Models\Setting::where('group', 'contact')->pluck('value', 'key');
    return view('contact', compact('settings'));
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'company' => 'nullable|string|max:255',
        'email'   => 'required|email|max:255',
        'phone'   => 'nullable|string|max:50',
        'message' => 'required|string',
    ]);
    \App\Models\ContactMessage::create($validated);
    return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
})->name('contact.submit');

// Admin Authentication Routes
Route::get('/admin/login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/admin/login', [App\Http\Controllers\AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('admin.logout');

// Protected Admin Dashboard Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Inbox (Contact Messages) Manager
    Route::get('/messages', [App\Http\Controllers\DashboardController::class, 'inbox'])->name('admin.inbox');
    Route::post('/messages/{message}/read', [App\Http\Controllers\DashboardController::class, 'markAsRead'])->name('admin.messages.read');
    Route::delete('/messages/{message}', [App\Http\Controllers\DashboardController::class, 'deleteMessage'])->name('admin.messages.delete');

    // Settings
    Route::get('/settings/home', [App\Http\Controllers\Admin\SettingsController::class, 'home'])->name('admin.settings.home');
    Route::get('/settings/about', [App\Http\Controllers\Admin\SettingsController::class, 'about'])->name('admin.settings.about');
    Route::get('/settings/experience', [App\Http\Controllers\Admin\SettingsController::class, 'experience'])->name('admin.settings.experience');
    Route::get('/settings/philosophy', [App\Http\Controllers\Admin\SettingsController::class, 'philosophy'])->name('admin.settings.philosophy');
    Route::get('/settings/services', [App\Http\Controllers\Admin\SettingsController::class, 'services'])->name('admin.settings.services');
    Route::get('/settings/contact', [App\Http\Controllers\Admin\SettingsController::class, 'contact'])->name('admin.settings.contact');
    Route::get('/settings/training', [App\Http\Controllers\Admin\SettingsController::class, 'training'])->name('admin.settings.training');
    Route::get('/settings/global', [App\Http\Controllers\Admin\SettingsController::class, 'global'])->name('admin.settings.global');
    Route::post('/settings', [App\Http\Controllers\Admin\SettingsController::class, 'update'])->name('admin.settings.update');

    // Experiences
    Route::resource('experiences', App\Http\Controllers\Admin\ExperienceController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.experiences.index',
            'create'  => 'admin.experiences.create',
            'store'   => 'admin.experiences.store',
            'edit'    => 'admin.experiences.edit',
            'update'  => 'admin.experiences.update',
            'destroy' => 'admin.experiences.destroy',
        ]
    ]);

    // Services
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.services.index',
            'create'  => 'admin.services.create',
            'store'   => 'admin.services.store',
            'edit'    => 'admin.services.edit',
            'update'  => 'admin.services.update',
            'destroy' => 'admin.services.destroy',
        ]
    ]);

    // Trainings
    Route::resource('trainings', App\Http\Controllers\Admin\TrainingController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.trainings.index',
            'create'  => 'admin.trainings.create',
            'store'   => 'admin.trainings.store',
            'edit'    => 'admin.trainings.edit',
            'update'  => 'admin.trainings.update',
            'destroy' => 'admin.trainings.destroy',
        ]
    ]);

    // Training Events (Recent Workshop Recap)
    Route::resource('training-events', App\Http\Controllers\Admin\TrainingEventController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.training-events.index',
            'create'  => 'admin.training-events.create',
            'store'   => 'admin.training-events.store',
            'edit'    => 'admin.training-events.edit',
            'update'  => 'admin.training-events.update',
            'destroy' => 'admin.training-events.destroy',
        ]
    ]);

    // Podcasts
    Route::resource('podcasts', App\Http\Controllers\Admin\PodcastController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.podcasts.index',
            'create'  => 'admin.podcasts.create',
            'store'   => 'admin.podcasts.store',
            'edit'    => 'admin.podcasts.edit',
            'update'  => 'admin.podcasts.update',
            'destroy' => 'admin.podcasts.destroy',
        ]
    ]);

    // Philosophy Values
    Route::resource('philosophy', App\Http\Controllers\Admin\PhilosophyController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.philosophy.index',
            'create'  => 'admin.philosophy.create',
            'store'   => 'admin.philosophy.store',
            'edit'    => 'admin.philosophy.edit',
            'update'  => 'admin.philosophy.update',
            'destroy' => 'admin.philosophy.destroy',
        ]
    ]);

    // Partners
    Route::resource('partners', App\Http\Controllers\Admin\PartnerController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.partners.index',
            'create'  => 'admin.partners.create',
            'store'   => 'admin.partners.store',
            'edit'    => 'admin.partners.edit',
            'update'  => 'admin.partners.update',
            'destroy' => 'admin.partners.destroy',
        ]
    ]);

    // Testimonials
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class, [
        'as' => 'admin',
        'names' => [
            'index'   => 'admin.testimonials.index',
            'create'  => 'admin.testimonials.create',
            'store'   => 'admin.testimonials.store',
            'edit'    => 'admin.testimonials.edit',
            'update'  => 'admin.testimonials.update',
            'destroy' => 'admin.testimonials.destroy',
        ]
    ]);
});
