@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-services'])

@section('title', 'Services | KSP Consulting')

@section('content')
<!-- SERVICES HERO BANNER -->
<section class="services-hero-section">
  <div class="services-hero-bg">
    @if(isset($settings['services_banner_image']) && $settings['services_banner_image'])
      <img src="{{ str_starts_with($settings['services_banner_image'], 'http') || str_starts_with($settings['services_banner_image'], 'assets') ? asset($settings['services_banner_image']) : Storage::url($settings['services_banner_image']) }}" alt="{{ $settings['services_hero_title_first'] ?? '' }} {{ $settings['services_hero_title_second'] ?? '' }}">
    @else
      <img src="{{ asset('assets/www.jpg') }}" alt="Solutions that drive operational excellence">
    @endif
  </div>
  <div class="services-hero-overlay"></div>
  <div class="services-hero-container">
    <div class="services-hero-content">
      <span class="services-subtitle">{{ $settings['services_hero_subtitle'] ?? 'OUR SERVICES' }}</span>
      <h1 class="services-title">
        {!! nl2br(e($settings['services_hero_title_first'] ?? 'Solutions that drive')) !!}<br>
        <span style="color: var(--primary-orange);">{!! nl2br(e($settings['services_hero_title_second'] ?? 'operational excellence')) !!}</span>
      </h1>
      <div class="services-title-decor"></div>
      <p class="services-desc">
        {{ $settings['services_hero_description'] ?? 'KSP Consulting provides integrated consulting services to help maritime and industrial businesses overcome challenges and achieve sustainable growth through practical and measurable solutions.' }}
      </p>
    </div>
  </div>
</section>

<!-- SERVICES SECTION -->
<section id="services" class="services-section" role="region" aria-label="Our Services">
  <div class="services-container">
    <div class="services-grid">
      @forelse($services as $service)
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
          </div>
        </div>
        <h3 class="card-title">{{ $service->title }}</h3>
        <p class="card-desc">{{ $service->short_description ?? Str::limit($service->description, 120) }}</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-service-{{ $service->id }}">
            Learn more <span class="arrow">&rarr;</span>
          </button>
        </div>
      </div>
      @empty
      <p style="text-align: center; color: #64748b; grid-column: 1/-1;">Belum ada data service.</p>
      @endforelse
    </div>

    <!-- Stats Banner -->
    <div class="services-stats-banner">
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_1_value'] ?? '15+' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_1_label'] ?? "Ship Management\nEntities Assessed")) !!}</p>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_2_value'] ?? 'Since 2017' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_2_label'] ?? "Maritime Assessment &\nConsulting Experience")) !!}</p>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_3_value'] ?? 'Multiple' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_3_label'] ?? "TMSA Gap Assessments &\nImplementations")) !!}</p>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_4_value'] ?? 'Trusted' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_4_label'] ?? "By Leading Maritime &\nIndustrial Organizations")) !!}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DYNAMIC SERVICE MODALS -->
@foreach($services as $service)
<div class="service-modal-overlay" id="modal-service-{{ $service->id }}">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      @if($service->image)
        <img src="{{ str_starts_with($service->image, 'http') || str_starts_with($service->image, 'assets') ? asset($service->image) : Storage::url($service->image) }}" alt="{{ $service->title }}">
      @else
        <img src="{{ asset('assets/bg-ship.jpg') }}" alt="{{ $service->title }}">
      @endif
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        </div>
      </div>
      <h2 class="modal-title">{{ $service->title }}</h2>
      <p class="modal-desc">{{ $service->description ?? $service->short_description }}</p>

      @php
        $features = $service->features;
        if (is_string($features)) {
            $decoded = json_decode($features, true);
            $features = is_array($decoded) ? $decoded : [$features];
        }
      @endphp
      @if(is_array($features) && count($features) > 0)
      <hr class="modal-divider">
      <ul class="modal-features-list">
        @foreach($features as $feat)
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
          <div class="feat-text">
            <h4>{{ is_array($feat) ? ($feat['title'] ?? '') : $feat }}</h4>
            @if(is_array($feat) && isset($feat['desc']))<p>{{ $feat['desc'] }}</p>@endif
          </div>
        </li>
        @endforeach
      </ul>
      @endif

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="{{ $service->title }}">
          Inquire for {{ $service->title }}
        </button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
