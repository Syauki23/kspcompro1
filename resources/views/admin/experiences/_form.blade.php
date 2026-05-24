@php $exp = $experience ?? null; @endphp

@if($errors->any())
    <div class="form-error-box">
        <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="form-grid-2">
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
    <div class="span-2">
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
