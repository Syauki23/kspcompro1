@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-contact'])

@section('title', 'Contact Us | KSP Consulting')

@section('content')
<style>
  .contact-banner-wrapper {
    position: relative;
    width: 100%;
    min-height: 450px;
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 160px 40px 60px;
  }
  .contact-banner-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
  }
  .contact-banner-bg img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center right;
  }
  .contact-banner-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    background: linear-gradient(
      to right,
      rgba(8, 18, 38, 0.97) 0%,
      rgba(8, 18, 38, 0.88) 35%,
      rgba(8, 18, 38, 0.6) 65%,
      rgba(8, 18, 38, 0.2) 85%,
      transparent 100%
    );
  }
  .contact-banner-container {
    position: relative;
    z-index: 3;
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
  }
  .contact-banner-content {
    max-width: 650px;
    text-align: left;
  }
  .cb-title {
    font-size: clamp(34px, 4.2vw, 54px);
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: -0.5px;
    margin-bottom: 16px;
  }
  .cb-title .line-white {
    color: var(--white);
    display: block;
  }
  .cb-title .line-orange {
    color: var(--primary-orange);
    display: block;
  }
  .cb-desc {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.65;
    color: #cbd5e1;
    margin-bottom: 0;
    max-width: 520px;
    padding-left: 14px;
    border-left: 2px solid rgba(255, 255, 255, 0.3);
  }
  @media (max-width: 768px) {
    .contact-banner-overlay {
      background: linear-gradient(
        to right,
        rgba(8, 18, 38, 0.98) 0%,
        rgba(8, 18, 38, 0.95) 70%,
        rgba(8, 18, 38, 0.8) 100%
      );
    }
    .contact-banner-wrapper {
      padding: 130px 24px 50px;
      min-height: auto;
    }
  }
</style>

<header class="contact-banner-wrapper">
  <div class="contact-banner-bg">
    <img src="{{ asset('assets/bg-ship.jpg') }}" alt="Strategic Solutions for Maritime Excellence">
  </div>
  <div class="contact-banner-overlay"></div>
  
  <div class="contact-banner-container">
    <div class="contact-banner-content">
      <h1 class="cb-title">
        <span class="line-white">Strategic Solutions for</span>
        <span class="line-orange">Maritime Excellence</span>
      </h1>
      <p class="cb-desc">
        Knowledge-driven consulting to help maritime and industrial businesses operate safely, efficiently, and sustainably.
      </p>
    </div>
  </div>
</header>

<section class="inline-contact-section" style="padding: 80px 40px 120px; border-bottom: none;">
  <div class="ic-container">
    <!-- Left Column: Information -->
    <div class="ic-info-col">
      <span class="ic-subtitle">GET IN TOUCH</span>
      <h2 class="ic-title">Let's Start a Conversation</h2>
      <p class="ic-desc">Have a question or need more information? We're here to help.</p>
      
      <ul class="ic-contact-list">
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <span>+62 878 8023 1853</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <span>info@ksp-consulting.com</span>
        </li>
        <li>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span>Jakarta, Indonesia</span>
        </li>
      </ul>
    </div>

    <!-- Middle Column: Inline Form -->
    <div class="ic-form-col">
      <form class="ic-form" onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent successfully.');">
        <div class="ic-form-row">
          <input type="text" class="ic-input" placeholder="Full Name" required>
          <input type="text" class="ic-input" placeholder="Company" required>
        </div>
        <div class="ic-form-row">
          <input type="email" class="ic-input" placeholder="Email" required>
          <input type="tel" class="ic-input" placeholder="Phone" required>
        </div>
        <textarea class="ic-textarea" placeholder="Your Message" required></textarea>
        <button type="submit" class="ic-btn-submit">
          <span>Send Message &rarr;</span>
        </button>
      </form>
    </div>

    <!-- Right Column: Visual Photo Card -->
    <div class="ic-image-col">
      <img src="https://images.unsplash.com/photo-1503945438517-f65904a52ce6?auto=format&fit=crop&w=600&q=80" alt="Maritime Professionals">
      <div class="ic-image-overlay">
        <p>We value every conversation and look forward to supporting your business.</p>
        <div class="ic-image-line"></div>
      </div>
    </div>
  </div>
</section>
@endsection
