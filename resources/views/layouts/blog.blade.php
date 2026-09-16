<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'DevCraft Journal | Engineering, Architecture & Modern Web')</title>
    <meta name="description" content="@yield('meta_description', 'DevCraft Journal is an editorial publication exploring modern software engineering, system architecture, frontend crafts, and developer culture.')">

    <!-- Modern Typography: Plus Jakarta Sans & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- DevCraft Blog Design System -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    @stack('styles')
</head>
<body>
    @yield('top_bar')

    <!-- Top Announcement Bar -->
    <div class="announcement-bar">
        <span class="announcement-badge">Fresh Issue</span>
        <span>Issue #42 is live: Architectural patterns for resilient distributed systems in 2026.</span>
    </div>

    <!-- Main Navigation Header -->
    <header class="site-header">
        <div class="container header-inner">
            <a href="{{ route('blog.index') }}" class="brand-logo" aria-label="DevCraft Home">
                <div class="logo-icon">⚡</div>
                <span>DevCraft</span>
                <span class="logo-tag">Journal</span>
            </a>

            <!-- Desktop Navigation -->
            <ul class="nav-links">
                <li><a href="{{ route('blog.index') }}" class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('blog.show') }}" class="nav-link {{ request()->routeIs('blog.show') ? 'active' : '' }}">Latest Post</a></li>
                <li><a href="{{ route('blog.categories') }}" class="nav-link {{ request()->routeIs('blog.categories') ? 'active' : '' }}">Topics</a></li>
                <li><a href="{{ route('blog.about') }}" class="nav-link {{ request()->routeIs('blog.about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('blog.contact') }}" class="nav-link {{ request()->routeIs('blog.contact') ? 'active' : '' }}">Contact</a></li>
            </ul>

            <!-- Header Actions -->
            <div class="header-actions">
                <button type="button" class="btn-search-trigger js-open-search" aria-label="Search articles">
                    <span>🔍</span>
                    <span>Search articles...</span>
                    <kbd class="kbd-shortcut">Ctrl K</kbd>
                </button>

                <button type="button" class="btn-icon" id="themeToggleBtn" title="Toggle theme mode" aria-label="Toggle theme mode">
                    <span class="theme-icon">🌙</span>
                </button>

                <a href="{{ route('blog.show') }}" class="btn btn-primary" style="display: none; @media(min-width: 900px){display: inline-flex;}">
                    Read Story
                </a>

                <button type="button" class="btn-icon mobile-menu-btn" id="mobileMenuOpen" aria-label="Open mobile menu">
                    <span style="font-size: 1.25rem;">☰</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer Overlay -->
    <div class="mobile-drawer-overlay" id="mobileDrawerOverlay"></div>

    <!-- Mobile Drawer Content -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="mobile-drawer-header">
            <a href="{{ route('blog.index') }}" class="brand-logo">
                <div class="logo-icon">⚡</div>
                <span>DevCraft</span>
            </a>
            <button type="button" class="btn-icon" id="mobileMenuClose" aria-label="Close menu">✕</button>
        </div>

        <ul class="mobile-nav-links">
            <li><a href="{{ route('blog.index') }}" class="mobile-nav-link">🏠 Home</a></li>
            <li><a href="{{ route('blog.show') }}" class="mobile-nav-link">📖 Featured Article</a></li>
            <li><a href="{{ route('blog.categories') }}" class="mobile-nav-link">🏷️ Topics & Tags</a></li>
            <li><a href="{{ route('blog.about') }}" class="mobile-nav-link">💡 About Editorial</a></li>
            <li><a href="{{ route('blog.contact') }}" class="mobile-nav-link">✉️ Contact & FAQ</a></li>
        </ul>

        <div style="margin-top: auto; padding-top: 1.5rem; border-top: 1px solid var(--border-subtle); display: flex; flex-direction: column; gap: 1rem;">
            <button type="button" class="btn btn-secondary js-open-search" style="width: 100%;">
                🔍 Quick Search
            </button>
            <button type="button" class="btn btn-secondary" id="mobileThemeToggleBtn" style="width: 100%;">
                <span class="theme-icon">🌙</span> Switch Theme
            </button>
        </div>
    </div>

    <!-- Interactive Search Modal -->
    <div class="search-modal-backdrop" id="searchModal" role="dialog" aria-modal="true">
        <div class="search-modal">
            <div class="search-modal-header">
                <span style="font-size: 1.2rem; color: var(--text-muted);">🔍</span>
                <input type="text" id="searchInput" class="search-modal-input" placeholder="Search stories, topics, frameworks..." autocomplete="off">
                <button type="button" class="btn-icon" id="searchModalClose" style="width: 32px; height: 32px; font-size: 0.85rem;">✕</button>
            </div>
            <ul class="search-results-list" id="searchResultsList">
                <!-- Populated dynamically via vanilla JS -->
            </ul>
            <div class="search-modal-footer">
                <span>Navigation: <kbd class="kbd-shortcut">ESC</kbd> to close</span>
                <span>DevCraft Index (Live Filter)</span>
            </div>
        </div>
    </div>

    <!-- Main Body Content Slot -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Global Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="{{ route('blog.index') }}" class="brand-logo">
                        <div class="logo-icon">⚡</div>
                        <span>DevCraft</span>
                        <span class="logo-tag">Journal</span>
                    </a>
                    <p>
                        A premier digital publication dedicated to deep technical insights, modern system architecture, frontend craftsmanship, and the software engineering lifestyle.
                    </p>
                    <div style="margin-top: 1.25rem;">
                        <span class="badge badge-emerald">● Editorial Team Online</span>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('blog.index') }}">Frontpage Feed</a></li>
                        <li><a href="{{ route('blog.show') }}">Featured Story</a></li>
                        <li><a href="{{ route('blog.categories') }}">Explore Topics</a></li>
                        <li><a href="{{ route('blog.about') }}">About Publication</a></li>
                        <li><a href="{{ route('blog.contact') }}">Contact & FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Topics</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('blog.categories') }}">System Architecture</a></li>
                        <li><a href="{{ route('blog.categories') }}">Frontend Engineering</a></li>
                        <li><a href="{{ route('blog.categories') }}">DevOps & Cloud</a></li>
                        <li><a href="{{ route('blog.categories') }}">AI & Machine Learning</a></li>
                        <li><a href="{{ route('blog.categories') }}">Engineering Culture</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <p style="font-size: 0.88rem; color: var(--text-muted); margin-bottom: 0.85rem;">
                        Get hand-curated engineering articles delivered to your inbox every Thursday.
                    </p>
                    <form class="newsletter-form" onsubmit="return false;">
                        <input type="email" class="newsletter-input" placeholder="you@domain.com" required>
                        <button type="submit" class="btn btn-primary" style="padding: 0.6rem 1rem; font-size: 0.88rem;">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    &copy; {{ date('Y') }} DevCraft Journal. Handcrafted with modern HTML, pure CSS &amp; vanilla JS.
                </div>
                <div class="footer-socials">
                    <a href="https://github.com" target="_blank" rel="noopener" class="footer-social-link" title="GitHub">GitHub</a>
                    <a href="https://twitter.com" target="_blank" rel="noopener" class="footer-social-link" title="Twitter / X">Twitter</a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener" class="footer-social-link" title="LinkedIn">LinkedIn</a>
                    <a href="{{ route('blog.contact') }}" class="footer-social-link" title="RSS Feed">RSS</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Vanilla JavaScript Interactive Scripts -->
    <script src="{{ asset('js/blog.js') }}"></script>
    @stack('scripts')
</body>
</html>
