@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-podcast'])

@section('title', 'Podcast | KSP Consulting - Conversations Beyond Operations')

@section('content')
<main>
  <!-- PODCAST HERO (DARK) -->
  <section class="pod-hero">
    <div class="pod-hero-container">
      <div class="pod-hero-left">
        <span class="pod-hero-badge">PODCAST</span>
        <h1 class="pod-hero-title">Conversations Beyond Operations</h1>
        <p class="pod-hero-desc">
          Executive conversations, strategic insights, and human-centered discussions that explore the real stories behind leadership, operations, and growth.
        </p>
        <div class="pod-hero-btns">
          <button class="btn-pod-youtube">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <span>Watch on YouTube</span>
          </button>
          <button class="btn-pod-spotify">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.54.66.3 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.02.6-1.141C9.6 9.9 15.001 10.62 18.66 12.84c.42.24.54.84.3 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.781-.18-.6.18-1.2.78-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.239.54-.959.72-1.5.42z"/></svg>
            <span>Listen on Spotify</span>
          </button>
        </div>
      </div>

      <div class="pod-hero-right">
        <span class="pod-hero-feat-label">FEATURED EPISODE</span>
        <div class="pod-feat-card">
          <div class="pod-feat-video-wrapper" id="featured-video-container" onclick="loadFeaturedVideo()">
            <img src="{{ asset('assets/featured_podcast.png') }}" alt="Featured Episode" id="featured-thumbnail">
            <div class="pod-play-overlay">
              <div class="play-btn-circle"><div class="play-triangle"></div></div>
            </div>
          </div>
          <div class="pod-feat-content">
            <span class="pod-ep-num">EP. 12</span>
            <h3>Building Resilient Maritime Operations in an Era of Complexity</h3>
            <div class="pod-meta">
              <span><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> 32:45</span>
              <span>May 10, 2025</span>
            </div>
          </div>
        </div>
        <div class="pod-feat-desc-block">
          <p>We discuss how maritime leaders can strengthen operational resilience, manage risks, and create sustainable value across the maritime value chain.</p>
          <div class="pod-host">
            <img src="https://i.pravatar.cc/150?u=andika" alt="Capt. Andika Putra">
            <div class="host-info">
              <span class="host-with">with</span>
              <span class="host-name">Capt. Andika Putra</span>
              <span class="host-title">Maritime Consultant &amp; Trainer</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EPISODE LISTS (WHITE) -->
  <section class="pod-playlists">
    <div class="pod-playlist-container">
      
      <!-- Category 1 -->
      <div class="pod-cat-section">
        <div class="pod-cat-header">
          <div class="pod-cat-title">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="#FF0000"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <h2>Navigating Through Life</h2>
          </div>
          <a href="#" class="view-all">View all on YouTube &rarr;</a>
        </div>
        <div class="pod-grid">
          <div class="pod-card">
            <div class="pod-card-img">
              <img src="{{ asset('assets/life_podcast.png') }}" alt="Life Episode">
              <div class="pod-play-overlay-small">
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">28:16</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.11</span>
              <h4>Purpose, Leadership, and Meaningful Impact</h4>
              <span class="pod-date">May 3, 2025</span>
            </div>
          </div>
          <div class="pod-card">
            <div class="pod-card-img">
              <img src="{{ asset('assets/life_podcast.png') }}" alt="Life Episode">
              <div class="pod-play-overlay-small">
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">26:48</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.10</span>
              <h4>Lessons from Setbacks: Turning Challenges into Growth</h4>
              <span class="pod-date">Apr 26, 2025</span>
            </div>
          </div>
          <div class="pod-card">
            <div class="pod-card-img">
              <img src="{{ asset('assets/life_podcast.png') }}" alt="Life Episode">
              <div class="pod-play-overlay-small">
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">31:02</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.09</span>
              <h4>Mindset for High Performance and Fulfillment</h4>
              <span class="pod-date">Apr 19, 2025</span>
            </div>
          </div>
          <button class="pod-grid-next"><svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
        </div>
      </div>

      <!-- Category 2 -->
      <div class="pod-cat-section">
        <div class="pod-cat-header">
          <div class="pod-cat-title">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="#FF0000"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <h2>Navigating Through Maritime</h2>
          </div>
          <a href="#" class="view-all">View all on YouTube &rarr;</a>
        </div>
        <div class="pod-grid">
          <div class="pod-card">
            <div class="pod-card-img">
              <img src="{{ asset('assets/maritime_podcast.png') }}" alt="Maritime Episode">
              <div class="pod-play-overlay-small">
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">32:45</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.12</span>
              <h4>Building Resilient Maritime Operations in an Era of Complexity</h4>
              <span class="pod-date">May 10, 2025</span>
            </div>
          </div>
          <div class="pod-card">
            <div class="pod-card-img">
              <img src="{{ asset('assets/maritime_podcast.png') }}" alt="Maritime Episode">
              <div class="pod-play-overlay-small">
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">29:18</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.11</span>
              <h4>The Future of Maritime Workforce: Skills, Safety, and Adaptability</h4>
              <span class="pod-date">May 2, 2025</span>
            </div>
          </div>
          <div class="pod-card">
            <div class="pod-card-img">
              <img src="{{ asset('assets/maritime_podcast.png') }}" alt="Maritime Episode">
              <div class="pod-play-overlay-small">
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">27:33</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.10</span>
              <h4>Navigating Regulatory Changes: What Operators Need to Know</h4>
              <span class="pod-date">Apr 25, 2025</span>
            </div>
          </div>
          <button class="pod-grid-next"><svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORMS (LIGHT) -->
  <section class="pod-platforms">
    <div class="pod-plat-container">
      <div class="pod-plat-info">
        <span class="plat-badge">ALSO AVAILABLE ON</span>
        <h3>Listen Anytime, Anywhere</h3>
        <p>Subscribe and listen on your favorite platform.</p>
      </div>
      <div class="pod-plat-links">
        <a href="#" class="plat-link">
          <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify">
          <div class="plat-text">
            <span>Spotify</span>
            <p>Listen on Spotify &rarr;</p>
          </div>
        </a>
      </div>
    </div>
  </section>
</main>

<script>
  function loadFeaturedVideo() {
    const container = document.getElementById('featured-video-container');
    container.innerHTML = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>`;
    container.onclick = null;
    container.style.cursor = 'default';
  }
</script>
@endsection
