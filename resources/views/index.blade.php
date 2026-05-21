@extends('layouts.app', ['navbarClass' => 'navbar-services'])

@section('content')
<div class="hero-wrapper">
  <!-- HERO CONTENT -->
  <main class="hero-content" id="home" role="main">
    <h1 class="hero-headline">
      <span class="line-white">Navigating Complexity.</span>
      <span class="line-orange">Delivering</span>
      <span class="line-orange dynamic-text-container">
        <span id="typewriter-text" data-words='["Operational Excellence."]'></span><span class="typewriter-cursor" aria-hidden="true"></span>
      </span>
    </h1>

    <p class="hero-description">
      KSP Consulting helps maritime and industrial businesses
      solve operational challenges through consulting, assessment,
      training, and strategic implementation.
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
      <h3 class="feature-title">Maritime<br>Expertise</h3>
      <p class="feature-desc">Years of hands-on<br>industry experience</p>
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
      <h3 class="feature-title">Strategic<br>Solutions</h3>
      <p class="feature-desc">Tailored strategies<br>that drive results</p>
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
      <h3 class="feature-title">Trusted<br>Partner</h3>
      <p class="feature-desc">Collaborative approach<br>for lasting impact</p>
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
      <h3 class="feature-title">Global Perspective<br>Local Understanding</h3>
      <p class="feature-desc">Connecting standards<br>with real-world execution</p>
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
      <span class="hs-subtitle">WHAT WE DO</span>
      <h2 class="hs-title">End-to-End Operational Excellence</h2>
      <p class="hs-desc">We deliver integrated solutions connecting high-level strategy, thorough assessment, and on-the-ground training implementation.</p>
    </div>

    <div class="hs-grid">
      <!-- Service 1 -->
      <div class="hs-card">
        <div class="hs-icon-wrapper">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
        </div>
        <h3 class="hs-card-title">Maritime Consulting</h3>
        <p class="hs-card-desc">Strategic operational assessments, safety management frameworks, and process optimization tailored to global maritime compliance.</p>
        <a href="{{ url('/services') }}" class="hs-card-link">Learn More &rarr;</a>
      </div>

      <!-- Service 2 -->
      <div class="hs-card">
        <div class="hs-icon-wrapper">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <h3 class="hs-card-title">Risk &amp; HR Assessment</h3>
        <p class="hs-card-desc">Comprehensive crew audits, operational risk mapping, and competency profiling to ensure high-reliability human capital performance.</p>
        <a href="{{ url('/services') }}" class="hs-card-link">Learn More &rarr;</a>
      </div>

      <!-- Service 3 -->
      <div class="hs-card">
        <div class="hs-icon-wrapper">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
        </div>
        <h3 class="hs-card-title">Workshop &amp; Training</h3>
        <p class="hs-card-desc">Interactive, highly practical knowledge sharing sessions combining regulatory best practices with intensive case-study masterclasses.</p>
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
      <span class="testi-subtitle">CLIENT TESTIMONIALS</span>
      <h2 class="testi-title">Trusted by Maritime<br>Leaders</h2>
      <p class="testi-desc">We are proud to be a trusted partner for maritime and industrial<br>businesses across Indonesia.</p>
    </div>

    <div class="testi-carousel-wrapper">
      <div class="testi-cards-container">
        <!-- Card 1 -->
        <div class="testi-card" data-index="0">
          <div class="testi-quote-icon">“</div>
          <p class="testi-text">"KSP Consulting provided practical and highly professional operational solutions for our maritime operations."</p>
          <div class="testi-author">
            <div class="testi-author-img">
              <img src="{{ asset('assets/ptk-logo.webp') }}" alt="PTK Logo">
            </div>
            <div class="testi-author-info">
              <h4>PT Samudra Bahari</h4>
              <span>Operations Director</span>
            </div>
          </div>
        </div>

        <!-- Card 2 (Active/Center) -->
        <div class="testi-card active" data-index="1">
          <div class="testi-quote-icon">“</div>
          <p class="testi-text">"Their training and assessment approach helped improve both operational performance and safety awareness."</p>
          <div class="testi-author">
            <div class="testi-author-img">
              <img src="{{ asset('assets/Pertamina_International_Shipping.webp') }}" alt="Pertamina Logo">
            </div>
            <div class="testi-author-info">
              <h4>PT Oceanic Shipping</h4>
              <span>Marine Superintendent</span>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="testi-card" data-index="2">
          <div class="testi-quote-icon">“</div>
          <p class="testi-text">"Professional team, deep expertise, and responsive support throughout our TMSA implementation process."</p>
          <div class="testi-author">
            <div class="testi-author-img">
              <img src="{{ asset('assets/PHE-ONWJ.png') }}" alt="PHE ONWJ Logo">
            </div>
            <div class="testi-author-info">
              <h4>PT Nusantara Maritim</h4>
              <span>HSEQ Manager</span>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="testi-card" data-index="3">
          <div class="testi-quote-icon">“</div>
          <p class="testi-text">"A valuable partner in standardizing port operational procedures and enhancing safety benchmarks across Indonesian ports."</p>
          <div class="testi-author">
            <div class="testi-author-img">
              <img src="{{ asset('assets/abupi.png') }}" alt="ABUPI Logo">
            </div>
            <div class="testi-author-info">
              <h4>ABUPI</h4>
              <span>Port Association</span>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="testi-card" data-index="4">
          <div class="testi-quote-icon">“</div>
          <p class="testi-text">"Expert consultancy that bridges the gap between regulatory requirements and efficient on-the-ground terminal management."</p>
          <div class="testi-author">
            <div class="testi-author-img">
              <img src="{{ asset('assets/images-removebg-preview.png') }}" alt="Partner Logo">
            </div>
            <div class="testi-author-info">
              <h4>Pelabuhan Indonesia</h4>
              <span>Port Authority</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testi-pagination">
      <span class="testi-dot"></span>
      <span class="testi-dot active"></span>
      <span class="testi-dot"></span>
      <span class="testi-dot"></span>
      <span class="testi-dot"></span>
    </div>
  </div>
</section>

<!-- CLIENTS & PARTNERS -->
<section class="clients-partners" aria-label="Clients and Partners">
  <div class="cp2-bg"></div>
  <div class="cp2-wrapper">
    <div class="cp2-header">
      <div class="cp2-badge">CLIENTS &amp; PARTNERS</div>
      <h2 class="cp2-title">Trusted By <span class="cp2-title-accent">Industry Leaders</span></h2>
      <p class="cp2-desc">We collaborate with leading organizations across maritime and industrial sectors to drive operational excellence and sustainable growth.</p>
      <div class="cp2-stats">
        <div class="cp2-stat">
          <span class="cp2-stat-num">50+</span>
          <span class="cp2-stat-label">Clients Served</span>
        </div>
        <div class="cp2-stat-divider"></div>
        <div class="cp2-stat">
          <span class="cp2-stat-num">15+</span>
          <span class="cp2-stat-label">Years Experience</span>
        </div>
        <div class="cp2-stat-divider"></div>
        <div class="cp2-stat">
          <span class="cp2-stat-num">100%</span>
          <span class="cp2-stat-label">Client Satisfaction</span>
        </div>
      </div>
    </div>

    <!-- Marquee Row 1 -->
    <div class="cp2-marquee-section">
      <div class="cp2-marquee-label">OUR TRUSTED CLIENTS &amp; PARTNERS</div>
      <div class="cp2-marquee-track-outer">
        <div class="cp2-marquee-track cp2-ltr">
          <div class="cp2-logo-card"><img src="{{ asset('assets/Pertamina_International_Shipping.webp') }}" alt="PIS"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/PHE-ONWJ.png') }}" alt="PHE ONWJ"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/ptk-logo.webp') }}" alt="PTK"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/abupi.png') }}" alt="Abupi"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/images-removebg-preview.png') }}" alt="Partner"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/143092025_12_03_09_51_13-removebg-preview.png') }}" alt="Partner"></div>
          <!-- Duplicate for loop -->
          <div class="cp2-logo-card"><img src="{{ asset('assets/Pertamina_International_Shipping.webp') }}" alt="PIS"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/PHE-ONWJ.png') }}" alt="PHE ONWJ"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/ptk-logo.webp') }}" alt="PTK"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/abupi.png') }}" alt="Abupi"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/images-removebg-preview.png') }}" alt="Partner"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/143092025_12_03_09_51_13-removebg-preview.png') }}" alt="Partner"></div>
        </div>
      </div>
    </div>

    <!-- Marquee Row 2 -->
    <div class="cp2-marquee-section">
      <div class="cp2-marquee-track-outer">
        <div class="cp2-marquee-track cp2-rtl">
          <div class="cp2-logo-card"><img src="{{ asset('assets/ptk-logo.webp') }}" alt="PTK"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/143092025_12_03_09_51_13-removebg-preview.png') }}" alt="Partner"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/Pertamina_International_Shipping.webp') }}" alt="PIS"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/images-removebg-preview.png') }}" alt="Partner"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/abupi.png') }}" alt="Abupi"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/PHE-ONWJ.png') }}" alt="PHE ONWJ"></div>
          <!-- Duplicate for loop -->
          <div class="cp2-logo-card"><img src="{{ asset('assets/ptk-logo.webp') }}" alt="PTK"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/143092025_12_03_09_51_13-removebg-preview.png') }}" alt="Partner"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/Pertamina_International_Shipping.webp') }}" alt="PIS"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/images-removebg-preview.png') }}" alt="Partner"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/abupi.png') }}" alt="Abupi"></div>
          <div class="cp2-logo-card"><img src="{{ asset('assets/PHE-ONWJ.png') }}" alt="PHE ONWJ"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LATEST INSIGHTS & PODCAST -->
<section class="home-insights-section" id="podcast" aria-label="Insights and Podcast">
  <div class="hi-container">
    <div class="hi-header">
      <span class="hi-subtitle">KNOWLEDGE SHARING</span>
      <h2 class="hi-title">Latest Insights &amp; Media</h2>
      <p class="hi-desc">Stay updated with our analytical perspectives, practical case studies, and engaging dialogue on maritime operations.</p>
    </div>

    <div class="hi-grid">
      <!-- Article Card 1 -->
      <div class="hi-card">
        <div class="hi-img-wrapper">
          <img src="https://images.unsplash.com/photo-1578575437130-527eed3abbec?auto=format&fit=crop&w=600&q=80" alt="Ship optimization">
          <span class="hi-tag">Article</span>
        </div>
        <div class="hi-content">
          <span class="hi-date">May 10, 2026</span>
          <h3 class="hi-card-title">Navigating Safety Frameworks: Implementation Strategies</h3>
          <p class="hi-card-desc">Practical methodologies for bridging standard compliance with real-world maritime operational cultures.</p>
          <a href="{{ url('/blog') }}" class="hi-link">Read Article &rarr;</a>
        </div>
      </div>

      <!-- Article Card 2 -->
      <div class="hi-card">
        <div class="hi-img-wrapper">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80" alt="Data connectivity">
          <span class="hi-tag">Case Study</span>
        </div>
        <div class="hi-content">
          <span class="hi-date">April 28, 2026</span>
          <h3 class="hi-card-title">Data-Driven Crew Audits: Enhancing Operational Reliability</h3>
          <p class="hi-card-desc">How competency profiling mitigates systemic error and drives continuous improvement across fleets.</p>
          <a href="{{ url('/blog') }}" class="hi-link">Read Article &rarr;</a>
        </div>
      </div>

      <!-- Dedicated Podcast Block -->
      <div class="hi-podcast-card">
        <div class="pod-badge-wrap">
          <span class="pod-badge">PODCAST</span>
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" class="spotify-icon"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.54.66.3 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.02.6-1.141C9.6 9.9 15.001 10.62 18.66 12.84c.42.24.54.84.3 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.781-.18-.6.18-1.2.78-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.239.54-.959.72-1.5.42z"/></svg>
        </div>
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
      </div>
    </div>
  </div>
</section>
@endsection
