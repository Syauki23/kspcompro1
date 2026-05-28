@php $val = $philosophy ?? null; @endphp

@if($errors->any())
    <div class="form-error-box">
        <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="form-grid-2">
    <div>
        <label class="form-label">Letter (1 karakter) *</label>
        <input type="text" name="letter" value="{{ old('letter', $val?->letter) }}" class="form-input" maxlength="1" required style="font-size: 24px; font-weight: 800; text-align: center; text-transform: uppercase;">
    </div>
    <div>
        <label class="form-label">Index (urutan 0-10) *</label>
        <input type="number" name="index" value="{{ old('index', $val?->index ?? $nextIndex ?? 0) }}" class="form-input" min="0" max="20" required>
    </div>
    <div class="span-2">
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $val?->title) }}" class="form-input" required>
    </div>
    <div class="span-2">
        <label class="form-label">Description *</label>
        <textarea name="description" rows="4" class="form-input" required>{{ old('description', $val?->description) }}</textarea>
    </div>
    <div class="span-2">
        <label class="form-label">Icon (Pilih Icon)</label>
        <div style="display: flex; gap: 12px; flex-wrap: wrap; margin-top: 8px;">
            @php 
                $iconsList = [
                    'users' => ['Users/Team', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>'],
                    'globe' => ['Globe/World', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>'],
                    'trending-up' => ['Growth/Chart', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>'],
                    'refresh' => ['Refresh/Adapt', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>'],
                    'link' => ['Link/Network', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>'],
                    'star' => ['Star/Quality', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>'],
                    'heart' => ['Heart/Diversity', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>'],
                    'shield' => ['Shield/Ethics', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
                    'layers' => ['Layers/Integrated', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>'],
                    'award' => ['Award/Excellence', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>'],
                    'check-circle' => ['Check/Success', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>']
                ];
                $currentIcon = old('icon', $val?->icon) ?? 'users';
            @endphp
            @foreach($iconsList as $iconKey => $iconData)
                <label style="cursor: pointer; display: flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); padding: 8px 14px; border-radius: 8px; font-size: 13px; transition: all 0.2s;" onmouseover="this.style.background='rgba(255,255,255,0.08)'" onmouseout="this.style.background='rgba(255,255,255,0.03)'">
                    <input type="radio" name="icon" value="{{ $iconKey }}" {{ $currentIcon === $iconKey ? 'checked' : '' }} style="accent-color: var(--accent-orange);">
                    <div style="color: var(--accent-orange); display: flex; align-items: center;">{!! $iconData[1] !!}</div>
                    <span style="color: var(--text-muted);">{{ $iconData[0] }}</span>
                </label>
            @endforeach
        </div>
    </div>
    <div class="span-2">
        <label class="form-label">Upload Image untuk Huruf Ini (Opsional)</label>
        @if($val?->image)
            <div style="margin-bottom: 8px;">
                <img src="{{ str_starts_with($val->image, 'http') || str_starts_with($val->image, 'assets') ? asset($val->image) : Storage::url($val->image) }}" alt="Current Image" style="height: 100px; border-radius: 8px; border: 1px solid var(--border-glass); object-fit: cover;">
            </div>
        @endif
        <input type="file" name="image" accept="image/*" class="form-input" style="padding: 10px; color: var(--text-muted);">
        <p style="font-size: 11px; color: var(--text-dim); margin-top: 4px;">Jika dikosongkan, slider akan menggunakan gambar default dari Settings.</p>
    </div>
</div>

<!-- Features Section -->
<div style="margin-top: 28px;">
    <div class="section-divider">
        <label class="form-label" style="margin-bottom: 0;">Features / Poin Utama</label>
        <button type="button" onclick="addFeature()" class="btn-add-row">+ Tambah</button>
    </div>
    <div id="features-container">
        @php
            $features = old('features') ?? ($val?->features ?? []);
            if (is_string($features)) {
                $decoded = json_decode($features, true);
                $features = is_array($decoded) ? $decoded : [$features];
            }
            if (empty($features)) $features = [''];
        @endphp
        @foreach($features as $feat)
            <div class="dynamic-row">
                <input type="text" name="features[]" value="{{ $feat }}" placeholder="Feature / poin" class="form-input">
                <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
            </div>
        @endforeach
    </div>
</div>

<script>
function addFeature() {
    const row = document.createElement('div');
    row.className = 'dynamic-row';
    row.innerHTML = `
        <input type="text" name="features[]" placeholder="Feature / poin" class="form-input">
        <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
    `;
    document.getElementById('features-container').appendChild(row);
}
</script>
