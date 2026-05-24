@extends('admin.layouts.app')

@section('title', $pageTitle ?? 'Settings')
@section('header_title', $pageTitle ?? 'Settings')

@section('content')
    @if(session('success'))
        <div style="background: rgba(13, 148, 136, 0.1); border: 1px solid rgba(13, 148, 136, 0.25); color: var(--accent-teal); padding: 12px 16px; border-radius: 12px; font-size: 14px; margin-bottom: 24px; display: flex; align-items: center; gap: 8px;">
            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2.5" fill="none"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

         @foreach($groups as $group => $settings)
            <div class="card" style="margin-bottom: 24px;">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                    <h3 class="card-title" style="text-transform: capitalize;">{{ $group }} Settings</h3>
                    @if($group === 'Testimonials Section')
                        <a href="{{ route('admin.testimonials.index') }}" style="background: var(--accent-teal); color: white; padding: 8px 16px; border-radius: 8px; font-size: 12.5px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            Manage Testimonials List &rarr;
                        </a>
                    @elseif($group === 'Clients & Partners Section')
                        <a href="{{ route('admin.partners.index') }}" style="background: var(--accent-teal); color: white; padding: 8px 16px; border-radius: 8px; font-size: 12.5px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            <svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            Manage Partner Logos &rarr;
                        </a>
                    @endif
                </div>
                <div style="padding: 0 24px 24px; display: flex; flex-direction: column; gap: 20px;">
                    @foreach($settings as $setting)
                        <div>
                            <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">
                                {{ $setting->label }}
                                <span style="font-size: 11px; color: var(--text-dim); font-weight: 400; text-transform: none; margin-left: 6px;">({{ $setting->key }})</span>
                            </label>

                            @if($setting->type === 'textarea')
                                <textarea
                                    name="{{ $setting->key }}"
                                    rows="3"
                                    class="form-input"
                                    style="resize: vertical;"
                                >{{ $setting->value }}</textarea>
                            @elseif($setting->type === 'image')
                                <div style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                                    @if($setting->value)
                                        <img src="{{ str_starts_with($setting->value, 'http') ? $setting->value : Storage::url($setting->value) }}" alt="Current" style="height: 60px; width: auto; border-radius: 8px; border: 1px solid var(--border-glass);">
                                    @endif
                                    <input type="file" name="images[{{ $setting->key }}]" accept="image/*"
                                        style="color: var(--text-muted); font-size: 13px;">
                                </div>
                            @else
                                <input
                                    type="text"
                                    name="{{ $setting->key }}"
                                    value="{{ $setting->value }}"
                                    class="form-input"
                                >
                            @endif

                            @error($setting->key)
                                <p style="color: var(--accent-red); font-size: 12px; margin-top: 4px;">{{ $message }}</p>
                            @enderror
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div style="display: flex; justify-content: flex-end; margin-top: 8px;">
            <button type="submit" class="btn-primary" style="background: var(--accent-orange); color: white; border: none; padding: 12px 28px; border-radius: 10px; font-size: 14px; font-weight: 600; cursor: pointer; font-family: var(--font-body);">
                Simpan Semua Settings
            </button>
        </div>
    </form>
@endsection
