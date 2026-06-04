@php
    $icons = [
        'anchor' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/><line x1="8" y1="12" x2="16" y2="12"/></svg>',
        
        'helm' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="7"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="5"/><line x1="12" y1="19" x2="12" y2="22"/><line x1="2" y1="12" x2="5" y2="12"/><line x1="19" y1="12" x2="22" y2="12"/><line x1="4.93" y1="4.93" x2="7.05" y2="7.05"/><line x1="16.95" y1="16.95" x2="19.07" y2="19.07"/><line x1="4.93" y1="19.07" x2="7.05" y2="16.95"/><line x1="16.95" y1="7.05" x2="19.07" y2="4.93"/></svg>',
        
        'lighthouse' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 22h8"/><path d="M9 22L10 10h4l1 12"/><path d="M8 10h8"/><path d="M10 10V6h4v4"/><path d="M12 6L10 3h4l-2 3z"/><line x1="15" y1="7" x2="19" y2="5"/><line x1="9" y1="7" x2="5" y2="5"/></svg>',
        
        'globe' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M2 16h20M2 8h20"/></svg>',
        
        'ship' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="M4 20v-4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4"/><path d="M8 14V8a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v6"/><path d="M12 6V3"/><path d="M10 3h4"/><path d="M6 17h12"/></svg>',
        
        'lifebuoy' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg>',
        
        'compass' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/><circle cx="12" cy="12" r="2"/></svg>',
        
        'target' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
        
        'star' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
        
        'shield' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    ];
@endphp

<div class="icon-picker-container" style="background: rgba(255, 255, 255, 0.02); border: 1px solid var(--border-glass); border-radius: 12px; padding: 16px;">
    <input type="hidden" name="{{ $setting->key }}" id="input-{{ $setting->key }}" value="{{ $setting->value }}">
    <div style="display: flex; flex-wrap: wrap; gap: 12px;" id="grid-{{ $setting->key }}">
        @foreach($icons as $key => $svg)
            <div class="icon-option {{ $setting->value === $key ? 'selected' : '' }}" 
                 data-key="{{ $key }}"
                 data-target="input-{{ $setting->key }}"
                 style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border: 2px solid {{ $setting->value === $key ? 'var(--accent-orange)' : 'transparent' }}; background: {{ $setting->value === $key ? 'rgba(234, 88, 12, 0.1)' : 'rgba(255,255,255,0.05)' }}; border-radius: 12px; cursor: pointer; transition: all 0.2s; color: {{ $setting->value === $key ? 'var(--accent-orange)' : 'var(--text-muted)' }};">
                {!! str_replace('<svg', '<svg width="24" height="24"', $svg) !!}
            </div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const grid = document.getElementById('grid-{{ $setting->key }}');
    if (!grid) return;
    
    const options = grid.querySelectorAll('.icon-option');
    options.forEach(option => {
        option.addEventListener('click', function() {
            // Deselect all
            options.forEach(opt => {
                opt.classList.remove('selected');
                opt.style.borderColor = 'transparent';
                opt.style.background = 'rgba(255,255,255,0.05)';
                opt.style.color = 'var(--text-muted)';
            });
            
            // Select current
            this.classList.add('selected');
            this.style.borderColor = 'var(--accent-orange)';
            this.style.background = 'rgba(234, 88, 12, 0.1)';
            this.style.color = 'var(--accent-orange)';
            
            // Update hidden input
            const targetId = this.getAttribute('data-target');
            document.getElementById(targetId).value = this.getAttribute('data-key');
        });
    });
});
</script>
