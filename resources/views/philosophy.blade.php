@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-philosophy'])

@section('title', 'Philosophy | KSP Consulting')

@section('content')
<section class="phil-hero">
  <div class="phil-hero-bg">
    <img src="{{ isset($settings['phil_banner_image']) ? (str_starts_with($settings['phil_banner_image'], 'http') || str_starts_with($settings['phil_banner_image'], 'assets') ? asset($settings['phil_banner_image']) : Storage::url($settings['phil_banner_image'])) : asset('assets/sumatra.jpg') }}" alt="Philosophy Banner">
    <div class="phil-hero-overlay"></div>
  </div>

  <div class="phil-hero-container">
    <div class="phil-hero-content">
      <div class="phil-subtitle-wrap">
        <span class="phil-subtitle">{{ $settings['phil_subtitle'] ?? 'OUR PHILOSOPHY & CULTURE' }}</span>
        <div class="phil-subtitle-line"></div>
      </div>
      <h1 class="phil-title">
        {{ $settings['phil_title_first'] ?? 'The Philosophy' }}
        <br>
        <span class="phil-title-accent">{{ $settings['phil_title_second'] ?? 'Behind KSP' }}</span>
      </h1>
      
      <div class="phil-intro-card">
        <p>{!! nl2br(e($settings['phil_intro_card'] ?? "The word \"Swarna\" comes from Sanskrit\nmeaning \"gold,\" symbolizing excellence, trust,\nvalue, and meaningful partnerships.")) !!}</p>
      </div>
      
      <p class="phil-intro-text">{!! nl2br(e($settings['phil_intro_text'] ?? "Inspired by \"Swarnadwipa\" (Island of Gold), KSP Consulting\nbelieves operational excellence is built through connectivity,\ninnovation, integrity, and collaborative growth.")) !!}</p>
    </div>

    <div class="phil-hero-badge">
      <div class="badge-text">
        <span class="badge-title">{{ $settings['phil_badge_title'] ?? 'SWARNADWIPA' }}</span>
        <span class="badge-sub">{{ $settings['phil_badge_sub'] ?? 'ISLAND OF GOLD' }}</span>
      </div>
    </div>
  </div>
</section>

<section class="phil-compass">
  <h2 class="phil-compass-title">{{ $settings['phil_compass_title'] ?? 'Our Culture, Our Compass' }}</h2>
  <p class="phil-compass-desc">{!! nl2br(e($settings['phil_compass_desc'] ?? 'SWARNADWIPA represents the values that guide us in everything we do.')) !!}</p>

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
        <img src="{{ isset($settings['phil_slider_image']) ? (str_starts_with($settings['phil_slider_image'], 'http') || str_starts_with($settings['phil_slider_image'], 'assets') ? asset($settings['phil_slider_image']) : Storage::url($settings['phil_slider_image'])) : 'https://images.unsplash.com/photo-1503945438517-f65904a52ce6?auto=format&fit=crop&w=600&q=80' }}" alt="Philosophy Value">
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
  const philosophyData = {!! json_encode($values->map(fn($v) => [
    'letter' => $v->letter,
    'index' => $v->index,
    'title' => $v->title,
    'description' => $v->description,
    'features' => $v->features ?? [],
    'icon' => $v->icon ?? 'users',
  ])) !!};
</script>

@endsection
