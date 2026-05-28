@extends('layouts.app', ['navbarClass' => 'navbar-services'])

@section('content')
<div class="hero-wrapper" style="background-image: url('{{ isset($settings['home_banner_image']) && $settings['home_banner_image'] ? (str_starts_with($settings['home_banner_image'], 'http') ? $settings['home_banner_image'] : Storage::url($settings['home_banner_image'])) : asset('assets/banner.jpg') }}');">
  <!-- HERO CONTENT -->
  <main class="hero-content" id="home" role="main">
    <h1 class="hero-headline">
      <span class="line-white">{{ $settings['home_hero_title_white'] ?? 'Navigating Complexity.' }}</span>
      <span class="line-orange">{{ $settings['home_hero_title_orange'] ?? 'Delivering' }}</span>
      <span class="line-orange dynamic-text-container">
        <span id="typewriter-text" data-words="{{ json_encode(array_map('trim', explode(',', $settings['home_typewriter_words'] ?? 'Operational Excellence, Strategic Solutions, Maritime Expertise'))) }}"></span><span class="typewriter-cursor" aria-hidden="true"></span>
      </span>
    </h1>

    <p class="hero-description">
      {{ $settings['home_hero_description'] ?? 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.' }}
    </p>

    <div class="hero-buttons">
      <button class="btn-primary-hero" id="consult-btn" type="button">
        Consult With Us
        <span class="btn-arrow" aria-hidden="true">&#8594;</span>
      </button>
      <button class="btn-secondary-hero" id="explore-services-btn" type="button">
        Explore Services
        <span class="btn-arrow" aria-hidden="true">&#8594;</span>
      </button>
    </div>
  </main>
  <!-- END HERO CONTENT -->

  <!-- FEATURE GRID -->
  <section class="hero-features" aria-label="Key features">
    <!-- Feature 1: Maritime Expertise -->
    <div class="feature-item">
      <div class="feature-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="5" r="2"/>
          <line x1="12" y1="7" x2="12" y2="19"/>
          <path d="M6 11h12"/>
          <path d="M6 19c1.5 1.5 9 1.5 12 0"/>
        </svg>
      </div>
      <h3 class="feature-title">{{ $settings['home_feature_1_title'] ?? 'Maritime Expertise' }}</h3>
      <p class="feature-desc">{{ $settings['home_feature_1_desc'] ?? 'Years of hands-on industry experience' }}</p>
    </div>

    <!-- Feature 2: Strategic Solutions -->
    <div class="feature-item">
      <div class="feature-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="9"/>
          <circle cx="12" cy="12" r="5"/>
          <circle cx="12" cy="12" r="1" fill="#1F628E" stroke="none"/>
          <line x1="12" y1="3" x2="12" y2="1"/>
          <line x1="12" y1="23" x2="12" y2="21"/>
          <line x1="3" y1="12" x2="1" y2="12"/>
          <line x1="23" y1="12" x2="21" y2="12"/>
        </svg>
      </div>
      <h3 class="feature-title">{{ $settings['home_feature_2_title'] ?? 'Strategic Solutions' }}</h3>
      <p class="feature-desc">{{ $settings['home_feature_2_desc'] ?? 'Tailored strategies that drive results' }}</p>
    </div>

    <!-- Feature 3: Trusted Partner -->
    <div class="feature-item">
      <div class="feature-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 2L2 7l10 5 10-5-10-5z"/>
          <path d="M2 17l10 5 10-5"/>
          <path d="M2 12l10 5 10-5"/>
        </svg>
      </div>
      <h3 class="feature-title">{{ $settings['home_feature_3_title'] ?? 'Trusted Partner' }}</h3>
      <p class="feature-desc">{{ $settings['home_feature_3_desc'] ?? 'Collaborative approach for lasting impact' }}</p>
    </div>

    <!-- Feature 4: Global Perspective -->
    <div class="feature-item">
      <div class="feature-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <circle cx="12" cy="12" r="10"/>
          <line x1="2" y1="12" x2="22" y2="12"/>
          <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
        </svg>
      </div>
      <h3 class="feature-title">{{ $settings['home_feature_4_title'] ?? 'Global Perspective Local Understanding' }}</h3>
      <p class="feature-desc">{{ $settings['home_feature_4_desc'] ?? 'Connecting standards with real-world execution' }}</p>
    </div>
  </section>
  <!-- END FEATURE GRID -->

  <!-- SCROLL INDICATOR -->
  <div class="scroll-indicator" id="scroll-indicator" role="button" aria-label="Scroll down to explore">
    <span class="scroll-label">Scroll to Explore</span>
    <div class="scroll-mouse" aria-hidden="true">
      <div class="scroll-mouse-dot"></div>
    </div>
    <span class="scroll-chevron" aria-hidden="true">&#8964;</span>
  </div>
</div>

<!-- CORE SERVICES HIGHLIGHTS -->
<section class="home-services-section" aria-label="Core Services">
  <div class="hs-container">
    <div class="hs-header">
      <span class="hs-subtitle">{{ $settings['home_services_subtitle'] ?? 'WHAT WE DO' }}</span>
      <h2 class="hs-title">{{ $settings['home_services_title'] ?? 'End-to-End Operational Excellence' }}</h2>
      <p class="hs-desc">{{ $settings['home_services_desc'] ?? 'We deliver integrated solutions connecting high-level strategy, thorough assessment, and on-the-ground training implementation.' }}</p>
    </div>

    <div class="hs-grid">
      <!-- Service 1 -->
      <div class="hs-card">
        <div class="hs-icon-wrapper">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
        </div>
        <h3 class="hs-card-title">{{ $settings['home_services_card_1_title'] ?? 'Maritime Consulting' }}</h3>
        <p class="hs-card-desc">{{ $settings['home_services_card_1_desc'] ?? 'Strategic operational assessments, safety management frameworks, and process optimization tailored to global maritime compliance.' }}</p>
        <a href="{{ url('/services') }}" class="hs-card-link">Learn More &rarr;</a>
      </div>

      <!-- Service 2 -->
      <div class="hs-card">
        <div class="hs-icon-wrapper">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <h3 class="hs-card-title">{{ $settings['home_services_card_2_title'] ?? 'Risk & HR Assessment' }}</h3>
        <p class="hs-card-desc">{{ $settings['home_services_card_2_desc'] ?? 'Comprehensive crew audits, operational risk mapping, and competency profiling to ensure high-reliability human capital performance.' }}</p>
        <a href="{{ url('/services') }}" class="hs-card-link">Learn More &rarr;</a>
      </div>

      <!-- Service 3 -->
      <div class="hs-card">
        <div class="hs-icon-wrapper">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
        </div>
        <h3 class="hs-card-title">{{ $settings['home_services_card_3_title'] ?? 'Workshop & Training' }}</h3>
        <p class="hs-card-desc">{{ $settings['home_services_card_3_desc'] ?? 'Interactive, highly practical knowledge sharing sessions combining regulatory best practices with intensive case-study masterclasses.' }}</p>
        <a href="{{ url('/training') }}" class="hs-card-link">Learn More &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="testimonials-section" aria-label="Client Testimonials">
  <div class="testi-bg"></div>
  <div class="testi-container">
    <div class="testi-header">
      <span class="testi-subtitle">{{ $settings['home_testimonials_subtitle'] ?? 'CLIENT TESTIMONIALS' }}</span>
      <h2 class="testi-title">{{ $settings['home_testimonials_title'] ?? 'Trusted by Maritime Leaders' }}</h2>
      <p class="testi-desc">{{ $settings['home_testimonials_desc'] ?? 'We are proud to be a trusted partner for maritime and industrial businesses across Indonesia.' }}</p>
    </div>

    @if(isset($testimonials) && count($testimonials) > 0)
    <div class="testi-carousel-wrapper">
      <div class="testi-cards-container">
        @foreach($testimonials as $index => $t)
        <div class="testi-card {{ $index == 1 ? 'active' : '' }}" data-index="{{ $index }}">
          <div class="testi-quote-icon">“</div>
          <p class="testi-text">{{ $t->quote }}</p>
          <div class="testi-author">
            <div class="testi-author-img">
                @if($t->client_logo)
                    <img src="{{ str_starts_with($t->client_logo, 'http') || str_starts_with($t->client_logo, 'assets') ? asset($t->client_logo) : Storage::url($t->client_logo) }}" alt="{{ $t->client_company }} Logo">
                @endif
            </div>
            <div class="testi-author-info">
              <h4>{{ $t->client_company }}</h4>
              <span>{{ $t->client_position }}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="testi-pagination">
        @foreach($testimonials as $index => $t)
            <span class="testi-dot {{ $index == 1 ? 'active' : '' }}"></span>
        @endforeach
    </div>
    @endif
  </div>
</section>

<!-- CLIENTS & PARTNERS -->
<section class="clients-partners" aria-label="Clients and Partners">
  <div class="cp2-bg"></div>
  <div class="cp2-wrapper">
    <div class="cp2-header">
      <div class="cp2-badge">{{ $settings['home_clients_subtitle'] ?? 'CLIENTS & PARTNERS' }}</div>
      <h2 class="cp2-title">
        {{ $settings['home_clients_title'] ?? 'Trusted By' }}
        <span class="cp2-title-accent">{{ $settings['home_clients_title_accent'] ?? 'Industry Leaders' }}</span>
      </h2>
      <p class="cp2-desc">{{ $settings['home_clients_desc'] ?? 'We collaborate with leading organizations across maritime and industrial sectors to drive operational excellence and sustainable growth.' }}</p>
      <div class="cp2-stats">
        <div class="cp2-stat">
          <span class="cp2-stat-num">{{ $settings['home_clients_stat_1_num'] ?? '50+' }}</span>
          <span class="cp2-stat-label">{{ $settings['home_clients_stat_1_label'] ?? 'Clients Served' }}</span>
        </div>
        <div class="cp2-stat-divider"></div>
        <div class="cp2-stat">
          <span class="cp2-stat-num">{{ $settings['home_clients_stat_2_num'] ?? '15+' }}</span>
          <span class="cp2-stat-label">{{ $settings['home_clients_stat_2_label'] ?? 'Years Experience' }}</span>
        </div>
        <div class="cp2-stat-divider"></div>
        <div class="cp2-stat">
          <span class="cp2-stat-num">{{ $settings['home_clients_stat_3_num'] ?? '100%' }}</span>
          <span class="cp2-stat-label">{{ $settings['home_clients_stat_3_label'] ?? 'Client Satisfaction' }}</span>
        </div>
      </div>
    </div>

    @if(isset($partners) && count($partners) > 0)
    <!-- Marquee Row 1 -->
    <div class="cp2-marquee-section">
      <div class="cp2-marquee-label">{{ $settings['home_clients_marquee_label'] ?? 'OUR TRUSTED CLIENTS & PARTNERS' }}</div>
      <div class="cp2-marquee-track-outer">
        <div class="cp2-marquee-track cp2-ltr">
          @foreach($partners as $p)
            <div class="cp2-logo-card"><img src="{{ str_starts_with($p->logo, 'http') || str_starts_with($p->logo, 'assets') ? asset($p->logo) : Storage::url($p->logo) }}" alt="{{ $p->name }}"></div>
          @endforeach
          <!-- Duplicate for loop -->
          @foreach($partners as $p)
            <div class="cp2-logo-card"><img src="{{ str_starts_with($p->logo, 'http') || str_starts_with($p->logo, 'assets') ? asset($p->logo) : Storage::url($p->logo) }}" alt="{{ $p->name }}"></div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Marquee Row 2 -->
    <div class="cp2-marquee-section">
      <div class="cp2-marquee-track-outer">
        <div class="cp2-marquee-track cp2-rtl">
          @foreach($partners->reverse() as $p)
            <div class="cp2-logo-card"><img src="{{ str_starts_with($p->logo, 'http') || str_starts_with($p->logo, 'assets') ? asset($p->logo) : Storage::url($p->logo) }}" alt="{{ $p->name }}"></div>
          @endforeach
          <!-- Duplicate for loop -->
          @foreach($partners->reverse() as $p)
            <div class="cp2-logo-card"><img src="{{ str_starts_with($p->logo, 'http') || str_starts_with($p->logo, 'assets') ? asset($p->logo) : Storage::url($p->logo) }}" alt="{{ $p->name }}"></div>
          @endforeach
        </div>
      </div>
    </div>
    @endif
  </div>
</section>

<!-- LATEST INSIGHTS & PODCAST -->
<section class="home-insights-section" id="podcast" aria-label="Insights and Podcast">
  <div class="hi-container">
    <div class="hi-header">
      <span class="hi-subtitle">{{ $settings['home_insights_subtitle'] ?? 'KNOWLEDGE SHARING' }}</span>
      <h2 class="hi-title">{{ $settings['home_insights_title'] ?? 'Our Podcast Series' }}</h2>
      <p class="hi-desc">{{ $settings['home_insights_desc'] ?? 'Listen to expert talks discussing high-level industry hurdles, leadership culture, and cutting-edge operational frameworks directly with top practitioners.' }}</p>
    </div>

    <div class="hi-grid" style="grid-template-columns: 1fr;">
      <!-- Dedicated Podcast Block -->
      <div class="hi-podcast-card" style="max-width: 800px; margin: 0 auto; width: 100%;">
        <div class="pod-badge-wrap">
          <span class="pod-badge">PODCAST</span>
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" class="spotify-icon"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.54.66.3 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.02.6-1.141C9.6 9.9 15.001 10.62 18.66 12.84c.42.24.54.84.3 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.781-.18-.6.18-1.2.78-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.239.54-.959.72-1.5.42z"/></svg>
        </div>
        @if(isset($latestPodcast))
            <h3 class="pod-title">{{ $latestPodcast->title }}</h3>
            <p class="pod-desc">{{ Str::limit($latestPodcast->description, 120) }}</p>
            
            <div class="pod-player-mock">
            <div class="player-left">
                <div class="player-thumb">
                @if($latestPodcast->image)
                    <img src="{{ str_starts_with($latestPodcast->image, 'http') || str_starts_with($latestPodcast->image, 'assets') ? asset($latestPodcast->image) : Storage::url($latestPodcast->image) }}" alt="Thumbnail" style="width: 100%; height: 100%; object-fit: cover;">
                @else
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                @endif
                </div>
                <div class="player-info">
                <h4>Episode #{{ str_pad($latestPodcast->episode_number, 2, '0', STR_PAD_LEFT) }}: {{ Str::limit($latestPodcast->title, 30) }}</h4>
                <span>{{ $latestPodcast->category ?? 'Hosted by KSP Consulting' }}</span>
                </div>
            </div>
            <button class="btn-play-pod" onclick="window.open('{{ $latestPodcast->spotify_url ?? 'https://spotify.com' }}', '_blank')" aria-label="Play on Spotify">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </button>
            </div>

            <a href="{{ $latestPodcast->spotify_url ?? 'https://spotify.com' }}" target="_blank" rel="noopener noreferrer" class="pod-ext-link">Listen on Spotify &rarr;</a>
        @else
            <h3 class="pod-title">Navigating Excellence Dialogue</h3>
            <p class="pod-desc">Listen to expert talks discussing high-level industry hurdles, leadership culture, and cutting-edge operational frameworks directly with top practitioners.</p>
            
            <div class="pod-player-mock">
            <div class="player-left">
                <div class="player-thumb">
                <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
                </div>
                <div class="player-info">
                <h4>Episode #04: The Island of Gold Framework</h4>
                <span>Hosted by KSP Consulting</span>
                </div>
            </div>
            <button class="btn-play-pod" onclick="window.open('https://spotify.com', '_blank')" aria-label="Play on Spotify">
                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
            </button>
            </div>

            <a href="https://spotify.com" target="_blank" rel="noopener noreferrer" class="pod-ext-link">Listen on Spotify &rarr;</a>
        @endif
      </div>
    </div>
  </div>
</section>
@endsection
