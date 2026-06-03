@php $srv = $service ?? null; @endphp

@if($errors->any())
    <div class="form-error-box">
        <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

    <style>
        .icon-dropdown { position: relative; }
        .icon-dropdown summary::-webkit-details-marker { display: none; }
        .icon-dropdown summary { list-style: none; cursor: pointer; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); width: 44px; height: 44px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: var(--accent-orange, #e1a730); transition: all 0.2s; }
        .icon-dropdown summary:hover { background: rgba(255,255,255,0.08); }
        .icon-dropdown[open] summary { border-color: var(--accent-orange, #e1a730); }
        .icon-dropdown-menu { position: absolute; top: calc(100% + 4px); left: 0; background: #1a2235; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; padding: 8px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 4px; z-index: 50; box-shadow: 0 10px 30px rgba(0,0,0,0.5); width: max-content; }
        .icon-option { background: transparent; border: 1px solid transparent; padding: 8px; border-radius: 6px; cursor: pointer; color: var(--text-muted, #94a3b8); display: flex; align-items: center; justify-content: center; transition: 0.2s; }
        .icon-option:hover { background: rgba(255,255,255,0.1); }
        .icon-option.active { color: var(--accent-orange, #e1a730); background: rgba(225, 167, 48, 0.1); border-color: rgba(225, 167, 48, 0.3); }
    </style>
    
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
            'check-circle' => ['Check/Success', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>'],
            'anchor' => ['Anchor', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>'],
            'compass' => ['Compass', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>'],
            'ship' => ['Ship', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M12 10v4"/><path d="M12 2v3"/></svg>'],
            'activity' => ['Activity/Pulse', '<svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>']
        ];
        $currentIcon = old('icon', $srv?->icon) ?? 'layers';
        $currentSvg = $iconsList[$currentIcon][1] ?? $iconsList['layers'][1];
    @endphp

    <div style="display: flex; gap: 12px; align-items: flex-end;">
        <div>
            <label class="form-label">Icon</label>
            <details class="icon-dropdown">
                <summary class="selected-icon-preview" title="Pilih Icon">
                    {!! $currentSvg !!}
                </summary>
                <div class="icon-dropdown-menu">
                    <input type="hidden" name="icon" class="icon-input" value="{{ $currentIcon }}">
                    @foreach($iconsList as $iKey => $iData)
                        <button type="button" onclick="selectDropdownIcon(this, '{{ $iKey }}')" class="icon-option {{ $currentIcon === $iKey ? 'active' : '' }}" title="{{ $iData[0] }}">
                            {!! $iData[1] !!}
                        </button>
                    @endforeach
                </div>
            </details>
        </div>
        <div style="flex: 1;">
            <label class="form-label">Title *</label>
            <input type="text" name="title" value="{{ old('title', $srv?->title) }}" class="form-input" required>
        </div>
    </div>
    <div>
        <label class="form-label">Category</label>
        <input type="text" name="category" value="{{ old('category', $srv?->category) }}" class="form-input" placeholder="e.g. Maritime Consulting">
    </div>
    <div class="span-2">
        <label class="form-label">Short Description</label>
        <textarea name="short_description" rows="2" class="form-input">{{ old('short_description', $srv?->short_description) }}</textarea>
    </div>
    <div class="span-2">
        <label class="form-label">Full Description</label>
        <textarea name="description" rows="4" class="form-input">{{ old('description', $srv?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Upload Gambar</label>
        @if($srv?->image)
            <div style="margin-bottom: 8px;">
                <img src="{{ str_starts_with($srv->image, 'http') || str_starts_with($srv->image, 'assets') ? asset($srv->image) : Storage::url($srv->image) }}" alt="Current" style="height: 60px; border-radius: 8px; border: 1px solid var(--border-glass);">
            </div>
        @endif
        <input type="file" name="image" accept="image/*" style="color: var(--text-muted); font-size: 13px;">
    </div>
    <div>
        <label class="form-label">Status</label>
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; margin-top: 8px;">
            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $srv?->is_active ?? true) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
            <span style="font-size: 14px; color: var(--text-muted);">Active (tampil di website)</span>
        </label>
    </div>
</div>

<!-- Features Section -->
<div style="margin-top: 28px;">
    <div class="section-divider">
        <label class="form-label" style="margin-bottom: 0;">Fitur / Keunggulan</label>
        <button type="button" onclick="addFeature()" class="btn-add-row">+ Tambah Fitur</button>
    </div>
    <div id="features-container">
        @php
            $features = [];
            if (old('feature_title')) {
                foreach (old('feature_title', []) as $i => $title) {
                    $features[] = [
                        'title' => $title,
                        'desc' => old('feature_desc')[$i] ?? '',
                        'icon' => old('feature_icon')[$i] ?? 'activity'
                    ];
                }
            } else {
                $raw = $srv?->features ?? [];
                $features = is_string($raw) ? (json_decode($raw, true) ?? []) : $raw;
            }
            if (empty($features)) $features = [['title' => '', 'desc' => '', 'icon' => 'activity']];
        @endphp
        @foreach($features as $feat)
            @php
                $fIcon = $feat['icon'] ?? 'activity';
                $currentSvg = $iconsList[$fIcon][1] ?? $iconsList['activity'][1];
            @endphp
            <div class="dynamic-row" style="display: grid; grid-template-columns: auto 1fr 2fr auto; gap: 12px; align-items: center; margin-bottom: 10px;">
                <details class="icon-dropdown">
                    <summary class="selected-icon-preview" title="Pilih Icon">
                        {!! $currentSvg !!}
                    </summary>
                    <div class="icon-dropdown-menu">
                        <input type="hidden" name="feature_icon[]" class="icon-input" value="{{ $fIcon }}">
                        @foreach($iconsList as $iKey => $iData)
                            <button type="button" onclick="selectDropdownIcon(this, '{{ $iKey }}')" class="icon-option {{ $fIcon === $iKey ? 'active' : '' }}" title="{{ $iData[0] }}">
                                {!! $iData[1] !!}
                            </button>
                        @endforeach
                    </div>
                </details>
                <input type="text" name="feature_title[]" value="{{ $feat['title'] ?? '' }}" placeholder="Judul Fitur" class="form-input">
                <input type="text" name="feature_desc[]" value="{{ $feat['desc'] ?? '' }}" placeholder="Deskripsi Fitur" class="form-input">
                <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
            </div>
        @endforeach
    </div>
</div>

<script>
// Click outside to close details dropdown
document.addEventListener('click', function(event) {
    const dropdowns = document.querySelectorAll('.icon-dropdown[open]');
    dropdowns.forEach(dropdown => {
        if (!dropdown.contains(event.target)) {
            dropdown.removeAttribute('open');
        }
    });
});

function selectDropdownIcon(btn, key) {
    const details = btn.closest('.icon-dropdown');
    details.querySelector('.icon-input').value = key;
    details.querySelector('.selected-icon-preview').innerHTML = btn.innerHTML;
    details.querySelectorAll('.icon-option').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    details.removeAttribute('open');
}

function addFeature() {
    const row = document.createElement('div');
    row.className = 'dynamic-row';
    row.style = 'display: grid; grid-template-columns: auto 1fr 2fr auto; gap: 12px; align-items: center; margin-bottom: 10px;';
    row.innerHTML = `
        <details class="icon-dropdown">
            <summary class="selected-icon-preview" title="Pilih Icon">
                {!! $iconsList['activity'][1] !!}
            </summary>
            <div class="icon-dropdown-menu">
                <input type="hidden" name="feature_icon[]" class="icon-input" value="activity">
                @foreach($iconsList as $iKey => $iData)
                    <button type="button" onclick="selectDropdownIcon(this, '${iKey}')" class="icon-option ${iKey === 'activity' ? 'active' : ''}" title="{{ $iData[0] }}">
                        {!! $iData[1] !!}
                    </button>
                @endforeach
            </div>
        </details>
        <input type="text" name="feature_title[]" placeholder="Judul Fitur" class="form-input">
        <input type="text" name="feature_desc[]" placeholder="Deskripsi Fitur" class="form-input">
        <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
    `;
    document.getElementById('features-container').appendChild(row);
}
</script>
