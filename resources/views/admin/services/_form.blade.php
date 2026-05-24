@php $srv = $service ?? null; @endphp

@if($errors->any())
    <div style="background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); color: #fca5a5; padding: 12px 16px; border-radius: 10px; margin-bottom: 20px; font-size: 13px;">
        <ul style="margin: 0; padding-left: 16px;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
    <div>
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $srv?->title) }}" class="form-input" required>
    </div>
    <div>
        <label class="form-label">Category</label>
        <input type="text" name="category" value="{{ old('category', $srv?->category) }}" class="form-input" placeholder="e.g. Maritime Consulting">
    </div>
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Short Description</label>
        <textarea name="short_description" rows="2" class="form-input">{{ old('short_description', $srv?->short_description) }}</textarea>
    </div>
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Full Description</label>
        <textarea name="description" rows="4" class="form-input">{{ old('description', $srv?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Upload Gambar</label>
        @if($srv?->image)
            <div style="margin-bottom: 8px;">
                <img src="{{ str_starts_with($srv->image, 'http') ? $srv->image : asset($srv->image) }}" alt="Current" style="height: 60px; border-radius: 8px; border: 1px solid var(--border-glass);">
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
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
        <label class="form-label" style="margin-bottom: 0;">Features / Keunggulan</label>
        <button type="button" onclick="addFeature()" style="background: rgba(249,115,22,0.15); color: var(--accent-orange); border: 1px solid rgba(249,115,22,0.3); padding: 6px 14px; border-radius: 8px; font-size: 12px; cursor: pointer; font-family: var(--font-body);">+ Tambah Feature</button>
    </div>
    <div id="features-container">
        @php
            $features = [];
            if (old('feature_title')) {
                $titles = old('feature_title', []);
                $descs = old('feature_desc', []);
                foreach ($titles as $i => $title) {
                    $features[] = [
                        'title' => $title,
                        'desc' => $descs[$i] ?? ''
                    ];
                }
            } else {
                $features = $srv?->features ?? [];
                if (is_string($features)) {
                    $decoded = json_decode($features, true);
                    $features = is_array($decoded) ? $decoded : [];
                }
            }
        @endphp
        @if(is_array($features) && count($features) > 0)
            @foreach($features as $i => $feat)
                <div class="feature-row" style="display: grid; grid-template-columns: 1fr 2fr auto; gap: 12px; margin-bottom: 12px; align-items: start;">
                    <input type="text" name="feature_title[]" value="{{ $feat['title'] ?? '' }}" placeholder="Feature Title" class="form-input">
                    <input type="text" name="feature_desc[]" value="{{ $feat['desc'] ?? '' }}" placeholder="Feature Description" class="form-input">
                    <button type="button" onclick="this.closest('.feature-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1;">×</button>
                </div>
            @endforeach
        @else
            <div class="feature-row" style="display: grid; grid-template-columns: 1fr 2fr auto; gap: 12px; margin-bottom: 12px; align-items: start;">
                <input type="text" name="feature_title[]" value="{{ old('feature_title.0') }}" placeholder="Feature Title" class="form-input">
                <input type="text" name="feature_desc[]" value="{{ old('feature_desc.0') }}" placeholder="Feature Description" class="form-input">
                <button type="button" onclick="this.closest('.feature-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1;">×</button>
            </div>
        @endif
    </div>
</div>

<style>
.form-label { display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
.form-input { width: 100%; background: rgba(255,255,255,0.04); border: 1px solid var(--border-glass); border-radius: 10px; padding: 11px 14px; color: var(--text-white); font-family: var(--font-body); font-size: 14px; outline: none; transition: border-color 0.2s; }
.form-input:focus { border-color: var(--accent-orange); }
textarea.form-input { resize: vertical; }
</style>

<script>
function addFeature() {
    const container = document.getElementById('features-container');
    const row = document.createElement('div');
    row.className = 'feature-row';
    row.style.cssText = 'display: grid; grid-template-columns: 1fr 2fr auto; gap: 12px; margin-bottom: 12px; align-items: start;';
    row.innerHTML = `
        <input type="text" name="feature_title[]" placeholder="Feature Title" class="form-input">
        <input type="text" name="feature_desc[]" placeholder="Feature Description" class="form-input">
        <button type="button" onclick="this.closest('.feature-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1;">×</button>
    `;
    container.appendChild(row);
}
</script>
