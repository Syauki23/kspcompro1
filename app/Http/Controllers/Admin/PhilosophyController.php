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
        ]);

        // Handle features
        $features = array_filter($request->input('features', []), fn($v) => !empty(trim($v)));
        $validated['features'] = array_values($features);

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
        ]);

        // Handle features
        $features = array_filter($request->input('features', []), fn($v) => !empty(trim($v)));
        $validated['features'] = array_values($features);

        $philosophy->update($validated);

        return redirect()->route('admin.philosophy.index')->with('success', 'Philosophy value berhasil diperbarui.');
    }

    public function destroy(PhilosophyValue $philosophy)
    {
        $philosophy->delete();
        return redirect()->route('admin.philosophy.index')->with('success', 'Philosophy value berhasil dihapus.');
    }
}
