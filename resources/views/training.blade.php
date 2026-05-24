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
    @forelse($trainings as $training)
    <div class="train-topic-card">
      <div class="train-topic-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
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
    <div class="train-events-grid">
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
            <span class="te-mo">{{ $event->event_date ? strtoupper($event->event_date->format('M')) : '' }}</span>
            <span class="te-mo">{{ $event->event_date ? $event->event_date->format('Y') : '' }}</span>
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
    <button class="train-events-next" aria-label="Next Events">
      <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>
</section>
@endif
@endsection
