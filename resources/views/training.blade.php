@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-training'])

@section('title', 'Training & Knowledge Sharing | KSP Consulting')

@section('content')
<header class="train-hero">
  <div class="train-hero-bg">
    <img src="{{ asset('assets/www.jpg') }}" alt="Training Session Background">
    <div class="train-hero-overlay"></div>
  </div>
  
  <div class="train-hero-container">
    <div class="train-hero-content">
      <div class="train-subtitle-wrap">
        <span class="train-subtitle">OUR TRAINING & KNOWLEDGE SHARING</span>
        <div class="train-subtitle-line"></div>
      </div>
      <h1 class="train-title">Training &<br><span class="train-title-accent">Knowledge Sharing</span></h1>
      <p class="train-desc">KSP Consulting actively contributes to industry<br>development through workshops, coaching<br>programs, technical training, and speaking<br>engagements.</p>
    </div>
  </div>

  <!-- Features Bottom Strip -->
  <div class="train-features-strip">
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      <div class="train-feature-text">
        <h4>Industry Experts</h4>
        <p>Delivered by practitioners</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
      <div class="train-feature-text">
        <h4>Practical Learning</h4>
        <p>Real case studies & best practices</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
      <div class="train-feature-text">
        <h4>Actionable Insights</h4>
        <p>Tools & strategies you can apply</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      <div class="train-feature-text">
        <h4>Trusted Partner</h4>
        <p>Commitment to safety & quality</p>
      </div>
    </div>
  </div>
</header>

<section class="train-topics-section">
  <div class="train-section-header">
    <div class="train-section-title-wrap">
      <span class="train-line"></span>
      <h2 class="train-section-title">Our Training & Workshop Topics</h2>
      <span class="train-line"></span>
    </div>
    <p class="train-section-subtitle">Comprehensive programs designed to enhance knowledge, build capability, and drive operational excellence.</p>
  </div>

  <div class="train-topics-grid">
    @forelse($trainings as $training)
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></div>
      <h3 class="train-topic-title">{{ $training->title }}</h3>
      <p class="train-topic-desc">{{ $training->description }}</p>
      @if($training->duration)
        <p style="font-size: 12px; color: var(--primary-orange, #f97316); margin-top: 8px; font-weight: 600;">⏱ {{ $training->duration }}</p>
      @endif
    </div>
    @empty
    <p style="text-align: center; color: #64748b; grid-column: 1/-1;">Belum ada data training.</p>
    @endforelse
  </div>
</section>

<section class="train-events-section">
  <div class="train-split-header">
    <h3>Recent Workshop & Training Recap</h3>
    <a href="#" class="view-link">View all events &rarr;</a>
  </div>
  
  <div class="train-events-carousel-wrapper">
    <div class="train-events-grid">
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">24</span>
            <span class="te-mo">APR<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">TMSA & SIRE 2.0 Coaching Program</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Jakarta, Indonesia</p>
          </div>
        </div>
      </div>
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">15</span>
            <span class="te-mo">JUN<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">Marine Casualty Investigation Workshop</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Surabaya, Indonesia</p>
          </div>
        </div>
      </div>
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">10</span>
            <span class="te-mo">SEP<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">Port Risk Management Training</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Batam, Indonesia</p>
          </div>
        </div>
      </div>
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">22</span>
            <span class="te-mo">NOV<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">ISM Code Management Workshop</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Jakarta, Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    <button class="train-events-next" aria-label="Next Events">
      <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>
</section>
@endsection
