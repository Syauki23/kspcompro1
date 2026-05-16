@extends('layouts.app', ['navbarClass' => 'navbar-services', 'bodyClass' => 'page-blog'])

@section('title', 'Blog & Insights | KSP Consulting')

@section('content')
<main class="modern-blog-layout">
  <!-- FEATURED HERO SECTION -->
  <section class="blog-hero">
    <div class="blog-hero-slider">
      <div class="hero-slide active">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1600&q=80" alt="Featured Article" class="hero-bg">
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-meta">
            <span class="hero-cat">Maritime Insights</span>
            <span class="hero-read-time"><svg viewBox="0 0 24 24" width="14" height="14" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> 8 min read</span>
          </div>
          <h1 class="hero-title">Building Resilient Maritime Operations in an Era of Complexity</h1>
          <p class="hero-excerpt">Exploring practical strategies to strengthen operational resilience, manage risks, and ensure sustainable performance across the maritime value chain.</p>
          <div class="hero-footer">
            <span class="hero-date">May 20, 2025</span>
            <a href="#" class="btn-hero-read">Read Full Article &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STICKY TOP CONTROLS -->
  <div class="blog-sticky-bar">
    <div class="sticky-bar-container">
      <div class="category-pills">
        <button class="cat-pill active">All Categories</button>
        <button class="cat-pill">Maritime Insights</button>
        <button class="cat-pill">Safety & Compliance</button>
        <button class="cat-pill">Operational Excellence</button>
        <button class="cat-pill">Human Factors</button>
        <button class="cat-pill">Leadership</button>
        <button class="cat-pill">Workshop Recaps</button>
        <button class="cat-pill">Industry Trends</button>
      </div>
      
      <div class="modern-search-box">
        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
        <input type="text" placeholder="Search insights...">
      </div>
    </div>
  </div>

  <!-- MAIN GRID SECTION (2 COLUMNS) -->
  <section class="blog-content-wrapper">
    <div class="blog-container">
      <div class="articles-grid-area">
        <div class="section-heading">
          <h2>Latest Insights</h2>
          <p>Discover our newest perspectives on maritime industry trends and operations.</p>
        </div>
        
        <div class="modern-articles-grid">
          <article class="modern-card">
            <div class="modern-card-img">
              <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=800&q=80" alt="Article Image">
              <div class="modern-card-badges">
                <span class="badge-cat color-safety">Safety & Compliance</span>
                <span class="badge-time">6 min read</span>
              </div>
            </div>
            <div class="modern-card-content">
              <h3 class="modern-card-title"><a href="#">Enhancing Safety Culture Through Human-Centered Approach</a></h3>
              <p class="modern-card-excerpt">Why safety culture transformation must start with people, not just processes.</p>
              <div class="modern-card-footer">
                <span class="modern-card-date">May 18, 2025</span>
                <a href="#" class="modern-card-link">Read More &rarr;</a>
              </div>
            </div>
          </article>

          <article class="modern-card">
            <div class="modern-card-img">
              <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80" alt="Article Image">
              <div class="modern-card-badges">
                <span class="badge-cat color-ops">Operational Excellence</span>
                <span class="badge-time">7 min read</span>
              </div>
            </div>
            <div class="modern-card-content">
              <h3 class="modern-card-title"><a href="#">Data-Driven Decision Making in Maritime Operations</a></h3>
              <p class="modern-card-excerpt">Leveraging data and technology to improve visibility, efficiency, and operational outcomes.</p>
              <div class="modern-card-footer">
                <span class="modern-card-date">May 15, 2025</span>
                <a href="#" class="modern-card-link">Read More &rarr;</a>
              </div>
            </div>
          </article>

          <article class="modern-card">
            <div class="modern-card-img">
              <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?auto=format&fit=crop&w=800&q=80" alt="Article Image">
              <div class="modern-card-badges">
                <span class="badge-cat color-workshop">Workshop Recaps</span>
                <span class="badge-time">5 min read</span>
              </div>
            </div>
            <div class="modern-card-content">
              <h3 class="modern-card-title"><a href="#">Key Takeaways from TMSA Implementation Workshop</a></h3>
              <p class="modern-card-excerpt">Highlights and lessons learned from our latest TMSA training and implementation program.</p>
              <div class="modern-card-footer">
                <span class="modern-card-date">May 12, 2025</span>
                <a href="#" class="modern-card-link">Read More &rarr;</a>
              </div>
            </div>
          </article>
          
          <article class="modern-card">
            <div class="modern-card-img">
              <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80" alt="Article Image">
              <div class="modern-card-badges">
                <span class="badge-cat color-trends">Industry Trends</span>
                <span class="badge-time">5 min read</span>
              </div>
            </div>
            <div class="modern-card-content">
              <h3 class="modern-card-title"><a href="#">Navigating Regulatory Changes: What Operators Need to Know</a></h3>
              <p class="modern-card-excerpt">A comprehensive guide on adapting to the new environmental regulations in the maritime sector.</p>
              <div class="modern-card-footer">
                <span class="modern-card-date">May 8, 2025</span>
                <a href="#" class="modern-card-link">Read More &rarr;</a>
              </div>
            </div>
          </article>

          <article class="modern-card">
            <div class="modern-card-img">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80" alt="Article Image">
              <div class="modern-card-badges">
                <span class="badge-cat color-human">Human Factors</span>
                <span class="badge-time">6 min read</span>
              </div>
            </div>
            <div class="modern-card-content">
              <h3 class="modern-card-title"><a href="#">Building Operational Excellence Through Standardization</a></h3>
              <p class="modern-card-excerpt">How standardizing procedures can reduce human error and improve overall performance.</p>
              <div class="modern-card-footer">
                <span class="modern-card-date">May 2, 2025</span>
                <a href="#" class="modern-card-link">Read More &rarr;</a>
              </div>
            </div>
          </article>
          
          <article class="modern-card">
            <div class="modern-card-img">
              <img src="https://images.unsplash.com/photo-1515169067868-5387ec356754?auto=format&fit=crop&w=800&q=80" alt="Article Image">
              <div class="modern-card-badges">
                <span class="badge-cat color-leadership">Leadership</span>
                <span class="badge-time">7 min read</span>
              </div>
            </div>
            <div class="modern-card-content">
              <h3 class="modern-card-title"><a href="#">Risk Assessment Best Practices for Maritime Leaders</a></h3>
              <p class="modern-card-excerpt">Effective risk management strategies for leadership in high-stakes operational environments.</p>
              <div class="modern-card-footer">
                <span class="modern-card-date">May 5, 2025</span>
                <a href="#" class="modern-card-link">Read More &rarr;</a>
              </div>
            </div>
          </article>
        </div>
        
        <div class="blog-load-more">
          <button class="btn-load-more">Load More Articles</button>
        </div>
      </div>

      <aside class="blog-sidebar">
        <div class="sidebar-widget widget-newsletter">
          <div class="widget-icon">
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="1.5" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </div>
          <h3>Knowledge that moves you forward.</h3>
          <p>Stay updated with the latest insights and practical strategies from our experts.</p>
          <form class="newsletter-form" onsubmit="event.preventDefault();">
            <input type="email" placeholder="Your email address" required>
            <button type="submit">Subscribe</button>
          </form>
        </div>

        <div class="sidebar-widget widget-tags">
          <h4 class="widget-title">Popular Tags</h4>
          <div class="tags-cloud">
            <a href="#" class="tag-link">TMSA</a>
            <a href="#" class="tag-link">SIRE 2.0</a>
            <a href="#" class="tag-link">Hazard</a>
            <a href="#" class="tag-link">Risk Management</a>
            <a href="#" class="tag-link">Maritime Safety</a>
            <a href="#" class="tag-link">Leadership</a>
            <a href="#" class="tag-link">ISM Code</a>
            <a href="#" class="tag-link">Due Diligence</a>
          </div>
        </div>
        
        <div class="sidebar-widget widget-trending">
          <h4 class="widget-title">Trending Now</h4>
          <div class="trending-list">
            <a href="#" class="trending-item">
              <div class="trending-number">01</div>
              <div class="trending-info">
                <h5>The Future of Maritime Workforce: Skills, Safety, and Adaptability</h5>
                <span>May 10, 2025</span>
              </div>
            </a>
            <a href="#" class="trending-item">
              <div class="trending-number">02</div>
              <div class="trending-info">
                <h5>Recap: SIRE 2.0 Training and Key Implementation Points</h5>
                <span>Apr 28, 2025</span>
              </div>
            </a>
            <a href="#" class="trending-item">
              <div class="trending-number">03</div>
              <div class="trending-info">
                <h5>Building Operational Excellence Through Standardization</h5>
                <span>May 2, 2025</span>
              </div>
            </a>
          </div>
        </div>
      </aside>
    </div>
  </section>
</main>
@endsection
