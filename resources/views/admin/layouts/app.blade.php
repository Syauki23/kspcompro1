<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - KSP Consulting</title>
    <!-- Preconnect untuk Google Fonts agar tidak blocking -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('admin-style.css') }}">
    @yield('styles')
</head>
<body>

    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="sidebar-brand">
                <a href="{{ route('admin.dashboard') }}" class="brand-logo">KSP<span>.</span>Admin</a>
            </div>

            <ul class="sidebar-menu">
                <li class="menu-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="menu-item {{ Route::is('admin.settings.home') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.home') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Home</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.settings.about') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.about') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                        <span>About Us</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.settings.experience') || Route::is('admin.experiences.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.experience') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                        <span>Experience</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.settings.philosophy') || Route::is('admin.philosophy.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.philosophy') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        <span>Philosophy</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.settings.services') || Route::is('admin.services.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.services') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        <span>Services</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.trainings.*') || Route::is('admin.training-events.*') || Route::is('admin.settings.training') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.training') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                        <span>Training</span>
                    </a>
                </li>

                <li class="menu-item has-dropdown {{ Route::is('admin.partners.*') || Route::is('admin.testimonials.*') ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="dropdown-trigger">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Social Proof</span>
                        <svg class="dropdown-chevron" viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" style="margin-left: auto; transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="sidebar-submenu">
                        <li class="submenu-item {{ Route::is('admin.partners.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.partners.index') }}">
                                <span>Partners</span>
                            </a>
                        </li>
                        <li class="submenu-item {{ Route::is('admin.testimonials.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.testimonials.index') }}">
                                <span>Testimonials</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item {{ Route::is('admin.podcasts.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.podcasts.index') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        <span>Podcast</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.inbox') || Route::is('admin.settings.contact') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.contact') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>Contact</span>
                    </a>
                </li>

                <li class="menu-item {{ Route::is('admin.settings.global') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.global') }}">
                        <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <form action="{{ route('admin.logout') }}" method="POST" id="logoutForm">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span>Sign Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Workspace -->
        <main class="admin-main">
            <!-- Header -->
            <header class="admin-header">
                <div class="header-title">
                    <h1>@yield('header_title', 'Dashboard')</h1>
                </div>

                <div class="header-user">
                    <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; gap: 7px; background: rgba(249,115,22,0.1); border: 1px solid rgba(249,115,22,0.25); color: var(--accent-orange); padding: 8px 14px; border-radius: 10px; font-size: 13px; font-weight: 600; text-decoration: none; transition: all 0.2s; font-family: var(--font-brand);" onmouseover="this.style.background='rgba(249,115,22,0.18)'" onmouseout="this.style.background='rgba(249,115,22,0.1)'">
                        <svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2.5" fill="none"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        View Website
                    </a>
                    <div class="user-info">
                        <div class="user-name">{{ Auth::user()?->name ?? 'Administrator' }}</div>
                        <div class="user-role">Super Admin</div>
                    </div>
                    <div class="user-avatar">
                        {{ strtoupper(substr(Auth::user()?->name ?? 'A', 0, 2)) }}
                    </div>
                </div>
            </header>

            <!-- Main Content Container -->
            <div class="admin-content">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownTriggers = document.querySelectorAll('.menu-item.has-dropdown .dropdown-trigger');
            dropdownTriggers.forEach(trigger => {
                trigger.addEventListener('click', function (e) {
                    e.preventDefault();
                    const parent = this.parentElement;
                    parent.classList.toggle('open');
                });
            });
        });
    </script>

    @yield('scripts')
</body>
</html>
