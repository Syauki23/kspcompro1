<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order_position')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name'     => 'required|string|max:255',
            'client_position' => 'required|string|max:255',
            'client_company'  => 'required|string|max:255',
            'client_logo'     => 'nullable|image|max:10240',
            'quote'           => 'required|string',
            'is_active'       => 'nullable|boolean',
            'order_position'  => 'nullable|integer',
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['order_position'] = $validated['order_position'] ?? 0;

        if ($request->hasFile('client_logo')) {
            $validated['client_logo'] = $request->file('client_logo')->store('testimonials', 'public');
        }

        Testimonial::create($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'client_name'     => 'required|string|max:255',
            'client_position' => 'required|string|max:255',
            'client_company'  => 'required|string|max:255',
            'client_logo'     => 'nullable|image|max:10240',
            'quote'           => 'required|string',
            'is_active'       => 'nullable|boolean',
            'order_position'  => 'nullable|integer',
        ]);

        $validated['is_active'] = $request->boolean('is_active', true);
        $validated['order_position'] = $validated['order_position'] ?? 0;

        if ($request->hasFile('client_logo')) {
            if ($testimonial->client_logo && Storage::disk('public')->exists($testimonial->client_logo) && !str_starts_with($testimonial->client_logo, 'assets/')) {
                Storage::disk('public')->delete($testimonial->client_logo);
            }
            $validated['client_logo'] = $request->file('client_logo')->store('testimonials', 'public');
        }

        $testimonial->update($validated);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->client_logo && Storage::disk('public')->exists($testimonial->client_logo) && !str_starts_with($testimonial->client_logo, 'assets/')) {
            Storage::disk('public')->delete($testimonial->client_logo);
        }
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial berhasil dihapus.');
    }
}
