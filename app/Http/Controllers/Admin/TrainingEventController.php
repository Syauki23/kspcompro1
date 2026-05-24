<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrainingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainingEventController extends Controller
{
    public function index()
    {
        $events = TrainingEvent::orderBy('order_position')->orderByDesc('event_date')->get();
        return view('admin.training_events.index', compact('events'));
    }

    public function create()
    {
        return view('admin.training_events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'location'       => 'nullable|string|max:255',
            'event_date'     => 'nullable|date',
            'image'          => 'nullable|image|max:2048',
            'is_active'      => 'nullable|boolean',
            'order_position' => 'nullable|integer',
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('training_events', 'public');
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        TrainingEvent::create($validated);

        return redirect()->route('admin.training-events.index')->with('success', 'Event berhasil ditambahkan.');
    }

    public function edit(TrainingEvent $trainingEvent)
    {
        return view('admin.training_events.edit', compact('trainingEvent'));
    }

    public function update(Request $request, TrainingEvent $trainingEvent)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'location'       => 'nullable|string|max:255',
            'event_date'     => 'nullable|date',
            'image'          => 'nullable|image|max:2048',
            'is_active'      => 'nullable|boolean',
            'order_position' => 'nullable|integer',
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);

        if ($request->hasFile('image')) {
            if ($trainingEvent->image && !str_starts_with($trainingEvent->image, 'http') && Storage::disk('public')->exists($trainingEvent->image)) {
                Storage::disk('public')->delete($trainingEvent->image);
            }
            $validated['image'] = $request->file('image')->store('training_events', 'public');
        } elseif ($request->filled('image_url')) {
            $validated['image'] = $request->input('image_url');
        }

        $trainingEvent->update($validated);

        return redirect()->route('admin.training-events.index')->with('success', 'Event berhasil diperbarui.');
    }

    public function destroy(TrainingEvent $trainingEvent)
    {
        if ($trainingEvent->image && !str_starts_with($trainingEvent->image, 'http') && Storage::disk('public')->exists($trainingEvent->image)) {
            Storage::disk('public')->delete($trainingEvent->image);
        }
        $trainingEvent->delete();
        return redirect()->route('admin.training-events.index')->with('success', 'Event berhasil dihapus.');
    }
}
