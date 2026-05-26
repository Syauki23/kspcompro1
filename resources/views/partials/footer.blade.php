<footer class="main-footer">

  <!-- Decorative top gradient border -->
  <div class="footer-top-glow" aria-hidden="true"></div>

  <div class="footer-container">


    <!-- ── MAIN GRID ─────────────────────────── -->
    <div class="footer-grid">

      <!-- Brand Column -->
      <div class="footer-col brand-col">
        <a href="{{ url('/') }}" class="footer-logo-link">
          @if(isset($globalSettings['site_logo']) && $globalSettings['site_logo'])
            <img src="{{ str_starts_with($globalSettings['site_logo'], 'http') ? $globalSettings['site_logo'] : Storage::url($globalSettings['site_logo']) }}" alt="KSP Consulting Logo" class="footer-logo">
          @else
            <img src="{{ asset('assets/KSP logo Transparant White -1.png') }}" alt="KSP Consulting Logo" class="footer-logo">
          @endif
        </a>
        <p class="footer-desc">
          Knowledge-driven consulting for maritime &amp; industrial excellence. We help you navigate complexity and achieve sustainable success.
        </p>

        <!-- Stats mini -->
        <div class="footer-stats-row">
          <div class="footer-stat-item">
            <span class="footer-stat-num">50<span class="footer-stat-plus">+</span></span>
            <span class="footer-stat-label">Clients</span>
          </div>
          <div class="footer-stat-divider" aria-hidden="true"></div>
          <div class="footer-stat-item">
            <span class="footer-stat-num">15<span class="footer-stat-plus">+</span></span>
            <span class="footer-stat-label">Years Exp.</span>
          </div>
          <div class="footer-stat-divider" aria-hidden="true"></div>
          <div class="footer-stat-item">
            <span class="footer-stat-num">100<span class="footer-stat-plus">%</span></span>
            <span class="footer-stat-label">Satisfied</span>
          </div>
        </div>

        <!-- Social Icons -->
        <div class="footer-socials">
          <a href="{{ $globalSettings['social_instagram'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="Instagram" title="Instagram">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
          </a>
          <a href="{{ $globalSettings['social_linkedin'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="LinkedIn" title="LinkedIn">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
          </a>
          <a href="{{ $globalSettings['social_youtube'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="YouTube" title="YouTube">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </a>
          <a href="{{ $globalSettings['social_spotify'] ?? '#' }}" target="_blank" rel="noopener noreferrer" class="footer-social-btn footer-social-spotify" aria-label="Spotify" title="Spotify">
            <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.54.66.3 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.02.6-1.141C9.6 9.9 15.001 10.62 18.66 12.84c.42.24.54.84.3 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.781-.18-.6.18-1.2.78-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.239.54-.959.72-1.5.42z"/></svg>
          </a>
        </div>
      </div>

      <!-- Services Column -->
      <div class="footer-col links-col">
        <h4 class="footer-heading">
          <span class="footer-heading-line" aria-hidden="true"></span>
          Services
        </h4>
        <ul class="footer-links">
          <li><a href="{{ url('/services') }}">Maritime Consulting</a></li>
          <li><a href="{{ url('/services') }}">Risk Assessment</a></li>
          <li><a href="{{ url('/services') }}">Vessel Inspection</a></li>
          <li><a href="{{ url('/services') }}">HR Assessment</a></li>
          <li><a href="{{ url('/training') }}">Workshop &amp; Training</a></li>
          <li><a href="{{ url('/services') }}">Due Diligence</a></li>
        </ul>
      </div>

      <!-- Company Column -->
      <div class="footer-col links-col">
        <h4 class="footer-heading">
          <span class="footer-heading-line" aria-hidden="true"></span>
          Company
        </h4>
        <ul class="footer-links">
          <li><a href="{{ url('/about') }}">About Us</a></li>
          <li><a href="{{ url('/experience') }}">Our Experience</a></li>
          <li><a href="{{ url('/philosophy') }}">Philosophy &amp; Culture</a></li>
          <li><a href="#">Our Team</a></li>
          <li><a href="#">Careers</a></li>
        </ul>
      </div>

      <!-- Resources Column -->
      <div class="footer-col links-col">
        <h4 class="footer-heading">
          <span class="footer-heading-line" aria-hidden="true"></span>
          Resources
        </h4>
        <ul class="footer-links">
          <li><a href="{{ url('/blog') }}">Blog &amp; Insights</a></li>
          <li><a href="{{ url('/podcast') }}">KSP Podcast</a></li>
          <li><a href="#">Case Studies</a></li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <!-- Contact Column -->
      <div class="footer-col contact-col">
        <h4 class="footer-heading">
          <span class="footer-heading-line" aria-hidden="true"></span>
          Get In Touch
        </h4>
        <ul class="footer-contact-list">
          <li>
            <div class="footer-contact-icon">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div class="footer-contact-text">
              <span class="footer-contact-label">Phone</span>
              <span>{{ $globalSettings['contact_phone'] ?? '+62 878 8023 1853' }}</span>
            </div>
          </li>
          <li>
            <div class="footer-contact-icon">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="footer-contact-text">
              <span class="footer-contact-label">Email</span>
              <span>{{ $globalSettings['contact_email'] ?? 'info@ksp-consulting.com' }}</span>
            </div>
          </li>
          <li>
            <div class="footer-contact-icon">
              <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            </div>
            <div class="footer-contact-text">
              <span class="footer-contact-label">Office</span>
              <span>{{ $globalSettings['contact_address'] ?? 'Jakarta, Indonesia' }}</span>
            </div>
          </li>
        </ul>


      </div>

    </div><!-- /.footer-grid -->

    <!-- ── BOTTOM BAR ─────────────────────────── -->
    <div class="footer-bottom">
      <p class="copyright">
        &copy; {{ date('Y') }} <span class="copyright-brand">KSP Consulting</span>. All rights reserved.
      </p>
      <div class="footer-legal">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
        <a href="#">Sitemap</a>
      </div>
      <div class="footer-bottom-badge">
        <svg viewBox="0 0 24 24" width="12" height="12" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        <span>Trusted &amp; Certified</span>
      </div>
    </div>

  </div><!-- /.footer-container -->
</footer>
