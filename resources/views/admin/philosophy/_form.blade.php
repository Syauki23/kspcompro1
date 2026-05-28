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
    <div>
        <label class="form-label">Icon (nama icon)</label>
        <input type="text" name="icon" value="{{ old('icon', $val?->icon) }}" class="form-input" placeholder="e.g. users, globe, star">
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
