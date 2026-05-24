@php $val = $philosophy ?? null; @endphp

@if($errors->any())
    <div style="background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.3); color: #fca5a5; padding: 12px 16px; border-radius: 10px; margin-bottom: 20px; font-size: 13px;">
        <ul style="margin: 0; padding-left: 16px;">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
    <div>
        <label class="form-label">Letter (1 karakter) *</label>
        <input type="text" name="letter" value="{{ old('letter', $val?->letter) }}" class="form-input" maxlength="1" required style="font-size: 24px; font-weight: 800; text-align: center; text-transform: uppercase;">
    </div>
    <div>
        <label class="form-label">Index (urutan 0-10) *</label>
        <input type="number" name="index" value="{{ old('index', $val?->index ?? $nextIndex ?? 0) }}" class="form-input" min="0" max="20" required>
    </div>
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Title *</label>
        <input type="text" name="title" value="{{ old('title', $val?->title) }}" class="form-input" required>
    </div>
    <div style="grid-column: 1 / -1;">
        <label class="form-label">Description *</label>
        <textarea name="description" rows="4" class="form-input" required>{{ old('description', $val?->description) }}</textarea>
    </div>
    <div>
        <label class="form-label">Icon (nama icon)</label>
        <input type="text" name="icon" value="{{ old('icon', $val?->icon) }}" class="form-input" placeholder="e.g. users, globe, star">
    </div>
</div>

<!-- Features Section -->
<div style="margin-top: 28px;">
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px;">
        <label class="form-label" style="margin-bottom: 0;">Features / Poin Utama</label>
        <button type="button" onclick="addFeature()" style="background: rgba(249,115,22,0.15); color: var(--accent-orange); border: 1px solid rgba(249,115,22,0.3); padding: 6px 14px; border-radius: 8px; font-size: 12px; cursor: pointer; font-family: var(--font-body);">+ Tambah</button>
    </div>
    <div id="features-container">
        @php
            $features = old('features') ?? ($val?->features ?? []);
            if (is_string($features)) {
                $decoded = json_decode($features, true);
                $features = is_array($decoded) ? $decoded : [$features];
            }
        @endphp
        @if(is_array($features) && count($features) > 0)
            @foreach($features as $feat)
                <div class="feat-row" style="display: flex; gap: 12px; margin-bottom: 10px; align-items: center;">
                    <input type="text" name="features[]" value="{{ $feat }}" placeholder="Feature / poin" class="form-input">
                    <button type="button" onclick="this.closest('.feat-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1; flex-shrink: 0;">×</button>
                </div>
            @endforeach
        @else
            <div class="feat-row" style="display: flex; gap: 12px; margin-bottom: 10px; align-items: center;">
                <input type="text" name="features[]" placeholder="Feature / poin" class="form-input">
                <button type="button" onclick="this.closest('.feat-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1; flex-shrink: 0;">×</button>
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
    row.className = 'feat-row';
    row.style.cssText = 'display: flex; gap: 12px; margin-bottom: 10px; align-items: center;';
    row.innerHTML = `
        <input type="text" name="features[]" placeholder="Feature / poin" class="form-input">
        <button type="button" onclick="this.closest('.feat-row').remove()" style="background: rgba(239,68,68,0.15); color: #fca5a5; border: 1px solid rgba(239,68,68,0.3); padding: 11px 14px; border-radius: 10px; cursor: pointer; font-size: 16px; line-height: 1; flex-shrink: 0;">×</button>
    `;
    container.appendChild(row);
}
</script>
