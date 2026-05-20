@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-about'])

@section('title', 'About Us | KSP Consulting')

@section('content')
<!-- ABOUT SECTION -->
<section id="about" class="about-section" role="region" aria-label="About Us">
  <div class="about-container">
    
    <!-- Text Column -->
    <div class="about-text-col">
      <span class="about-subtitle">WHO WE ARE</span>
      <h1 class="about-title">About KSP Consulting</h1>
      
      <div class="about-desc">
        <p>
          KSP Consulting (Karya Swarna Persada) is a consulting firm dedicated to helping businesses navigate operational and organizational challenges through innovative, practical, and sustainable solutions.
        </p>
        <p>
          With expertise in maritime consulting, business management, technical training, risk assessment, and transportation consultancy, KSP Consulting supports companies in achieving operational excellence and long-term growth.
        </p>
        <p>
          Driven by integrity, connectivity, and excellence, the company believes strong partnerships create sustainable impact across industries.
        </p>
      </div>

      <!-- Inline Stats -->
      <div class="about-stats">
        <div class="about-stat-item">
          <div class="stat-icon-wrapper">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
          <h4>15+</h4>
          <p>Ship Management<br>Entities Assessed</p>
        </div>
        <div class="about-stat-item">
          <div class="stat-icon-wrapper">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          </div>
          <h4>Since 2017</h4>
          <p>Maritime Assessment &<br>Consulting Experience</p>
        </div>
        <div class="about-stat-item">
          <div class="stat-icon-wrapper">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </div>
          <h4>Multiple</h4>
          <p>Industries Served<br>Across Indonesia</p>
        </div>
      </div>
    </div>

    <!-- Image Grid Column -->
    <div class="about-image-col">
      <div class="about-img-grid">
        <div class="about-img item-meeting">
         <img src="{{ asset('assets/training.png') }}" alt="Training Session Background">
        </div>
        <div class="about-img item-man-ship">
         <img src="{{ asset('assets/uuuaaa.png') }}" alt="Training Session Background">
        </div>
        <div class="about-img item-hard-hats">
         <img src="{{ asset('assets/uuu.png') }}" alt="Training Session Background">
        </div>
        <div class="about-img item-woman-laptop">
         <img src="{{ asset('assets/about.png') }}" alt="Training Session Background">
        </div>
        <div class="about-img item-ship-bridge">
          <img src="https://images.unsplash.com/photo-1559128010-7c1ad6e1b6a5?auto=format&fit=crop&w=800&q=80" alt="Ship bridge">
        </div>
      </div>
    </div>

  </div>

  <!-- Core Values Banner -->
  <div class="core-values-wrapper">
    <h3 class="core-values-title">OUR CORE VALUES</h3>
    <div class="core-values-grid">
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M12 8v4l3 3"></path></svg>
        </div>
        <h4>INTEGRITY</h4>
        <p>We uphold honesty, transparency, and ethical standards in everything we do.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path><circle cx="12" cy="5" r="1"></circle></svg>
        </div>
        <h4>CONNECTIVITY</h4>
        <p>We build meaningful connections that create value for our clients, partners, and communities.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        </div>
        <h4>EXCELLENCE</h4>
        <p>We are committed to delivering high-quality solutions and continuous improvement.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
        <h4>COLLABORATION</h4>
        <p>We believe the best results come from teamwork, trust, and shared goals.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><path d="M9 21h6"></path><path d="M12 21v-4"></path><path d="M12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10z"></path></svg>
        </div>
        <h4>INNOVATION</h4>
        <p>We embrace new ideas and practical approaches to solve complex challenges.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
        </div>
        <h4>IMPACT</h4>
        <p>We focus on creating sustainable impact that drives long-term growth.</p>
      </div>
    </div>
  </div>
</section>
@endsection
