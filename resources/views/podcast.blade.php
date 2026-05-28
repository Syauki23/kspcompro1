@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-podcast'])

@section('title', 'Podcast | KSP Consulting - Conversations Beyond Operations')

@section('content')
<main>
  <!-- PODCAST HERO (DARK) -->
  <section class="pod-hero">
    <div class="pod-hero-container">
      <div class="pod-hero-left">
        <span class="pod-hero-badge">{{ $settings['podcast_hero_badge'] ?? 'PODCAST' }}</span>
        <h1 class="pod-hero-title">{{ $settings['podcast_hero_title'] ?? 'Conversations Beyond Operations' }}</h1>
        <p class="pod-hero-desc">
          {{ $settings['podcast_hero_desc'] ?? 'Executive conversations, strategic insights, and human-centered discussions that explore the real stories behind leadership, operations, and growth.' }}
        </p>
        <div class="pod-hero-btns">
          @if(isset($settings['podcast_youtube_url']) && $settings['podcast_youtube_url'])
          <button class="btn-pod-youtube" onclick="window.open('{{ $settings['podcast_youtube_url'] }}', '_blank')">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <span>Watch on YouTube</span>
          </button>
          @endif
          @if(isset($settings['podcast_spotify_url']) && $settings['podcast_spotify_url'])
          <button class="btn-pod-spotify" onclick="window.open('{{ $settings['podcast_spotify_url'] }}', '_blank')">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.54.66.3 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.02.6-1.141C9.6 9.9 15.001 10.62 18.66 12.84c.42.24.54.84.3 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.781-.18-.6.18-1.2.78-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.239.54-.959.72-1.5.42z"/></svg>
            <span>Listen on Spotify</span>
          </button>
          @endif
        </div>
      </div>

      <div class="pod-hero-right">
        <span class="pod-hero-feat-label">FEATURED EPISODE</span>
        @if($featured)
        <div class="pod-feat-card">
          <div class="pod-feat-video-wrapper" id="featured-video-container" onclick="loadFeaturedVideo('{{ $featured->youtube_id }}')">
            @if($featured->image)
              <img src="{{ str_starts_with($featured->image, 'http') || str_starts_with($featured->image, 'assets') ? asset($featured->image) : Storage::url($featured->image) }}" alt="{{ $featured->title }}" id="featured-thumbnail">
            @else
              <img src="{{ asset('assets/featured_podcast.png') }}" alt="{{ $featured->title }}" id="featured-thumbnail">
            @endif
            <div class="pod-play-overlay">
              <div class="play-btn-circle"><div class="play-triangle"></div></div>
            </div>
          </div>
          <div class="pod-feat-content">
            <span class="pod-ep-num">EP. {{ $featured->episode_number }}</span>
            <h3>{{ $featured->title }}</h3>
            <div class="pod-meta">
              <span><svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg> {{ $featured->duration }}</span>
              <span>{{ $featured->publish_date }}</span>
            </div>
          </div>
        </div>
        <div class="pod-feat-desc-block">
          <p>{{ $featured->description }}</p>
        </div>
        @else
        <div class="pod-feat-card">
          <div class="pod-feat-content" style="padding: 24px;">
            <p style="color: rgba(255,255,255,0.5);">Belum ada featured episode.</p>
          </div>
        </div>
        @endif
      </div>
    </div>
  </section>

  <!-- EPISODE LISTS (WHITE) -->
  <section class="pod-playlists">
    <div class="pod-playlist-container">
      
      @forelse($categories as $categoryName => $episodes)
      <div class="pod-cat-section">
        <div class="pod-cat-header">
          <div class="pod-cat-title">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="#FF0000"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <h2>{{ $categoryName }}</h2>
          </div>
          <a href="{{ $settings['podcast_youtube_url'] ?? '#' }}" class="view-all" target="_blank">View all on YouTube &rarr;</a>
        </div>
        <div class="pod-grid">
          @foreach($episodes->take(3) as $episode)
          <div class="pod-card">
            <div class="pod-card-img">
              @if($episode->image)
                <img src="{{ str_starts_with($episode->image, 'http') || str_starts_with($episode->image, 'assets') ? asset($episode->image) : Storage::url($episode->image) }}" alt="{{ $episode->title }}">
              @else
                <img src="{{ asset('assets/life_podcast.png') }}" alt="{{ $episode->title }}">
              @endif
              <div class="pod-play-overlay-small" @if($episode->youtube_id) onclick="window.open('https://www.youtube.com/watch?v={{ $episode->youtube_id }}', '_blank')" style="cursor:pointer;" @endif>
                <div class="play-btn-circle-small"><div class="play-triangle-small"></div></div>
              </div>
              <span class="pod-duration">{{ $episode->duration }}</span>
            </div>
            <div class="pod-card-content">
              <span class="pod-ep-tag">EP.{{ $episode->episode_number }}</span>
              <h4>{{ $episode->title }}</h4>
              <span class="pod-date">{{ $episode->publish_date }}</span>
            </div>
          </div>
          @endforeach
          <button class="pod-grid-next"><svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
        </div>
      </div>
      @empty
      <p style="text-align: center; color: #64748b; padding: 40px;">Belum ada episode podcast.</p>
      @endforelse

    </div>
  </section>

  <!-- PLATFORMS (LIGHT) -->
  <section class="pod-platforms">
    <div class="pod-plat-container">
      <div class="pod-plat-info">
        <span class="plat-badge">{{ $settings['podcast_platform_badge'] ?? 'ALSO AVAILABLE ON' }}</span>
        <h3>{{ $settings['podcast_platform_title'] ?? 'Listen Anytime, Anywhere' }}</h3>
        <p>{{ $settings['podcast_platform_desc'] ?? 'Subscribe and listen on your favorite platform.' }}</p>
      </div>
      <div class="pod-plat-links">
        @if(isset($settings['podcast_spotify_url']) && $settings['podcast_spotify_url'])
        <a href="{{ $settings['podcast_spotify_url'] }}" class="plat-link" target="_blank">
          <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify">
          <div class="plat-text">
            <span>Spotify</span>
            <p>Listen on Spotify &rarr;</p>
          </div>
        </a>
        @endif
        @if(isset($settings['podcast_youtube_url']) && $settings['podcast_youtube_url'])
        <a href="{{ $settings['podcast_youtube_url'] }}" class="plat-link" target="_blank" style="margin-top: 15px;">
          <svg viewBox="0 0 24 24" width="40" height="40" fill="#FF0000"><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
          <div class="plat-text">
            <span>YouTube</span>
            <p>Watch on YouTube &rarr;</p>
          </div>
        </a>
        @endif
      </div>
    </div>
  </section>
</main>

<script>
  function loadFeaturedVideo(youtubeId) {
    const container = document.getElementById('featured-video-container');
    const id = youtubeId || 'dQw4w9WgXcQ';
    container.innerHTML = `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${id}?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>`;
    container.onclick = null;
    container.style.cursor = 'default';
  }
</script>
@endsection
