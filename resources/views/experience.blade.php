@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-experience'])

@section('title', 'Experience | KSP Consulting')

@section('content')
<section class="exp-hero-section">
  <div class="exp-hero-bg">
    <img src="{{ isset($settings['exp_banner_image']) ? (str_starts_with($settings['exp_banner_image'], 'http') || str_starts_with($settings['exp_banner_image'], 'assets') ? asset($settings['exp_banner_image']) : Storage::url($settings['exp_banner_image'])) : asset('assets/experient.jpg') }}" alt="{{ $settings['exp_title'] ?? 'Strategic Solutions for Maritime Excellence' }}">
  </div>
  <div class="exp-hero-overlay"></div>
  <div class="exp-hero-container">
    <div class="exp-hero-content">
      <span class="exp-subtitle">{{ $settings['exp_subtitle'] ?? 'OUR EXPERIENCE' }}</span>
      <h1 class="exp-title">
        @php
            $expTitle = $settings['exp_title'] ?? 'Our';
            if ($expTitle === 'Our Experiences') $expTitle = 'Our';
        @endphp
        {{ $expTitle }}
        <span class="exp-title-accent">{{ $settings['exp_title_accent'] ?? 'Experiences' }}</span>
      </h1>
      <div class="exp-title-decor"></div>
      <p class="exp-desc">
        {!! nl2br(e($settings['exp_desc'] ?? "Our team has contributed to multiple maritime\nconsulting, assessment, operational improvement,\nand safety projects across industries.")) !!}
      </p>
    </div>
  </div>
</section>

<section class="exp-timeline-section">
  <div class="exp-cards-grid">
    @php
      $frontendIcons = [
          'users' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
          'globe' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
          'trending-up' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
          'refresh' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>',
          'link' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
          'star' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></polygon></svg>',
          'heart' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
          'shield' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
          'layers' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
          'award' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>',
          'check-circle' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
          'anchor' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>',
          'compass' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>',
          'ship' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M12 10v4"/><path d="M12 2v3"/></svg>',
          'activity' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
          'file' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>'
      ];
    @endphp
    @forelse($experiences as $exp)
    <div class="exp-card">
      <div class="exp-card-icon {{ $exp->color_scheme ?? 'style-navy' }}">
        {!! $frontendIcons[$exp->icon] ?? $frontendIcons['file'] !!}
      </div>
      <div class="exp-card-title">{{ $exp->title }}</div>
      @if($exp->description)
      <div class="exp-card-bullets" style="margin-top: 8px; font-size: 13px; color: #64748b;">{{ $exp->description }}</div>
      @endif
    </div>
    @empty
    <p style="color: #64748b; text-align: center; grid-column: 1/-1;">Belum ada data experience.</p>
    @endforelse
  </div>

  <div class="exp-timeline-track">
    <div class="exp-timeline-line"></div>
    <div class="exp-timeline-nodes">
      @foreach($experiences as $i => $exp)
      <div class="exp-node-col"><div class="exp-dot {{ ($i % 2 === 0) ? 'dot-navy' : 'dot-orange' }}"></div></div>
      @endforeach
    </div>
  </div>
</section>

<section class="exp-stats-footer">
  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>{{ $settings['exp_stat_1_num'] ?? '15+' }}</h4>
      <p>{!! nl2br(e($settings['exp_stat_1_label'] ?? "Ship Management\nEntities Assessed")) !!}</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
    </div>
    <div class="exp-stat-info">
      <h4>{{ $settings['exp_stat_2_num'] ?? '30+' }}</h4>
      <p>{!! nl2br(e($settings['exp_stat_2_label'] ?? "Projects Completed\nSuccessfully")) !!}</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>{{ $settings['exp_stat_3_num'] ?? '8+' }}</h4>
      <p>{!! nl2br(e($settings['exp_stat_3_label'] ?? "Years of Consulting\nExperience")) !!}</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>{{ $settings['exp_stat_4_num'] ?? '100%' }}</h4>
      <p>{!! nl2br(e($settings['exp_stat_4_label'] ?? "Commitment to Safety,\nQuality & Integrity")) !!}</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>{{ $settings['exp_stat_5_num'] ?? 'Multiple' }}</h4>
      <p>{!! nl2br(e($settings['exp_stat_5_label'] ?? "Industries Served\nAcross Indonesia")) !!}</p>
    </div>
  </div>
</section>
@endsection
