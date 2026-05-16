@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-services'])

@section('title', 'Services | KSP Consulting')

@section('content')
<!-- SERVICES SECTION -->
<section id="services" class="services-section" role="region" aria-label="Our Services">
  <div class="services-container">
    <div class="services-header">
      <span class="section-subtitle">OUR SERVICES</span>
      <h2 class="section-title">Solutions that drive<br>operational excellence</h2>
      <p class="section-desc">
        KSP Consulting provides integrated consulting services to help maritime<br>
        and industrial businesses overcome challenges and achieve sustainable<br>
        growth through practical and measurable solutions.
      </p>
    </div>

    <div class="services-grid">
      <!-- Service Card 1 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
          </div>
          <span class="card-number">01</span>
        </div>
        <h3 class="card-title">Maritime Consulting</h3>
        <p class="card-desc">Strategic maritime consulting services designed to support operational excellence, compliance, efficiency, and sustainable business growth.</p>
        <button class="learn-more-btn" data-modal="modal-maritime">
          Learn more <span class="arrow">&rarr;</span>
        </button>
      </div>
      <!-- Service Card 2 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div>
          <span class="card-number">02</span>
        </div>
        <h3 class="card-title">Risk Assessment</h3>
        <p class="card-desc">Comprehensive safety and operational risk assessments for maritime and industrial operations.</p>
        <button class="learn-more-btn" data-modal="modal-maritime">
          Learn more <span class="arrow">&rarr;</span>
        </button>
      </div>
       <!-- Service Card 3 -->
       <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
          <span class="card-number">03</span>
        </div>
        <h3 class="card-title">Vessel Inspection</h3>
        <p class="card-desc">Professional vessel inspection services to ensure operational readiness and regulatory compliance.</p>
        <button class="learn-more-btn" data-modal="modal-maritime">
          Learn more <span class="arrow">&rarr;</span>
        </button>
      </div>
      <!-- Service Card 4 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
          <span class="card-number">04</span>
        </div>
        <h3 class="card-title">HR Assessment</h3>
        <p class="card-desc">Assessment and profiling systems designed to improve workforce capability and organizational performance.</p>
        <button class="learn-more-btn" data-modal="modal-maritime">
          Learn more <span class="arrow">&rarr;</span>
        </button>
      </div>
      <!-- Service Card 5 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
          <span class="card-number">05</span>
        </div>
        <h3 class="card-title">Workshop & Training</h3>
        <p class="card-desc">Practical training programs designed to strengthen capability, compliance, and operational standards.</p>
        <button class="learn-more-btn" data-modal="modal-maritime">
          Learn more <span class="arrow">&rarr;</span>
        </button>
      </div>
      <!-- Service Card 6 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><circle cx="10" cy="13" r="2"></circle><line x1="11.5" y1="14.5" x2="14" y2="17"></line></svg></div>
          <span class="card-number">06</span>
        </div>
        <h3 class="card-title">Due Diligence</h3>
        <p class="card-desc">Strategic due diligence support for acquisitions, operational reviews, and business evaluation.</p>
        <button class="learn-more-btn" data-modal="modal-maritime">
          Learn more <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>

    <!-- Stats Banner -->
    <div class="services-stats-banner">
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
        <div class="stat-text">
          <h4>15+</h4>
          <p>Ship Management<br>Entities Assessed</p>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
        <div class="stat-text">
          <h4>2017-2025</h4>
          <p>Maritime Assessment &<br>Consulting Experience</p>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></div>
        <div class="stat-text">
          <h4>Multiple</h4>
          <p>TMSA Gap Assessments &<br>Implementations</p>
        </div>
      </div>
      <div class="stat-item">
        <div class="stat-icon"><svg viewBox="0 0 24 24" width="32" height="32" stroke="var(--navy-mid)" stroke-width="1.5" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg></div>
        <div class="stat-text">
          <h4>Trusted</h4>
          <p>By Leading Maritime &<br>Industrial Organizations</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- SERVICE UNIQUE MODAL -->
<div class="service-modal-overlay" id="modal-maritime">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Maritime Ship Image">
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
        </div>
        <span class="modal-number">02</span>
      </div>
      <h2 class="modal-title">Maritime Consulting</h2>
      <p class="modal-desc">Strategic maritime consulting services designed to support operational excellence, compliance, efficiency, and sustainable business growth.</p>
      
      <hr class="modal-divider">
      
      <ul class="modal-features-list">
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
          <div class="feat-text">
            <h4>Operational Strategy</h4>
            <p>Developing practical strategies that improve performance and support long-term operational goals.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
          <div class="feat-text">
            <h4>Maritime Compliance</h4>
            <p>Ensuring compliance with international regulations and industry standards.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg></div>
          <div class="feat-text">
            <h4>Business Improvement</h4>
            <p>Identifying opportunities and implementing solutions that drive efficiency and value.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
          <div class="feat-text">
            <h4>Safety Culture Implementation</h4>
            <p>Building a strong safety culture through engagement, processes, and continuous improvement.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
