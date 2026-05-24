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
      <h1 class="exp-title">{{ $settings['exp_title'] ?? 'Our Experiences' }}</h1>
      <div class="exp-title-decor"></div>
      <p class="exp-desc">
        {!! nl2br(e($settings['exp_desc'] ?? "Our team has contributed to multiple maritime\nconsulting, assessment, operational improvement,\nand safety projects across industries.")) !!}
      </p>
    </div>
  </div>
</section>

<section class="exp-timeline-section">
  <div class="exp-cards-grid">
    @forelse($experiences as $exp)
    <div class="exp-card">
      <div class="exp-card-icon {{ $exp->color_scheme ?? 'style-navy' }}">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
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
