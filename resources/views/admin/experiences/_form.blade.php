@php $exp = $experience ?? null; @endphp

@if($errors->any())
    <div style="background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); color: #fca5a5; padding: 12px 16px; border-radius: 10px; margin-bottom: 20px; font-size: 13px;">
        <ul style="margin: 0; padding-left: 16px;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
    <div>
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $exp?->title) }}" class="form-input" required>
    </div>
    <div>
        <label class="form-label">Company *</label>
        <input type="text" name="company" value="{{ old('company', $exp?->company) }}" class="form-input" required>
    </div>
    <div>
        <label class="form-label">Year *</label>
        <input type="text" name="year" value="{{ old('year', $exp?->year) }}" class="form-input" placeholder="e.g. 2022 - Present" required>
    </div>
    <div>
        <label class="form-label">Category</label>
        <input type="text" name="category" value="{{ old('category', $exp?->category) }}" class="form-input" placeholder="e.g. Maritime">
    </div>
    <div>
        <label class="form-label">Color Scheme</label>
        <select name="color_scheme" class="form-input">
            <option value="style-navy" {{ old('color_scheme', $exp?->color_scheme) === 'style-navy' ? 'selected' : '' }}>Navy</option>
            <option value="style-orange" {{ old('color_scheme', $exp?->color_scheme) === 'style-orange' ? 'selected' : '' }}>Orange</option>
        </select>
    </div>
    <div>
        <label class="form-label">Order Position</label>
        <input type="number" name="order_position" value="{{ old('order_position', $exp?->order_position ?? 0) }}" class="form-input">
    </div>
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Description</label>
        <textarea name="description" rows="4" class="form-input">{{ old('description', $exp?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Status</label>
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; margin-top: 8px;">
            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $exp?->is_active ?? true) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
            <span style="font-size: 14px; color: var(--text-muted);">Active (tampil di website)</span>
        </label>
    </div>
</div>

<style>
.form-label { display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
.form-input { width: 100%; background: rgba(255,255,255,0.04); border: 1px solid var(--border-glass); border-radius: 10px; padding: 11px 14px; color: var(--text-white); font-family: var(--font-body); font-size: 14px; outline: none; transition: border-color 0.2s; }
.form-input:focus { border-color: var(--accent-orange); }
.form-input option { background: #0a1124; }
textarea.form-input { resize: vertical; }
</style>
