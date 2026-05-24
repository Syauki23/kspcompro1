@php $pod = $podcast ?? null; @endphp

@if($errors->any())
    <div style="background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); color: #fca5a5; padding: 12px 16px; border-radius: 10px; margin-bottom: 20px; font-size: 13px;">
        <ul style="margin: 0; padding-left: 16px;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $pod?->title) }}" class="form-input" required>
    </div>
    <div>
        <label class="form-label">Episode Number</label>
        <input type="number" name="episode_number" value="{{ old('episode_number', $pod?->episode_number) }}" class="form-input">
    </div>
    <div>
        <label class="form-label">Duration</label>
        <input type="text" name="duration" value="{{ old('duration', $pod?->duration) }}" class="form-input" placeholder="e.g. 32:45">
    </div>
    <div>
        <label class="form-label">Publish Date</label>
        <input type="date" name="publish_date" value="{{ old('publish_date', $pod?->publish_date) }}" class="form-input">
    </div>
    <div>
        <label class="form-label">Category</label>
        <input type="text" name="category" value="{{ old('category', $pod?->category) }}" class="form-input" placeholder="e.g. Navigating Through Maritime">
    </div>
    <div>
        <label class="form-label">YouTube Video ID</label>
        <input type="text" name="youtube_id" value="{{ old('youtube_id', $pod?->youtube_id) }}" class="form-input" placeholder="e.g. dQw4w9WgXcQ">
        <p style="font-size: 11px; color: var(--text-dim); margin-top: 4px;">Hanya ID-nya saja, bukan full URL</p>
    </div>
    <div>
        <label class="form-label">Spotify URL</label>
        <input type="url" name="spotify_url" value="{{ old('spotify_url', $pod?->spotify_url) }}" class="form-input" placeholder="https://open.spotify.com/...">
    </div>
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Description</label>
        <textarea name="description" rows="3" class="form-input">{{ old('description', $pod?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Upload Thumbnail</label>
        @if($pod?->image)
            <div style="margin-bottom: 8px;">
                <img src="{{ str_starts_with($pod->image, 'http') ? $pod->image : asset($pod->image) }}" alt="Current" style="height: 60px; border-radius: 8px; border: 1px solid var(--border-glass);">
            </div>
        @endif
        <input type="file" name="image" accept="image/*" style="color: var(--text-muted); font-size: 13px;">
    </div>
    <div>
        <label class="form-label">Options</label>
        <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 8px;">
            <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $pod?->is_featured) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
                <span style="font-size: 14px; color: var(--text-muted);">Featured Episode (tampil di hero)</span>
            </label>
            <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $pod?->is_active ?? true) ? 'checked' : '' }} style="width: 16px; height: 16px; accent-color: var(--accent-orange);">
                <span style="font-size: 14px; color: var(--text-muted);">Active (tampil di website)</span>
            </label>
        </div>
    </div>
</div>

<style>
.form-label { display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px; }
.form-input { width: 100%; background: rgba(255,255,255,0.04); border: 1px solid var(--border-glass); border-radius: 10px; padding: 11px 14px; color: var(--text-white); font-family: var(--font-body); font-size: 14px; outline: none; transition: border-color 0.2s; }
.form-input:focus { border-color: var(--accent-orange); }
textarea.form-input { resize: vertical; }
input[type="date"].form-input::-webkit-calendar-picker-indicator { filter: invert(1); }
</style>
