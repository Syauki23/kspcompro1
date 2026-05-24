@php $srv = $service ?? null; @endphp

@if($errors->any())
    <div class="form-error-box">
        <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="form-grid-2">
    <div>
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $srv?->title) }}" class="form-input" required>
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
        <label class="form-label" style="margin-bottom: 0;">Features / Keunggulan</label>
        <button type="button" onclick="addFeature()" class="btn-add-row">+ Tambah Feature</button>
    </div>
    <div id="features-container">
        @php
            $features = [];
            if (old('feature_title')) {
                foreach (old('feature_title', []) as $i => $title) {
                    $features[] = ['title' => $title, 'desc' => old('feature_desc')[$i] ?? ''];
                }
            } else {
                $raw = $srv?->features ?? [];
                $features = is_string($raw) ? (json_decode($raw, true) ?? []) : $raw;
            }
            if (empty($features)) $features = [['title' => '', 'desc' => '']];
        @endphp
        @foreach($features as $feat)
            <div class="dynamic-row feature-grid-header">
                <input type="text" name="feature_title[]" value="{{ $feat['title'] ?? '' }}" placeholder="Feature Title" class="form-input">
                <input type="text" name="feature_desc[]" value="{{ $feat['desc'] ?? '' }}" placeholder="Feature Description" class="form-input">
                <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
            </div>
        @endforeach
    </div>
</div>

<script>
function addFeature() {
    const row = document.createElement('div');
    row.className = 'dynamic-row feature-grid-header';
    row.innerHTML = `
        <input type="text" name="feature_title[]" placeholder="Feature Title" class="form-input">
        <input type="text" name="feature_desc[]" placeholder="Feature Description" class="form-input">
        <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
    `;
    document.getElementById('features-container').appendChild(row);
}
</script>
