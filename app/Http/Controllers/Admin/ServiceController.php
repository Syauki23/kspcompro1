<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'category'          => 'nullable|string|max:100',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'icon'              => 'nullable|string',
            'image'             => 'nullable|image|max:2048',
            'is_active'         => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        // Handle features JSON
        $features = [];
        $featureTitles = $request->input('feature_title', []);
        $featureDescs  = $request->input('feature_desc', []);
        foreach ($featureTitles as $i => $title) {
            if (!empty($title)) {
                $features[] = ['title' => $title, 'desc' => $featureDescs[$i] ?? ''];
            }
        }
        $validated['features'] = $features;

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil ditambahkan.');
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title'             => 'required|string|max:255',
            'category'          => 'nullable|string|max:100',
            'short_description' => 'nullable|string',
            'description'       => 'nullable|string',
            'icon'              => 'nullable|string',
            'image'             => 'nullable|image|max:2048',
            'is_active'         => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        // Handle features JSON
        $features = [];
        $featureTitles = $request->input('feature_title', []);
        $featureDescs  = $request->input('feature_desc', []);
        foreach ($featureTitles as $i => $title) {
            if (!empty($title)) {
                $features[] = ['title' => $title, 'desc' => $featureDescs[$i] ?? ''];
            }
        }
        $validated['features'] = $features;

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($service->image && Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validated);

        return redirect()->route('admin.services.index')->with('success', 'Service berhasil diperbarui.');
    }

    public function destroy(Service $service)
    {
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service berhasil dihapus.');
    }
}
