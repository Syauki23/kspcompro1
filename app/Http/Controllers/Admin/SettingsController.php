<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function home()
    {
        $settings = Setting::where('group', 'home')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'home_hero') || str_starts_with($setting->key, 'home_typewriter') || $setting->key == 'home_banner_image') {
                $groups['Hero Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'home_feature')) {
                $groups['Features Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'home_services')) {
                $groups['Core Services Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'home_testimonials')) {
                $groups['Testimonials Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'home_clients')) {
                $groups['Clients & Partners Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'home_insights') || str_starts_with($setting->key, 'home_podcast')) {
                $groups['Insights Section'][] = $setting;
            } else {
                $groups['Other'][] = $setting;
            }
        }
        
        $pageTitle = 'Home';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function about()
    {
        $settings = Setting::where('group', 'about')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'about_core')) {
                $groups['Core Values Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'about_image')) {
                $groups['Images Grid Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'about_stat')) {
                $groups['Statistics Section'][] = $setting;
            } else {
                $groups['Header & Description'][] = $setting;
            }
        }
        
        $pageTitle = 'About Us';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function experience()
    {
        $settings = Setting::where('group', 'experience')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'exp_stat')) {
                $groups['Statistics Section'][] = $setting;
            } else {
                $groups['Header & Description Section'][] = $setting;
            }
        }
        $groups['Experience Timeline Section'] = []; // Empty array for custom button layout
        
        $pageTitle = 'Experience';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function philosophy()
    {
        $settings = Setting::where('group', 'philosophy')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'phil_compass')) {
                $groups['Compass Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'phil_slider')) {
                $groups['Slider Section'][] = $setting;
            } else {
                $groups['Header Section'][] = $setting;
            }
        }
        $groups['Philosophy Values Section'] = []; // Empty array for custom button layout
        
        $pageTitle = 'Philosophy';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function services()
    {
        $settings = Setting::where('group', 'services')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'services_stat')) {
                $groups['Statistics Section'][] = $setting;
            } else {
                $groups['Header Section'][] = $setting;
            }
        }
        $groups['Services Section'] = []; // Empty array for custom button layout
        
        $pageTitle = 'Services';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function contact()
    {
        $settings = Setting::where('group', 'contact')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'contact_banner')) {
                $groups['Banner / Hero'][] = $setting;
            } else {
                $groups['Informasi Kontak'][] = $setting;
            }
        }

        $pageTitle = 'Contact';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function podcast()
    {
        $settings = Setting::where('group', 'podcast')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'podcast_hero')) {
                $groups['Hero Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'podcast_platform')) {
                $groups['Platform Section'][] = $setting;
            } else {
                $groups['Other'][] = $setting;
            }
        }

        $pageTitle = 'Podcast Settings';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function training()
    {        $settings = Setting::where('group', 'training')->orderBy('id')->get();
        $groups = [];
        foreach ($settings as $setting) {
            if (str_starts_with($setting->key, 'training_feature')) {
                $groups['Feature Strip'][] = $setting;
            } elseif (str_starts_with($setting->key, 'training_topics')) {
                $groups['Topics Section'][] = $setting;
            } elseif (str_starts_with($setting->key, 'training_events')) {
                $groups['Recent Events Section'][] = $setting;
            } else {
                $groups['Banner / Hero'][] = $setting;
            }
        }
        $groups['Training Topics List'] = [];
        $groups['Recent Events List']   = [];

        $pageTitle = 'Training';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function global()
    {
        $settings = Setting::where('group', 'global')->orderBy('id')->get();
        $groups = [];
        $groups['Global & Identity'] = $settings;
        
        $pageTitle = 'Global Settings';
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    private function showGroup($groupName, $pageTitle)
    {
        $groups = Setting::where('group', $groupName)->orderBy('id')->get()->groupBy('group');
        return view('admin.settings.index', compact('groups', 'pageTitle'));
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method']);

        foreach ($data as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting) {
                $setting->update(['value' => $value]);
            }
        }

        // Handle image uploads separately
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $setting = Setting::where('key', $key)->first();
                if ($setting && $file->isValid()) {
                    // Delete old file if exists
                    if ($setting->value && Storage::disk('public')->exists($setting->value)) {
                        Storage::disk('public')->delete($setting->value);
                    }
                    $path = $file->store('settings', 'public');
                    $setting->update(['value' => $path]);
                }
            }
        }

        return back()->with('success', 'Settings berhasil disimpan.');
    }
}
