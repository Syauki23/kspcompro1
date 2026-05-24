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
        return $this->showGroup('about', 'About Us');
    }

    public function global()
    {
        // Get settings that are NOT 'home' or 'about'
        $groups = Setting::whereNotIn('group', ['home', 'about'])->orderBy('group')->orderBy('id')->get()->groupBy('group');
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
