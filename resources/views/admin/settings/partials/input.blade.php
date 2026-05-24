<div>
    <label style="display: block; font-size: 13px; font-weight: 600; color: var(--text-muted); margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px;">
        {{ $setting->label }}
        <span style="font-size: 11px; color: var(--text-dim); font-weight: 400; text-transform: none; margin-left: 6px;">({{ $setting->key }})</span>
    </label>

    @if($setting->type === 'textarea')
        <textarea
            name="{{ $setting->key }}"
            rows="3"
            class="form-input"
            style="resize: vertical;"
        >{{ $setting->value }}</textarea>
    @elseif($setting->type === 'image')
        <div style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
            @if($setting->value)
                <img src="{{ str_starts_with($setting->value, 'http') ? $setting->value : Storage::url($setting->value) }}" alt="Current" style="height: 60px; width: auto; border-radius: 8px; border: 1px solid var(--border-glass);">
            @endif
            <input type="file" name="images[{{ $setting->key }}]" accept="image/*"
                style="color: var(--text-muted); font-size: 13px;">
        </div>
    @else
        <input
            type="text"
            name="{{ $setting->key }}"
            value="{{ $setting->value }}"
            class="form-input"
        >
    @endif

    @error($setting->key)
        <p style="color: var(--accent-red); font-size: 12px; margin-top: 4px;">{{ $message }}</p>
    @enderror
</div>
