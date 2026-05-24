<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('order_position')->get();
        return view('admin.experiences.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'company'        => 'required|string|max:255',
            'year'           => 'required|string|max:50',
            'description'    => 'nullable|string',
            'category'       => 'nullable|string|max:100',
            'color_scheme'   => 'nullable|string|max:50',
            'icon'           => 'nullable|string|max:50',
            'order_position' => 'nullable|integer',
            'is_active'      => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);

        Experience::create($validated);

        return redirect()->route('admin.experiences.index')->with('success', 'Experience berhasil ditambahkan.');
    }

    public function edit(Experience $experience)
    {
        return view('admin.experiences.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'company'        => 'required|string|max:255',
            'year'           => 'required|string|max:50',
            'description'    => 'nullable|string',
            'category'       => 'nullable|string|max:100',
            'color_scheme'   => 'nullable|string|max:50',
            'icon'           => 'nullable|string|max:50',
            'order_position' => 'nullable|integer',
            'is_active'      => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);

        $experience->update($validated);

        return redirect()->route('admin.experiences.index')->with('success', 'Experience berhasil diperbarui.');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('success', 'Experience berhasil dihapus.');
    }
}
