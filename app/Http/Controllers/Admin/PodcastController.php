<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::orderBy('episode_number', 'desc')->get();
        return view('admin.podcasts.index', compact('podcasts'));
    }

    public function create()
    {
        return view('admin.podcasts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'episode_number' => 'nullable|integer',
            'duration'       => 'nullable|string|max:20',
            'publish_date'   => 'nullable|date',
            'youtube_id'     => 'nullable|string|max:50',
            'spotify_url'    => 'nullable|url|max:500',
            'description'    => 'nullable|string',
            'category'       => 'nullable|string|max:100',
            'is_featured'    => 'nullable|boolean',
            'is_active'      => 'nullable|boolean',
            'image'          => 'nullable|image|max:10240',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured', false);
        $validated['is_active']   = $request->boolean('is_active', true);

        // If this is featured, unset others
        if ($validated['is_featured']) {
            Podcast::where('is_featured', true)->update(['is_featured' => false]);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('podcasts', 'public');
        }

        Podcast::create($validated);

        return redirect()->route('admin.podcasts.index')->with('success', 'Podcast berhasil ditambahkan.');
    }

    public function edit(Podcast $podcast)
    {
        return view('admin.podcasts.edit', compact('podcast'));
    }

    public function update(Request $request, Podcast $podcast)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'episode_number' => 'nullable|integer',
            'duration'       => 'nullable|string|max:20',
            'publish_date'   => 'nullable|date',
            'youtube_id'     => 'nullable|string|max:50',
            'spotify_url'    => 'nullable|url|max:500',
            'description'    => 'nullable|string',
            'category'       => 'nullable|string|max:100',
            'is_featured'    => 'nullable|boolean',
            'is_active'      => 'nullable|boolean',
            'image'          => 'nullable|image|max:10240',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured', false);
        $validated['is_active']   = $request->boolean('is_active', true);

        // If this is featured, unset others
        if ($validated['is_featured']) {
            Podcast::where('is_featured', true)->where('id', '!=', $podcast->id)->update(['is_featured' => false]);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($podcast->image && !str_starts_with($podcast->image, 'http') && Storage::disk('public')->exists($podcast->image)) {
                Storage::disk('public')->delete($podcast->image);
            }
            $validated['image'] = $request->file('image')->store('podcasts', 'public');
        }

        $podcast->update($validated);

        return redirect()->route('admin.podcasts.index')->with('success', 'Podcast berhasil diperbarui.');
    }

    public function destroy(Podcast $podcast)
    {
        if ($podcast->image && !str_starts_with($podcast->image, 'http') && Storage::disk('public')->exists($podcast->image)) {
            Storage::disk('public')->delete($podcast->image);
        }
        $podcast->delete();
        return redirect()->route('admin.podcasts.index')->with('success', 'Podcast berhasil dihapus.');
    }
}
