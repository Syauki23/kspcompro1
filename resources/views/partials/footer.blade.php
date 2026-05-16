<footer class="main-footer">
  <div class="footer-container">
    <div class="footer-grid">
      <!-- Brand Column -->
      <div class="footer-col brand-col">
        <img src="{{ asset('assets/KSP logo Transparant White -1.png') }}" alt="KSP Consulting Logo" class="footer-logo">
        <p class="footer-desc">
          Knowledge-driven consulting for maritime and industrial excellence. We help you navigate complexity and achieve sustainable success.
        </p>
        <div class="footer-social-wrapper">
          <div class="footer-socials">
            <a href="#" class="social-box" aria-label="Instagram">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
            </a>
            <a href="#" class="social-box" aria-label="LinkedIn">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
            </a>
            <a href="#" class="social-box" aria-label="YouTube">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
            </a>
            <a href="#" class="social-box" aria-label="Spotify">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" stroke="none"><path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.54.66.3 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.02.6-1.141C9.6 9.9 15.001 10.62 18.66 12.84c.42.24.54.84.3 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.781-.18-.6.18-1.2.78-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.239.54-.959.72-1.5.42z"/></svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Services Column -->
      <div class="footer-col links-col border-col">
        <h4 class="footer-heading">SERVICES</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/services') }}">Maritime Consulting</a></li>
          <li><a href="{{ url('/services') }}">Risk Assessment</a></li>
          <li><a href="{{ url('/services') }}">Vessel Inspection</a></li>
          <li><a href="{{ url('/services') }}">HR Assessment</a></li>
          <li><a href="{{ url('/training') }}">Workshop & Training</a></li>
          <li><a href="{{ url('/services') }}">Due Diligence</a></li>
        </ul>
      </div>
      
      <!-- Company Column -->
      <div class="footer-col links-col border-col">
        <h4 class="footer-heading">COMPANY</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/about') }}">About Us</a></li>
          <li><a href="#">Our Team</a></li>
          <li><a href="{{ url('/experience') }}">Experience</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">News & Media</a></li>
        </ul>
      </div>

      <!-- Resources Column -->
      <div class="footer-col links-col border-col">
        <h4 class="footer-heading">RESOURCES</h4>
        <ul class="footer-links">
          <li><a href="{{ url('/blog') }}">Blog</a></li>
          <li><a href="{{ url('/podcast') }}">Podcast</a></li>
          <li><a href="#">Case Studies</a></li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">FAQ</a></li>
        </ul>
      </div>

      <!-- Contact Us Column -->
      <div class="footer-col contact-col border-col">
        <h4 class="footer-heading">CONTACT US</h4>
        <ul class="footer-contact-list">
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            <span>+62 878 8023 1853</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span>info@ksp-consulting.com</span>
          </li>
          <li>
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
            <span>Jakarta, Indonesia</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <p class="copyright">&copy; 2025 KSP Consulting. All rights reserved.</p>
      <div class="footer-legal">
        <a href="#">Privacy Policy</a>
        <span class="legal-separator">|</span>
        <a href="#">Terms of Use</a>
        <span class="legal-separator">|</span>
        <a href="#">Sitemap</a>
      </div>
    </div>
  </div>
</footer>
