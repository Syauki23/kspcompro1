@extends('layouts.app', ['navbarClass' => 'navbar', 'bodyClass' => 'page-training'])

@section('title', 'Training & Knowledge Sharing | KSP Consulting')

@section('content')
<header class="train-hero">
  <div class="train-hero-bg">
    <img src="{{ asset('assets/training.png') }}" alt="Training Session Background">
    <div class="train-hero-overlay"></div>
  </div>
  
  <div class="train-hero-container">
    <div class="train-hero-content">
      <div class="train-subtitle-wrap">
        <span class="train-subtitle">OUR TRAINING & KNOWLEDGE SHARING</span>
        <div class="train-subtitle-line"></div>
      </div>
      <h1 class="train-title">Training &<br><span class="train-title-accent">Knowledge Sharing</span></h1>
      <p class="train-desc">KSP Consulting actively contributes to industry<br>development through workshops, coaching<br>programs, technical training, and speaking<br>engagements.</p>
    </div>
  </div>

  <!-- Features Bottom Strip -->
  <div class="train-features-strip">
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      <div class="train-feature-text">
        <h4>Industry Experts</h4>
        <p>Delivered by practitioners</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
      <div class="train-feature-text">
        <h4>Practical Learning</h4>
        <p>Real case studies & best practices</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
      <div class="train-feature-text">
        <h4>Actionable Insights</h4>
        <p>Tools & strategies you can apply</p>
      </div>
    </div>
    <div class="train-feature-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      <div class="train-feature-text">
        <h4>Trusted Partner</h4>
        <p>Commitment to safety & quality</p>
      </div>
    </div>
  </div>
</header>

<section class="train-topics-section">
  <div class="train-section-header">
    <div class="train-section-title-wrap">
      <span class="train-line"></span>
      <h2 class="train-section-title">Our Training & Workshop Topics</h2>
      <span class="train-line"></span>
    </div>
    <p class="train-section-subtitle">Comprehensive programs designed to enhance knowledge, build capability, and drive operational excellence.</p>
  </div>

  <div class="train-topics-grid">
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg></div>
      <span class="train-topic-num">01</span>
      <h3 class="train-topic-title">TMSA & SIRE 2.0 Coaching</h3>
      <p class="train-topic-desc">Gap assessment, preparation & continuous improvement coaching.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="TMSA & SIRE 2.0 Coaching">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></div>
      <span class="train-topic-num">02</span>
      <h3 class="train-topic-title">Marine Casualty Investigation</h3>
      <p class="train-topic-desc">Root cause analysis and investigation techniques for incidents.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="Marine Casualty Investigation">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="5" r="3"></circle><line x1="12" y1="22" x2="12" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg></div>
      <span class="train-topic-num">03</span>
      <h3 class="train-topic-title">Port Risk Management</h3>
      <p class="train-topic-desc">Risk assessment and control strategies for port and terminal operations.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="Port Risk Management">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg></div>
      <span class="train-topic-num">04</span>
      <h3 class="train-topic-title">Hazard Identification</h3>
      <p class="train-topic-desc">Systematic hazard identification for safer work environments.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="Hazard Identification">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg></div>
      <span class="train-topic-num">05</span>
      <h3 class="train-topic-title">Terminal Tanker Inspection</h3>
      <p class="train-topic-desc">Inspection techniques and best practices for terminal and tanker operations.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="Terminal Tanker Inspection">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></div>
      <span class="train-topic-num">06</span>
      <h3 class="train-topic-title">ISM Code Management</h3>
      <p class="train-topic-desc">Implementation, auditing and improvement of ISM systems.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="ISM Code Management">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg></div>
      <span class="train-topic-num">07</span>
      <h3 class="train-topic-title">ISPS Inspection</h3>
      <p class="train-topic-desc">Security inspection techniques and compliance with ISPS requirements.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="ISPS Inspection">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></div>
      <span class="train-topic-num">08</span>
      <h3 class="train-topic-title">MARPOL 73/78</h3>
      <p class="train-topic-desc">Understanding regulations and ensuring environmental compliance.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="MARPOL 73/78">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
      <span class="train-topic-num">09</span>
      <h3 class="train-topic-title">Marine Labor Convention (MLC) 2006</h3>
      <p class="train-topic-desc">Key requirements and implementation guidance for MLC compliance.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="Marine Labor Convention (MLC) 2006">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
    <div class="train-topic-card">
      <div class="train-topic-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>
      <span class="train-topic-num">10</span>
      <h3 class="train-topic-title">Safety Management Systems</h3>
      <p class="train-topic-desc">Building and maintaining effective SMS for continuous safety performance.</p>
      <div class="train-topic-action">
        <button class="btn-consult topic-action-btn" data-workshop="Safety Management Systems">
          Inquire Now <span class="arrow">&rarr;</span>
        </button>
      </div>
    </div>
  </div>
</section>

<section class="train-events-section">
  <div class="train-split-header">
    <h3>Recent Workshop & Training Recap</h3>
    <a href="#" class="view-link">View all events &rarr;</a>
  </div>
  
  <div class="train-events-carousel-wrapper">
    <div class="train-events-grid">
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">24</span>
            <span class="te-mo">APR<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">TMSA & SIRE 2.0 Coaching Program</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Jakarta, Indonesia</p>
          </div>
        </div>
      </div>
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">15</span>
            <span class="te-mo">JUN<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">Marine Casualty Investigation Workshop</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Surabaya, Indonesia</p>
          </div>
        </div>
      </div>
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1540317580384-e5d43616b9aa?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">10</span>
            <span class="te-mo">SEP<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">Port Risk Management Training</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Batam, Indonesia</p>
          </div>
        </div>
      </div>
      <div class="train-event-card">
        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=400&q=80" alt="Event Image" class="te-img">
        <div class="te-content">
          <div class="te-date">
            <span class="te-day">22</span>
            <span class="te-mo">NOV<br>2024</span>
          </div>
          <div class="te-info">
            <h4 class="te-title">ISM Code Management Workshop</h4>
            <p class="te-loc"><svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Jakarta, Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    <button class="train-events-next" aria-label="Next Events">
      <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
    </button>
  </div>
</section>
@endsection
