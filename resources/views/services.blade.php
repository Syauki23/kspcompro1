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
        </div>
        <h3 class="card-title">Maritime Consulting</h3>
        <p class="card-desc">Strategic maritime consulting services designed to support operational excellence, compliance, efficiency, and sustainable business growth.</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-maritime">
            Learn more <span class="arrow">&rarr;</span>
          </button>
          <button class="btn-consult card-inquire-btn" data-service="Maritime Consulting">
            Inquire Now
          </button>
        </div>
      </div>
      <!-- Service Card 2 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div>
        </div>
        <h3 class="card-title">Risk Assessment</h3>
        <p class="card-desc">Comprehensive safety and operational risk assessments for maritime and industrial operations.</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-risk">
            Learn more <span class="arrow">&rarr;</span>
          </button>
          <button class="btn-consult card-inquire-btn" data-service="Risk Assessment">
            Inquire Now
          </button>
        </div>
      </div>
       <!-- Service Card 3 -->
       <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
        </div>
        <h3 class="card-title">Vessel Inspection</h3>
        <p class="card-desc">Professional vessel inspection services to ensure operational readiness and regulatory compliance.</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-vessel">
            Learn more <span class="arrow">&rarr;</span>
          </button>
          <button class="btn-consult card-inquire-btn" data-service="Vessel Inspection">
            Inquire Now
          </button>
        </div>
      </div>
      <!-- Service Card 4 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
        </div>
        <h3 class="card-title">HR Assessment</h3>
        <p class="card-desc">Assessment and profiling systems designed to improve workforce capability and organizational performance.</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-hr">
            Learn more <span class="arrow">&rarr;</span>
          </button>
          <button class="btn-consult card-inquire-btn" data-service="HR Assessment">
            Inquire Now
          </button>
        </div>
      </div>
      <!-- Service Card 5 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg></div>
        </div>
        <h3 class="card-title">Workshop & Training</h3>
        <p class="card-desc">Practical training programs designed to strengthen capability, compliance, and operational standards.</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-workshop">
            Learn more <span class="arrow">&rarr;</span>
          </button>
          <button class="btn-consult card-inquire-btn" data-service="Workshop & Training">
            Inquire Now
          </button>
        </div>
      </div>
      <!-- Service Card 6 -->
      <div class="service-card">
        <div class="card-top">
          <div class="card-icon"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><circle cx="10" cy="13" r="2"></circle><line x1="11.5" y1="14.5" x2="14" y2="17"></line></svg></div>
        </div>
        <h3 class="card-title">Due Diligence</h3>
        <p class="card-desc">Strategic due diligence support for acquisitions, operational reviews, and business evaluation.</p>
        <div class="card-actions">
          <button class="learn-more-btn" data-modal="modal-due-diligence">
            Learn more <span class="arrow">&rarr;</span>
          </button>
          <button class="btn-consult card-inquire-btn" data-service="Due Diligence">
            Inquire Now
          </button>
        </div>
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

<!-- SERVICE UNIQUE MODALS -->

<!-- 1. Maritime Consulting Modal -->
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

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="Maritime Consulting">
          Inquire for Maritime Consulting
        </button>
      </div>
    </div>
  </div>
</div>

<!-- 2. Risk Assessment Modal -->
<div class="service-modal-overlay" id="modal-risk">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Risk Assessment Image">
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
        </div>
      </div>
      <h2 class="modal-title">Risk Assessment</h2>
      <p class="modal-desc">Comprehensive safety and operational risk assessments for maritime and industrial operations.</p>
      
      <hr class="modal-divider">
      
      <ul class="modal-features-list">
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div>
          <div class="feat-text">
            <h4>Hazard Identification</h4>
            <p>Systematic mapping of operational and workplace hazards to prevent accidents.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><polyline points="22 11.08 12 19 9 16"></polyline></svg></div>
          <div class="feat-text">
            <h4>Risk Mitigation</h4>
            <p>Designing practical controls and standard practices to reduce risk levels.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg></div>
          <div class="feat-text">
            <h4>Compliance Audits</h4>
            <p>Verification against national and international industrial safety regulations.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
          <div class="feat-text">
            <h4>Safety Management</h4>
            <p>Standardizing emergency response workflows and dynamic contingency planning.</p>
          </div>
        </li>
      </ul>

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="Risk Assessment">
          Inquire for Risk Assessment
        </button>
      </div>
    </div>
  </div>
</div>

<!-- 3. Vessel Inspection Modal -->
<div class="service-modal-overlay" id="modal-vessel">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Vessel Inspection Image">
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
        </div>
      </div>
      <h2 class="modal-title">Vessel Inspection</h2>
      <p class="modal-desc">Professional vessel inspection services to ensure operational readiness and regulatory compliance.</p>
      
      <hr class="modal-divider">
      
      <ul class="modal-features-list">
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg></div>
          <div class="feat-text">
            <h4>Pre-purchase Inspections</h4>
            <p>Detailed condition and capability evaluations for informed acquisition decisions.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></div>
          <div class="feat-text">
            <h4>SIRE/OVID Prep</h4>
            <p>Mock vetting inspections to ensure seamless compliance approvals.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg></div>
          <div class="feat-text">
            <h4>Technical Audits</h4>
            <p>Rigorous examination of machinery, structure, and essential onboard safety gear.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line></svg></div>
          <div class="feat-text">
            <h4>Cargo & Operations</h4>
            <p>Assessment of cargo handling systems and technical stability management.</p>
          </div>
        </li>
      </ul>

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="Vessel Inspection">
          Inquire for Vessel Inspection
        </button>
      </div>
    </div>
  </div>
</div>

<!-- 4. HR Assessment Modal -->
<div class="service-modal-overlay" id="modal-hr">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="HR Assessment Image">
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
        </div>
      </div>
      <h2 class="modal-title">HR Assessment</h2>
      <p class="modal-desc">Assessment and profiling systems designed to improve workforce capability and organizational performance.</p>
      
      <hr class="modal-divider">
      
      <ul class="modal-features-list">
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5-2 4-2 4 2 4 2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></div>
          <div class="feat-text">
            <h4>Competency Profiling</h4>
            <p>Objective evaluation of crew operational skills and maritime knowledge parameters.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></div>
          <div class="feat-text">
            <h4>Psychometric Testing</h4>
            <p>Assessing crucial behavioral traits and decision-making under high-stress conditions.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg></div>
          <div class="feat-text">
            <h4>Leadership Assessment</h4>
            <p>Thorough evaluation of the leadership and management capabilities of senior officers.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></div>
          <div class="feat-text">
            <h4>Training Gap Analysis</h4>
            <p>Pinpointing specific organizational training needs for continuous human resource improvements.</p>
          </div>
        </li>
      </ul>

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="HR Assessment">
          Inquire for HR Assessment
        </button>
      </div>
    </div>
  </div>
</div>

<!-- 5. Workshop & Training Modal -->
<div class="service-modal-overlay" id="modal-workshop">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Workshop & Training Image">
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
        </div>
      </div>
      <h2 class="modal-title">Workshop & Training</h2>
      <p class="modal-desc">Practical training programs designed to strengthen capability, compliance, and operational standards.</p>
      
      <hr class="modal-divider">
      
      <ul class="modal-features-list">
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg></div>
          <div class="feat-text">
            <h4>Custom Curriculums</h4>
            <p>Tailored educational material fully aligned with specific corporate operational needs.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></div>
          <div class="feat-text">
            <h4>Interactive Delivery</h4>
            <p>Engaging case studies, hands-on casualty analyses, and active learning models.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></div>
          <div class="feat-text">
            <h4>Compliance & Standards</h4>
            <p>High-quality courses updated and mapped to international STCW & vetting codes.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg></div>
          <div class="feat-text">
            <h4>Performance Reviews</h4>
            <p>Integrated metric reports to evaluate student performance and retention outcomes.</p>
          </div>
        </li>
      </ul>

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="Workshop & Training">
          Inquire for Workshop & Training
        </button>
      </div>
    </div>
  </div>
</div>

<!-- 6. Due Diligence Modal -->
<div class="service-modal-overlay" id="modal-due-diligence">
  <div class="service-modal-container">
    <button class="modal-close-btn" aria-label="Close modal">&times;</button>
    <div class="modal-left-img">
      <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Due Diligence Image">
    </div>
    <div class="modal-right-content">
      <div class="modal-header-top">
        <div class="modal-icon-bg">
          <svg viewBox="0 0 24 24" width="24" height="24" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><circle cx="10" cy="13" r="2"></circle><line x1="11.5" y1="14.5" x2="14" y2="17"></line></svg>
        </div>
      </div>
      <h2 class="modal-title">Due Diligence</h2>
      <p class="modal-desc">Strategic due diligence support for acquisitions, operational reviews, and business evaluation.</p>
      
      <hr class="modal-divider">
      
      <ul class="modal-features-list">
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></div>
          <div class="feat-text">
            <h4>Technical Due Diligence</h4>
            <p>Independent evaluation of asset conditions before commercial deals.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></div>
          <div class="feat-text">
            <h4>Regulatory Review</h4>
            <p>Thorough investigation of compliance history, active liabilities, and legal certification.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
          <div class="feat-text">
            <h4>Operational Audit</h4>
            <p>In-depth assessment of fleet management structures and overall operational efficiency.</p>
          </div>
        </li>
        <li>
          <div class="feat-icon"><svg viewBox="0 0 24 24" width="20" height="20" stroke="var(--primary-orange)" stroke-width="2" fill="none"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg></div>
          <div class="feat-text">
            <h4>Strategic Risk Analysis</h4>
            <p>Auditing the long-term economic viability, lifecycle maintenance costs, and market suitability.</p>
          </div>
        </li>
      </ul>

      <div class="modal-cta-wrap">
        <button class="btn-consult modal-inquire-btn" data-service="Due Diligence">
          Inquire for Due Diligence
        </button>
      </div>
    </div>
  </div>
</div>
@endsection
