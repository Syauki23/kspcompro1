<div class="navbar-wrapper" id="navbar-wrapper">
<nav class="navbar {{ $navbarClass ?? '' }}" id="main-navbar" role="navigation" aria-label="Main navigation">

  <!-- Logo -->
  <a href="{{ url('/') }}" class="navbar-logo" aria-label="KSP Consulting Home">
    @if(isset($globalSettings['site_logo']) && $globalSettings['site_logo'])
      <img src="{{ str_starts_with($globalSettings['site_logo'], 'http') ? $globalSettings['site_logo'] : Storage::url($globalSettings['site_logo']) }}" alt="KSP Consulting Logo" class="main-logo">
    @else
      <img src="{{ asset('assets/KSP logo Transparant White -1.png') }}" alt="KSP Consulting Logo" class="main-logo">
    @endif
  </a>

  <!-- Nav Links -->
  <ul class="navbar-nav" role="list">
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
      <a href="{{ url('/') }}" id="nav-home">Home</a>
    </li>
    <li class="nav-item dropdown {{ Request::is('about') || Request::is('experience') || Request::is('philosophy') ? 'active' : '' }}">
      <a href="{{ url('/about') }}" id="nav-company">
        Company
        <span class="nav-dropdown-icon">&#9662;</span>
      </a>
      <ul class="dropdown-menu">
        <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About Us</a></li>
        <li class="{{ Request::is('experience') ? 'active' : '' }}"><a href="{{ url('/experience') }}">Our Experience</a></li>
        <li class="{{ Request::is('philosophy') ? 'active' : '' }}"><a href="{{ url('/philosophy') }}">Philosophy &amp; Culture</a></li>
      </ul>
    </li>
    <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
      <a href="{{ url('/services') }}" id="nav-services">Services</a>
    </li>
    <li class="nav-item {{ Request::is('training') ? 'active' : '' }}">
      <a href="{{ url('/training') }}" id="nav-training">Training</a>
    </li>
    <li class="nav-item {{ Request::is('podcast') ? 'active' : '' }}">
      <a href="{{ url('/podcast') }}" id="nav-podcast">Podcast</a>
    </li>
    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
      <a href="{{ url('/contact') }}" id="nav-contact">Contact</a>
    </li>
  </ul>

  <!-- Right Side: CTA -->
  <div class="navbar-right">
    <!-- CTA Button -->
    <button class="btn-consult" id="nav-cta-btn" type="button">
      Consult With Us
    </button>
  </div>
</nav>
</div>
