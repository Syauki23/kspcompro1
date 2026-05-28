<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhilosophyValue;
use Illuminate\Http\Request;

class PhilosophyController extends Controller
{
    public function index()
    {
        $values = PhilosophyValue::orderBy('index')->get();
        return view('admin.philosophy.index', compact('values'));
    }

    public function create()
    {
        $nextIndex = PhilosophyValue::max('index') + 1;
        return view('admin.philosophy.create', compact('nextIndex'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'letter'      => 'required|string|max:1',
            'index'       => 'required|integer|unique:philosophy_values,index',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'nullable|string|max:50',
            'image'       => 'nullable|image|max:5120',
        ]);

        // Handle features
        $features = array_filter($request->input('features', []), fn($v) => !empty(trim($v)));
        $validated['features'] = array_values($features);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('philosophy', 'public');
        }

        PhilosophyValue::create($validated);

        return redirect()->route('admin.philosophy.index')->with('success', 'Philosophy value berhasil ditambahkan.');
    }

    public function edit(PhilosophyValue $philosophy)
    {
        return view('admin.philosophy.edit', compact('philosophy'));
    }

    public function update(Request $request, PhilosophyValue $philosophy)
    {
        $validated = $request->validate([
            'letter'      => 'required|string|max:1',
            'index'       => 'required|integer|unique:philosophy_values,index,' . $philosophy->id,
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'icon'        => 'nullable|string|max:50',
            'image'       => 'nullable|image|max:5120',
        ]);

        // Handle features
        $features = array_filter($request->input('features', []), fn($v) => !empty(trim($v)));
        $validated['features'] = array_values($features);

        if ($request->hasFile('image')) {
            if ($philosophy->image && !str_starts_with($philosophy->image, 'http') && \Illuminate\Support\Facades\Storage::disk('public')->exists($philosophy->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($philosophy->image);
            }
            $validated['image'] = $request->file('image')->store('philosophy', 'public');
        }

        $philosophy->update($validated);

        return redirect()->route('admin.philosophy.index')->with('success', 'Philosophy value berhasil diperbarui.');
    }

    public function destroy(PhilosophyValue $philosophy)
    {
        if ($philosophy->image && !str_starts_with($philosophy->image, 'http') && \Illuminate\Support\Facades\Storage::disk('public')->exists($philosophy->image)) {
            \Illuminate\Support\Facades\Storage::disk('public')->delete($philosophy->image);
        }
        $philosophy->delete();
        return redirect()->route('admin.philosophy.index')->with('success', 'Philosophy value berhasil dihapus.');
    }
}
