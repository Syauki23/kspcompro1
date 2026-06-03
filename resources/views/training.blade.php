@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-training'])

@section('title', 'Training & Knowledge Sharing | KSP Consulting')

@section('content')
<header class="train-hero">
  <div class="train-hero-bg">
    @php
      $bannerImg = $settings['training_banner_image'] ?? '';
      $bannerSrc = $bannerImg
        ? (str_starts_with($bannerImg, 'http') ? $bannerImg : Storage::url($bannerImg))
        : asset('assets/www.jpg');
    @endphp
    <img src="{{ $bannerSrc }}" alt="Training Session Background">
    <div class="train-hero-overlay"></div>
  </div>
  
  <div class="train-hero-container">
    <div class="train-hero-content">
      <div class="train-subtitle-wrap">
        <span class="train-subtitle">{{ $settings['training_hero_subtitle'] ?? 'OUR TRAINING & KNOWLEDGE SHARING' }}</span>
        <div class="train-subtitle-line"></div>
      </div>
      <h1 class="train-title">
        {{ $settings['training_hero_title'] ?? 'Training &' }}<br>
        <span class="train-title-accent">{{ $settings['training_hero_title_accent'] ?? 'Knowledge Sharing' }}</span>
      </h1>
      <p class="train-desc">{{ $settings['training_hero_description'] ?? 'KSP Consulting actively contributes to industry development through workshops, coaching programs, technical training, and speaking engagements.' }}</p>
    </div>
  </div>

  <!-- Features Bottom Strip -->
  <div class="train-features-strip">
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      <div class="train-feature-text">
        <h4>{{ $settings['training_feature_1_title'] ?? 'Industry Experts' }}</h4>
        <p>{{ $settings['training_feature_1_desc'] ?? 'Delivered by practitioners' }}</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
      <div class="train-feature-text">
        <h4>{{ $settings['training_feature_2_title'] ?? 'Practical Learning' }}</h4>
        <p>{{ $settings['training_feature_2_desc'] ?? 'Real case studies & best practices' }}</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
      <div class="train-feature-text">
        <h4>{{ $settings['training_feature_3_title'] ?? 'Actionable Insights' }}</h4>
        <p>{{ $settings['training_feature_3_desc'] ?? 'Tools & strategies you can apply' }}</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      <div class="train-feature-text">
        <h4>{{ $settings['training_feature_4_title'] ?? 'Trusted Partner' }}</h4>
        <p>{{ $settings['training_feature_4_desc'] ?? 'Commitment to safety & quality' }}</p>
      </div>
    </div>
  </div>
</header>

<section class="train-topics-section">
  <div class="train-section-header">
    <div class="train-section-title-wrap">
      <span class="train-line"></span>
      <h2 class="train-section-title">{{ $settings['training_topics_title'] ?? 'Our Training & Workshop Topics' }}</h2>
      <span class="train-line"></span>
    </div>
    <p class="train-section-subtitle">{{ $settings['training_topics_subtitle'] ?? 'Comprehensive programs designed to enhance knowledge, build capability, and drive operational excellence.' }}</p>
  </div>

  <div class="train-topics-grid">
    @php
      $frontendIcons = [
          'briefcase' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>',
          'users' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
          'globe' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
          'trending-up' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>',
          'refresh' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>',
          'link' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>',
          'star' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
          'heart' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>',
          'shield' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
          'layers' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
          'award' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>',
          'check-circle' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
          'anchor' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="5" r="3"/><line x1="12" y1="22" x2="12" y2="8"/><path d="M5 12H2a10 10 0 0 0 20 0h-3"/></svg>',
          'compass' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>',
          'ship' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 2.6 0 2.4 2 5 2 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M12 10v4"/><path d="M12 2v3"/></svg>',
          'activity' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>'
      ];
    @endphp
    @forelse($trainings as $training)
    <div class="train-topic-card">
      <div class="train-topic-icon">
        {!! $frontendIcons[$training->icon] ?? $frontendIcons['briefcase'] !!}
      </div>
      <h3 class="train-topic-title">{{ $training->title }}</h3>
      <p class="train-topic-desc">{{ $training->description }}</p>
    </div>
    @empty
    <p style="text-align: center; color: #64748b; grid-column: 1/-1;">Belum ada data training.</p>
    @endforelse
  </div>
</section>

@if($events->count() > 0)
<section class="train-events-section">
  <div class="train-split-header">
    <h3>{{ $settings['training_events_title'] ?? 'Recent Workshop & Training Recap' }}</h3>
  </div>
  
  <div class="train-events-carousel-wrapper">
    <button class="train-events-prev" id="eventsPrev" aria-label="Previous Events">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    <div class="train-events-grid" id="eventsGrid">
      @foreach($events as $event)
      <div class="train-event-card">
        @php
          $imgSrc = $event->image
            ? (str_starts_with($event->image, 'http') ? $event->image : Storage::url($event->image))
            : 'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=400&q=80';
        @endphp
        <img src="{{ $imgSrc }}" alt="{{ $event->title }}" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">{{ $event->event_date ? $event->event_date->format('d') : '--' }}</span>
            <span class="te-mo">{{ $event->event_date ? strtoupper($event->event_date->format('M Y')) : '' }}</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">{{ $event->title }}</h4>
            @if($event->location)
            <p class="te-loc">
              <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
              {{ $event->location }}
            </p>
            @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <button class="train-events-next" id="eventsNext" aria-label="Next Events">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>
</section>
@endif
@endsection
