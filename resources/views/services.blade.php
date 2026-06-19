@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-services'])

@section('title', 'Maritime Services & Solutions | KSP Consulting')
@section('meta_description', 'Explore KSP Consulting services including maritime consulting, risk assessment, HR assessment, and strategic operational implementations.')
@section('meta_keywords', 'Maritime Services, Maritime Consulting, Risk Assessment, HR Assessment, Operational Implementations, Ship Management')

@section('breadcrumb_schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
    {"@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/services') }}"}
  ]
}
</script>
@endsection

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
    <div class="services-hero-content reveal fade-in-left">
      <span class="services-subtitle">{{ $settings['services_hero_subtitle'] ?? 'OUR SERVICES' }}</span>
      <h1 class="services-title">
        {!! nl2br(e($settings['services_hero_title_first'] ?? 'Solutions that drive')) !!}<br>
        <span class="services-title-accent">{!! nl2br(e($settings['services_hero_title_second'] ?? 'operational excellence')) !!}</span>
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
    <div class="services-grid stagger-container">
      @php 
        $frontendIcons = [
            'briefcase' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>',
            'users' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
            'globe' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
            'trending-up' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
            'refresh' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>',
            'link' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
            'star' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
            'heart' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
            'shield' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
            'layers' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
            'award' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>',
            'check-circle' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
            'anchor' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>',
            'compass' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>',
            'ship' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M12 10v4"/><path d="M12 2v3"/></svg>',
            'activity' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>',
            'file-text' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
            'settings' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>',
            'search' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            'clock' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>',
            'alert-triangle' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>',
            'book-open' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>',
            'map' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21"></polygon><line x1="9" y1="3" x2="9" y2="18"></line><line x1="15" y1="6" x2="15" y2="21"></line></svg>',
            'cpu' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="15" x2="23" y2="15"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="15" x2="4" y2="15"></line></svg>',
            'bar-chart-2' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>',
            'tool' => '<svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>'
        ];
      @endphp
      @forelse($services as $service)
      <div class="service-card reveal fade-in-up">
        <div class="card-top">
          <div class="card-icon">
            {!! $frontendIcons[$service->icon] ?? $frontendIcons['layers'] !!}
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
    <div class="services-stats-banner stagger-container">
      <div class="stat-item reveal fade-in-up">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_1_value'] ?? '15+' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_1_label'] ?? "Ship Management\nEntities Assessed")) !!}</p>
        </div>
      </div>
      <div class="stat-item reveal fade-in-up">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_2_value'] ?? 'Since 2017' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_2_label'] ?? "Maritime Assessment &\nConsulting Experience")) !!}</p>
        </div>
      </div>
      <div class="stat-item reveal fade-in-up">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></div>
        <div class="stat-text">
          <h4>{{ $settings['services_stat_3_value'] ?? 'Multiple' }}</h4>
          <p>{!! nl2br(e($settings['services_stat_3_label'] ?? "TMSA Gap Assessments &\nImplementations")) !!}</p>
        </div>
      </div>
      <div class="stat-item reveal fade-in-up">
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
        <div class="modal-icon-bg" style="color: var(--primary-orange);">
          {!! $frontendIcons[$service->icon] ?? $frontendIcons['layers'] !!}
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
          <div class="feat-icon" style="color: var(--primary-orange);">
            @php
              $featIcon = is_array($feat) ? ($feat['icon'] ?? 'activity') : 'activity';
              $svgContent = $frontendIcons[$featIcon] ?? $frontendIcons['activity'];
              $svgContent = str_replace(['width="24"', 'height="24"'], ['width="20"', 'height="20"'], $svgContent);
            @endphp
            {!! $svgContent !!}
          </div>
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
          Inquire Now
        </button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
