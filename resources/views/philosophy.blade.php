@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-philosophy'])

@section('title', 'Philosophy | KSP Consulting')

@section('content')
<section class="phil-hero">
  <div class="phil-hero-bg">
    <img src="{{ asset('assets/minang.jfif') }}" alt="Minangkabau House Banner">
    <div class="phil-hero-overlay"></div>
  </div>

  <div class="phil-hero-container">
    <div class="phil-hero-content">
      <div class="phil-subtitle-wrap">
        <span class="phil-subtitle">OUR PHILOSOPHY & CULTURE</span>
        <div class="phil-subtitle-line"></div>
      </div>
      <h1 class="phil-title">The Philosophy<br><span class="phil-title-accent">Behind KSP</span></h1>
      
      <div class="phil-intro-card">
        <p>The word "Swarna" comes from Sanskrit<br>meaning "gold," symbolizing excellence, trust,<br>value, and meaningful partnerships.</p>
      </div>
      
      <p class="phil-intro-text">Inspired by "Swarnadwipa" (Island of Gold), KSP Consulting<br>believes operational excellence is built through connectivity,<br>innovation, integrity, and collaborative growth.</p>
    </div>

    <div class="phil-hero-badge">
      <div class="badge-text">
        <span class="badge-title">SWARNADWIPA</span>
        <span class="badge-sub">ISLAND OF GOLD</span>
      </div>
    </div>
  </div>
</section>

<section class="phil-compass">
  <h2 class="phil-compass-title">Our Culture, Our Compass</h2>
  <p class="phil-compass-desc">SWARNADWIPA represents the values that guide us in everything we do.</p>

  <div class="phil-letters" id="phil-letters">
    <div class="phil-letter active" data-index="0"><span class="letter">S</span></div>
    <div class="phil-letter" data-index="1"><span class="letter">W</span></div>
    <div class="phil-letter" data-index="2"><span class="letter">A</span></div>
    <div class="phil-letter" data-index="3"><span class="letter">R</span></div>
    <div class="phil-letter" data-index="4"><span class="letter">N</span></div>
    <div class="phil-letter" data-index="5"><span class="letter">A</span></div>
    <div class="phil-letter" data-index="6"><span class="letter">D</span></div>
    <div class="phil-letter" data-index="7"><span class="letter">W</span></div>
    <div class="phil-letter" data-index="8"><span class="letter">I</span></div>
    <div class="phil-letter" data-index="9"><span class="letter">P</span></div>
    <div class="phil-letter" data-index="10"><span class="letter">A</span></div>
  </div>

  <div class="phil-letter-timeline">
    <div class="phil-letter-line"></div>
    <div class="phil-letter-dots" id="phil-dots">
      <span class="phil-ldot active"></span><span class="phil-ldot"></span><span class="phil-ldot"></span>
      <span class="phil-ldot"></span><span class="phil-ldot"></span><span class="phil-ldot"></span>
      <span class="phil-ldot"></span><span class="phil-ldot"></span><span class="phil-ldot"></span>
      <span class="phil-ldot"></span><span class="phil-ldot"></span>
    </div>
  </div>
</section>

<section class="phil-slider-section">
  <div class="phil-slider-inner">
    <button class="phil-arrow phil-arrow-left" id="phil-prev" aria-label="Previous">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>
    </button>
    <div class="phil-slider-wrapper">
      <div class="phil-slider-img">
        <img src="https://images.unsplash.com/photo-1503945438517-f65904a52ce6?auto=format&fit=crop&w=600&q=80" alt="KSP Worker">
      </div>
      <div class="phil-slider-content" id="phil-slide-content">
        <!-- JS will populate this -->
      </div>
    </div>
    <button class="phil-arrow phil-arrow-right" id="phil-next" aria-label="Next">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>
</section>

<section class="phil-culture">
  <h2 class="phil-culture-title">Our Culture in Action</h2>
  <p class="phil-culture-desc">These values shape our mindset, our behavior, and the way we deliver impact for our clients and partners.</p>
  <div class="phil-culture-grid" id="phil-culture-grid">
    <!-- JS will populate -->
  </div>
</section>
@endsection
