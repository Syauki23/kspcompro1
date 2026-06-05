<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

<!-- SEO Meta Tags -->
<title>@yield('title', 'KSP Consulting | Navigating Complexity. Delivering Operational Excellence.')</title>
<meta name="description" content="@yield('meta_description', 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.')" />
<meta name="keywords" content="@yield('meta_keywords', 'KSP Consulting, Maritime Consulting Indonesia, Operational Excellence, Risk Assessment, Maritime Training')" />
<meta name="author" content="KSP Consulting" />
<link rel="canonical" href="{{ url()->current() }}" />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="@yield('title', 'KSP Consulting | Navigating Complexity. Delivering Operational Excellence.')" />
<meta property="og:description" content="@yield('meta_description', 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.')" />
<meta property="og:image" content="@yield('og_image', asset('assets/banner.jpg'))" />

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:url" content="{{ url()->current() }}" />
<meta property="twitter:title" content="@yield('title', 'KSP Consulting | Navigating Complexity. Delivering Operational Excellence.')" />
<meta property="twitter:description" content="@yield('meta_description', 'KSP Consulting helps maritime and industrial businesses solve operational challenges through consulting, assessment, training, and strategic implementation.')" />
<meta property="twitter:image" content="@yield('og_image', asset('assets/banner.jpg'))" />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" />
<link rel="stylesheet" href="{{ asset('style.css?v=' . time()) }}" />

<style>
    :root {
        --navbar-bg: {{ $globalSettings['navbar_color'] ?? 'rgba(0, 0, 0, 0.8)' }};
    }
</style>
