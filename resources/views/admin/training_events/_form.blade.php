@php $ev = $trainingEvent ?? null; @endphp

@if($errors->any())
    <div class="form-error-box">
        <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="form-grid-2">
    <div class="span-2">
        <label class="form-label">Title Event *</label>
        <input type="text" name="title" value="{{ old('title', $ev?->title) }}" class="form-input" required placeholder="e.g. TMSA & SIRE 2.0 Coaching Program">
    </div>
    <div>
        <label class="form-label">Tanggal Event</label>
        <input type="date" name="event_date" value="{{ old('event_date', $ev?->event_date?->format('Y-m-d')) }}" class="form-input">
    </div>
    <div>
        <label class="form-label">Lokasi</label>
        <input type="text" name="location" value="{{ old('location', $ev?->location) }}" class="form-input" placeholder="e.g. Jakarta, Indonesia">
    </div>
    <div>
        <label class="form-label">Foto Event</label>
        @if($ev?->image)
            <div style="margin-bottom: 8px;">
                <img src="{{ str_starts_with($ev->image, 'http') ? $ev->image : Storage::url($ev->image) }}" alt="Current" style="height: 80px; width: 130px; object-fit: cover; border-radius: 8px; border: 1px solid var(--border-glass);">
            </div>
        @endif
        <input type="file" name="image" accept="image/*" style="color: var(--text-muted); font-size: 13px;">
        <p style="font-size: 11px; color: var(--text-dim); margin-top: 4px;">Bisa juga pakai URL gambar dari Unsplash, dll.</p>
    </div>
    <div>
        <label class="form-label">URL Gambar (opsional, jika tidak upload)</label>
        <input type="text" name="image_url" value="" class="form-input" placeholder="https://images.unsplash.com/...">
        <p style="font-size: 11px; color: var(--text-dim); margin-top: 4px;">Jika diisi, URL ini akan dipakai (upload diabaikan)</p>
    </div>
    <div>
        <label class="form-label">Order / Urutan</label>
        <input type="number" name="order_position" value="{{ old('order_position', $ev?->order_position ?? 0) }}" class="form-input">
    </div>
    <div>
        <label class="form-label">Status</label>
        <label style="display: flex; align-items: center; gap: 8px; cursor: pointer; margin-top: 8px;">
            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $ev?->is_active ?? true) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
            <span style="font-size: 14px; color: var(--text-muted);">Active (tampil di website)</span>
        </label>
    </div>
</div>
