@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-philosophy'])

@section('title', 'Philosophy | KSP Consulting')

@section('content')
<section class="phil-hero">
  <div class="phil-hero-bg">
    <img src="{{ asset('assets/sumatra.jpg') }}" alt="Minangkabau House Banner">
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
    @foreach($values as $val)
    <div class="phil-letter {{ $loop->first ? 'active' : '' }}" data-index="{{ $val->index }}"><span class="letter">{{ $val->letter }}</span></div>
    @endforeach
  </div>

  <div class="phil-letter-timeline">
    <div class="phil-letter-line"></div>
    <div class="phil-letter-dots" id="phil-dots">
      @foreach($values as $val)
      <span class="phil-ldot {{ $loop->first ? 'active' : '' }}"></span>
      @endforeach
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

{{-- Pass philosophy data to JS --}}
<script>
  const philosophyData = @json($values->map(fn($v) => [
    'letter' => $v->letter,
    'index' => $v->index,
    'title' => $v->title,
    'description' => $v->description,
    'features' => $v->features ?? [],
  ]));
</script>

@endsection
