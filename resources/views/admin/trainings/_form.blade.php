@php $tr = $training ?? null; @endphp

@if($errors->any())
    <div style="background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); color: #fca5a5; padding: 12px 16px; border-radius: 10px; margin-bottom: 20px; font-size: 13px;">
        <ul style="margin: 0; padding-left: 16px;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $tr?->title) }}" class="form-input" required>
    </div>
    <div style="grid-column: 1 / -1;">
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
                <img src="{{ str_starts_with($tr->image, 'http') ? $tr->image : asset($tr->image) }}" alt="Current" style="height: 60px; border-radius: 8px; border: 1px solid var(--border-glass);">
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
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
        <label class="form-label" style="margin-bottom: 0;">Syllabus / Materi</label>
        <button type="button" onclick="addSyllabus()" style="background: rgba(249,115,22,0.15); color: var(--accent-orange); border: 1px solid rgba(249,115,22,0.3); padding: 6px 14px; border-radius: 8px; font-size: 12px; cursor: pointer; font-family: var(--font-body);">+ Tambah Item</button>
    </div>
    <div id="syllabus-container">
        @php
            $syllabusItems = old('syllabus') ?? (is_string($tr?->syllabus) ? json_decode($tr->syllabus, true) : ($tr?->syllabus ?? []));
        @endphp
        @if($syllabusItems && count($syllabusItems) > 0)
            @foreach($syllabusItems as $item)
                <div class="syllabus-row" style="display: flex; gap: 12px; margin-bottom: 10px; align-items: center;">
                    <input type="text" name="syllabus[]" value="{{ $item }}" placeholder="Materi / topik" class="form-input">
                    <button type="button" onclick="this.closest('.syllabus-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1; flex-shrink: 0;">×</button>
                </div>
            @endforeach
        @else
            <div class="syllabus-row" style="display: flex; gap: 12px; margin-bottom: 10px; align-items: center;">
                <input type="text" name="syllabus[]" placeholder="Materi / topik" class="form-input">
                <button type="button" onclick="this.closest('.syllabus-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1; flex-shrink: 0;">×</button>
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
function addSyllabus() {
    const container = document.getElementById('syllabus-container');
    const row = document.createElement('div');
    row.className = 'syllabus-row';
    row.style.cssText = 'display: flex; gap: 12px; margin-bottom: 10px; align-items: center;';
    row.innerHTML = `
        <input type="text" name="syllabus[]" placeholder="Materi / topik" class="form-input">
        <button type="button" onclick="this.closest('.syllabus-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1; flex-shrink: 0;">×</button>
    `;
    container.appendChild(row);
}
</script>
