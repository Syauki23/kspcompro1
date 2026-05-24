<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'duration'    => 'nullable|string|max:100',
            'price'       => 'nullable|string|max:100',
            'image'       => 'nullable|image|max:2048',
            'is_active'   => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        // Handle syllabus
        $syllabusItems = array_filter($request->input('syllabus', []), fn($v) => !empty(trim($v)));
        $validated['syllabus'] = json_encode(array_values($syllabusItems));

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('trainings', 'public');
        }

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
            'duration'    => 'nullable|string|max:100',
            'price'       => 'nullable|string|max:100',
            'image'       => 'nullable|image|max:2048',
            'is_active'   => 'nullable|boolean',
        ]);

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->boolean('is_active', true);

        // Handle syllabus
        $syllabusItems = array_filter($request->input('syllabus', []), fn($v) => !empty(trim($v)));
        $validated['syllabus'] = json_encode(array_values($syllabusItems));

        // Handle image upload
        if ($request->hasFile('image')) {
            if ($training->image && !str_starts_with($training->image, 'http') && Storage::disk('public')->exists($training->image)) {
                Storage::disk('public')->delete($training->image);
            }
            $validated['image'] = $request->file('image')->store('trainings', 'public');
        }

        $training->update($validated);

        return redirect()->route('admin.trainings.index')->with('success', 'Training berhasil diperbarui.');
    }

    public function destroy(Training $training)
    {
        if ($training->image && !str_starts_with($training->image, 'http') && Storage::disk('public')->exists($training->image)) {
            Storage::disk('public')->delete($training->image);
        }
        $training->delete();
        return redirect()->route('admin.trainings.index')->with('success', 'Training berhasil dihapus.');
    }
}
