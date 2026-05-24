@php $tr = $training ?? null; @endphp

@if($errors->any())
    <div class="form-error-box">
        <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="form-grid-2">
    <div class="span-2">
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $tr?->title) }}" class="form-input" required>
    </div>
    <div class="span-2">
        <label class="form-label">Description *</label>
        <textarea name="description" rows="3" class="form-input" required>{{ old('description', $tr?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Duration</label>
        <input type="text" name="duration" value="{{ old('duration', $tr?->duration) }}" class="form-input" placeholder="e.g. 3 Days">
    </div>
    <div>
        <label class="form-label">Price</label>
        <input type="text" name="price" value="{{ old('price', $tr?->price) }}" class="form-input" placeholder="e.g. Contact Us">
    </div>
    <div>
        <label class="form-label">Upload Gambar</label>
        @if($tr?->image)
            <div style="margin-bottom: 8px;">
                <img src="{{ str_starts_with($tr->image, 'http') || str_starts_with($tr->image, 'assets') ? asset($tr->image) : Storage::url($tr->image) }}" alt="Current" style="height: 60px; border-radius: 8px; border: 1px solid var(--border-glass);">
            </div>
        @endif
        <input type="file" name="image" accept="image/*" style="color: var(--text-muted); font-size: 13px;">
    </div>
    <div>
        <label class="form-label">Status</label>
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; margin-top: 8px;">
            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $tr?->is_active ?? true) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
            <span style="font-size: 14px; color: var(--text-muted);">Active (tampil di website)</span>
        </label>
    </div>
</div>

<!-- Syllabus Section -->
<div style="margin-top: 28px;">
    <div class="section-divider">
        <label class="form-label" style="margin-bottom: 0;">Syllabus / Materi</label>
        <button type="button" onclick="addSyllabus()" class="btn-add-row">+ Tambah Item</button>
    </div>
    <div id="syllabus-container">
        @php
            $syllabusItems = old('syllabus') ?? (is_string($tr?->syllabus) ? json_decode($tr->syllabus, true) : ($tr?->syllabus ?? []));
            if (empty($syllabusItems)) $syllabusItems = [''];
        @endphp
        @foreach($syllabusItems as $item)
            <div class="dynamic-row">
                <input type="text" name="syllabus[]" value="{{ $item }}" placeholder="Materi / topik" class="form-input">
                <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
            </div>
        @endforeach
    </div>
</div>

<script>
function addSyllabus() {
    const row = document.createElement('div');
    row.className = 'dynamic-row';
    row.innerHTML = `
        <input type="text" name="syllabus[]" placeholder="Materi / topik" class="form-input">
        <button type="button" onclick="this.closest('.dynamic-row').remove()" class="btn-remove-row">×</button>
    `;
    document.getElementById('syllabus-container').appendChild(row);
}
</script>
