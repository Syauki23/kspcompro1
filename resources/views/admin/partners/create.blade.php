@extends('admin.layouts.app')

@section('title', isset($partner) ? 'Edit Partner' : 'Tambah Partner')
@section('header_title', isset($partner) ? 'Edit Partner' : 'Tambah Partner')

@section('content')
    <div class="card">
        <form action="{{ isset($partner) ? route('admin.partners.update', $partner) : route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($partner)) @method('PUT') @endif

            <div style="padding: 24px; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Name</label>
                    <input type="text" name="name" value="{{ old('name', $partner->name ?? '') }}" class="form-input" required>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Order Position</label>
                    <input type="number" name="order_position" value="{{ old('order_position', $partner->order_position ?? 0) }}" class="form-input" required>
                </div>
                <div>
                    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px;">Logo</label>
                    @if(isset($partner) && $partner->logo)
                        <img src="{{ str_starts_with($partner->logo, 'http') || str_starts_with($partner->logo, 'assets') ? asset($partner->logo) : Storage::url($partner->logo) }}" alt="Logo" style="height: 60px; margin-bottom: 10px; display: block;">
                    @endif
                    <input type="file" name="logo" accept="image/*" class="form-input">
                </div>
                <div>
                    <label style="display: flex; align-items: center; gap: 8px; font-size: 14px; font-weight: 500; cursor: pointer;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $partner->is_active ?? true) ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--accent-orange);">
                        Aktifkan Partner Ini
                    </label>
                </div>
            </div>

            <div style="padding: 16px 24px; border-top: 1px solid var(--border-glass); display: flex; justify-content: flex-end; gap: 12px; background: rgba(0,0,0,0.01);">
                <a href="{{ route('admin.partners.index') }}" class="btn-secondary" style="padding: 12px 24px; text-decoration: none;">Batal</a>
                <button type="submit" class="btn-primary" style="background: var(--accent-orange); color: white; border: none; padding: 12px 24px; border-radius: 10px; font-weight: 600; cursor: pointer;">
                    Simpan Partner
                </button>
            </div>
        </form>
    </div>
@endsection
