@extends('admin.layouts.app')

@section('title', isset($testimonial) ? 'Edit Testimonial' : 'Tambah Testimonial')
@section('header_title', isset($testimonial) ? 'Edit Testimonial' : 'Tambah Testimonial')

@section('content')
    <div class="card">
        <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($testimonial)) @method('PUT') @endif

            <div style="padding: 24px; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Client Name</label>
                    <input type="text" name="client_name" value="{{ old('client_name', $testimonial->client_name ?? '') }}" class="form-input" required>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Client Position</label>
                    <input type="text" name="client_position" value="{{ old('client_position', $testimonial->client_position ?? '') }}" class="form-input" required>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Client Company</label>
                    <input type="text" name="client_company" value="{{ old('client_company', $testimonial->client_company ?? '') }}" class="form-input" required>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Quote</label>
                    <textarea name="quote" class="form-input" rows="4" required>{{ old('quote', $testimonial->quote ?? '') }}</textarea>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Order Position</label>
                    <input type="number" name="order_position" value="{{ old('order_position', $testimonial->order_position ?? 0) }}" class="form-input" required>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Client Logo (Optional)</label>
                    @if(isset($testimonial) && $testimonial->client_logo)
                        <img src="{{ str_starts_with($testimonial->client_logo, 'http') || str_starts_with($testimonial->client_logo, 'assets') ? asset($testimonial->client_logo) : Storage::url($testimonial->client_logo) }}" alt="Logo" style="height: 60px; margin-bottom: 10px; display: block;">
                    @endif
                    <input type="file" name="client_logo" accept="image/*" class="form-input">
                </div>
                <div>
                    <label style="display: flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 500; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--accent-orange);">
                        Aktifkan Testimonial Ini
                    </label>
                </div>
            </div>

            <div style="padding: 16px 24px; border-top: 1px solid var(--border-glass); display: flex; justify-content: flex-end; gap: 12px; background: rgba(0,0,0,0.01);">
                <a href="{{ route('admin.testimonials.index') }}" class="btn-secondary" style="padding: 12px 24px; text-decoration: none;">Batal</a>
                <button type="submit" class="btn-primary" style="background: var(--accent-orange); color: white; border: none; padding: 12px 24px; border-radius: 10px; font-weight: 600; cursor: pointer;">
                    Simpan Testimonial
                </button>
            </div>
        </form>
    </div>
@endsection
