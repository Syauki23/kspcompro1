<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- SEO Meta Tags -->
<title>@yield('title', 'KSP Consulting | Navigating Complexity. Delivering Operational Excellence.')</title>
<meta name="description" content="@yield('meta_description', 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.')" />
<meta name="keywords" content="@yield('meta_keywords', 'KSP Consulting, Maritime Consulting Indonesia, Operational Excellence, Risk Assessment, Maritime Training')" />
<meta name="author" content="KSP Consulting" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ url()->current() }}" />

<!-- Open Graph / Facebook / WhatsApp / LinkedIn -->
<meta property="og:type" content="website" />
<meta property="og:locale" content="id_ID" />
<meta property="og:site_name" content="KSP Consulting" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="@yield('title', 'KSP Consulting | Navigating Complexity. Delivering Operational Excellence.')" />
<meta property="og:description" content="@yield('meta_description', 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.')" />
<meta property="og:image" content="@yield('og_image', asset('assets/banner.jpg'))" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{ url()->current() }}" />
<meta property="twitter:title" content="@yield('title', 'KSP Consulting | Navigating Complexity. Delivering Operational Excellence.')" />
<meta property="twitter:description" content="@yield('meta_description', 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.')" />
<meta property="twitter:image" content="@yield('og_image', asset('assets/banner.jpg'))" />

<!-- Schema.org JSON-LD: Organization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "KSP Consulting",
  "alternateName": "KSP",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/KSP logo Transparant White -1.png') }}",
  "description": "KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Jakarta",
    "addressCountry": "ID"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "{{ $globalSettings['contact_phone'] ?? '+62 878 8023 1853' }}",
    "email": "{{ $globalSettings['contact_email'] ?? 'info@ksp-consulting.com' }}",
    "contactType": "customer service",
    "availableLanguage": ["Indonesian", "English"]
  },
  "sameAs": [
    "{{ $globalSettings['social_instagram'] ?? '' }}",
    "{{ $globalSettings['social_linkedin'] ?? '' }}",
    "{{ $globalSettings['social_youtube'] ?? '' }}"
  ]
}
</script>

<!-- Schema.org JSON-LD: WebSite + SearchAction -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "KSP Consulting",
  "url": "{{ url('/') }}"
}
</script>

<!-- Schema.org JSON-LD: BreadcrumbList (per-page) -->
@hasSection('breadcrumb_schema')
  @yield('breadcrumb_schema')
@endif

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />
<link rel="stylesheet" href="{{ asset('style.css?v=' . time()) }}" />

<style>
    :root {
        --navbar-bg: {{ $globalSettings['navbar_color'] ?? 'rgba(0, 0, 0, 0.8)' }};
    }
</style>

