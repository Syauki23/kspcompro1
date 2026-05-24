<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::orderBy('id')->get();
        return view('admin.trainings.index', compact('trainings'));
    }

    public function create()
    {
        return view('admin.trainings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'is_active'   => 'nullable|boolean',
        ]);

        $validated['slug']      = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        Training::create($validated);

        return redirect()->route('admin.trainings.index')->with('success', 'Training berhasil ditambahkan.');
    }

    public function edit(Training $training)
    {
        return view('admin.trainings.edit', compact('training'));
    }

    public function update(Request $request, Training $training)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'is_active'   => 'nullable|boolean',
        ]);

        $validated['slug']      = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        $training->update($validated);

        return redirect()->route('admin.trainings.index')->with('success', 'Training berhasil diperbarui.');
    }

    public function destroy(Training $training)
    {
        $training->delete();
        return redirect()->route('admin.trainings.index')->with('success', 'Training berhasil dihapus.');
    }
}
