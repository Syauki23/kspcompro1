@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-experience'])

@section('title', 'Experience | KSP Consulting')

@section('content')
<section class="exp-hero-section">
  <div class="exp-hero-container">
    <div class="exp-hero-content">
      <span class="exp-subtitle">OUR EXPERIENCE</span>
      <h1 class="exp-title">Our Experiences</h1>
      <div class="exp-title-decor"></div>
      <p class="exp-desc">
        Our team has contributed to multiple maritime<br>
        consulting, assessment, operational improvement,<br>
        and safety projects across industries.
      </p>
    </div>
  </div>
</section>

<section class="exp-timeline-section">
  <div class="exp-cards-grid">
    <div class="exp-card">
      <div class="exp-card-icon style-navy">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
      </div>
      <div class="exp-card-year">2017–2024</div>
      <div class="exp-card-title">TMSA Gap Assessment & Implementation</div>
    </div>

    <div class="exp-card">
      <div class="exp-card-icon style-orange">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      </div>
      <div class="exp-card-year">2023–2024</div>
      <div class="exp-card-title">Several HR Assessment Projects</div>
    </div>

    <div class="exp-card">
      <div class="exp-card-icon style-navy">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="4" y="2" width="16" height="20" rx="2"></rect><line x1="12" y1="18" x2="12" y2="22"></line><line x1="9" y1="6" x2="9.01" y2="6"></line><line x1="15" y1="6" x2="15.01" y2="6"></line><line x1="9" y1="10" x2="9.01" y2="10"></line><line x1="15" y1="10" x2="15.01" y2="10"></line><line x1="9" y1="14" x2="9.01" y2="14"></line><line x1="15" y1="14" x2="15.01" y2="14"></line></svg>
      </div>
      <div class="exp-card-year">2023</div>
      <div class="exp-card-title">Assessment & Profiling for 15+ Ship Management Entities</div>
    </div>

    <div class="exp-card">
      <div class="exp-card-icon style-orange">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><polyline points="9 12 11 14 15 10"></polyline></svg>
      </div>
      <div class="exp-card-year">2023</div>
      <div class="exp-card-title">Marine & Safety Studies</div>
      <div class="exp-card-bullets">
        <ul>
          <li>HAZID</li>
          <li>HAZOP</li>
          <li>Vessel Traffic Services feasibility study</li>
        </ul>
      </div>
    </div>

    <div class="exp-card">
      <div class="exp-card-icon style-navy">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><circle cx="11.5" cy="14.5" r="2.5"></circle><line x1="13.25" y1="16.25" x2="15.5" y2="18.5"></line></svg>
      </div>
      <div class="exp-card-year">2024</div>
      <div class="exp-card-title">Due Diligence for Company Acquisition</div>
    </div>

    <div class="exp-card">
      <div class="exp-card-icon style-orange">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M2 12h20"></path><path d="M20 12v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-3"></path><path d="M12 12V5"></path><path d="M8 5h8"></path><path d="M10 8h4"></path></svg>
      </div>
      <div class="exp-card-year">2025</div>
      <div class="exp-card-title">Bulk Carrier Vessel Inspection</div>
    </div>
  </div>

  <div class="exp-timeline-track">
    <div class="exp-timeline-line"></div>
    <div class="exp-timeline-nodes">
      <div class="exp-node-col"><div class="exp-dot dot-navy"></div></div>
      <div class="exp-node-col"><div class="exp-dot dot-orange"></div></div>
      <div class="exp-node-col"><div class="exp-dot dot-navy"></div></div>
      <div class="exp-node-col"><div class="exp-dot dot-orange"></div></div>
      <div class="exp-node-col"><div class="exp-dot dot-navy"></div></div>
      <div class="exp-node-col"><div class="exp-dot dot-orange"></div></div>
    </div>
  </div>
</section>

<section class="exp-stats-footer">
  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>15+</h4>
      <p>Ship Management<br>Entities Assessed</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
    </div>
    <div class="exp-stat-info">
      <h4>30+</h4>
      <p>Projects Completed<br>Successfully</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>8+</h4>
      <p>Years of Consulting<br>Experience</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>100%</h4>
      <p>Commitment to Safety,<br>Quality & Integrity</p>
    </div>
  </div>

  <div class="exp-stat-item">
    <div class="exp-stat-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5"></path><path d="M2 12l10 5 10-5"></path></svg>
    </div>
    <div class="exp-stat-info">
      <h4>Multiple</h4>
      <p>Industries Served<br>Across Indonesia</p>
    </div>
  </div>
</section>
@endsection
