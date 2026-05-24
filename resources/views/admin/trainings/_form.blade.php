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
        <textarea name="description" rows="4" class="form-input" required>{{ old('description', $tr?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Status</label>
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; margin-top: 8px;">
            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $tr?->is_active ?? true) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
            <span style="font-size: 14px; color: var(--text-muted);">Active (tampil di website)</span>
        </label>
    </div>
</div>
