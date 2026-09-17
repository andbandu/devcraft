@extends('layouts.blog')

@section('title', 'DevCraft Journal | Stories, System Design & Modern Engineering')
@section('meta_description', 'Discover in-depth engineering breakdowns, software architecture tutorials, and frontend craftsmanship from leading practitioners.')

@section('content')
    <div class="container">
        <!-- Featured Top Hero Story -->
        <section class="hero-section">
            <article class="featured-card">
                <div class="featured-visual">
                    <span class="badge featured-badge-overlay">⭐ Editor's Choice</span>
                    <div class="featured-visual-graphic">
                        <div
                            style="font-size: 4rem; margin-bottom: 1rem; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.4));">
                            ⚡🛰️</div>
                        <div
                            style="font-family: var(--font-mono); font-size: 0.85rem; letter-spacing: 0.1em; color: #a5b4fc; text-transform: uppercase;">
                            Architecture • Scalability
                        </div>
                    </div>
                </div>

                <div class="featured-content">
                    <div class="post-meta-row">
                        <span class="badge badge-indigo">System Design</span>
                        <span>•</span>
                        <time datetime="2026-09-15">Sep 15, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 7 min read</span>
                    </div>

                    <h1 class="featured-title">
                        <a href="{{ route('blog.show') }}">Building Resilient Distributed Systems with Event-Driven
                            Architecture</a>
                    </h1>

                    <p class="featured-excerpt">
                        A comprehensive, pragmatic guide to designing decoupled microservices, handling eventual
                        consistency, transactional outbox patterns, and maintaining fault tolerance during cascading
                        failures.
                    </p>

                    <div
                        style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80"
                                alt="Sophia Vance" class="author-avatar">
                            <div>
                                <div class="author-name">Sophia Vance</div>
                                <div class="author-role">Principal Systems Architect</div>
                            </div>
                        </div>

                        <a href="{{ route('blog.show') }}" class="btn btn-primary">
                            <span>Read Article</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            </article>
        </section>

        <!-- Publication Stats Banner -->
        <section class="stats-banner">
            <div class="stat-item">
                <div class="stat-number">45K+</div>
                <div class="stat-label">Monthly Readers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">140+</div>
                <div class="stat-label">In-Depth Guides</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">Practical Code</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">12</div>
                <div class="stat-label">Senior Contributors</div>
            </div>
        </section>

        <!-- Filter Pills Bar -->
        <section class="filter-bar">
            <div class="category-pills">
                <button type="button" class="category-pill active" data-category="all">All Articles</button>
                <button type="button" class="category-pill" data-category="system-design">System Design</button>
                <button type="button" class="category-pill" data-category="frontend">Frontend</button>
                <button type="button" class="category-pill" data-category="devops">DevOps</button>
                <button type="button" class="category-pill" data-category="cloud">Cloud</button>
                <button type="button" class="category-pill" data-category="ai">AI & ML</button>
            </div>
            <div class="filter-info" id="filterCountDisplay">
                Showing 6 articles
            </div>
        </section>

        <!-- Main Content & Sidebar Layout -->
        <div class="content-layout">
            <!-- Articles Grid -->
            <div class="posts-grid" id="postsGrid">
                @foreach($posts as $post)
                    <x-post-card :category="$post->category" :categoryBadge="$post->badge_class" :gradient="$post->gradient"
                        :emoji="$post->emoji" :date="$post->created_at->format('M d, Y')" :readTime="$post->read_time"
                        :title="$post->title" :author="$post->author_name" :authorImg="$post->author_image">

                        {{ $post->snippet }}

                    </x-post-card>
                @endforeach
            </div>

            <!-- Sidebar Widgets -->
            <aside class="sidebar">
                <!-- Trending Reads -->
                <div class="widget">
                    <h3 class="widget-title">
                        <span>🔥</span>
                        <span>Most Read This Week</span>
                    </h3>
                    <ul class="trending-list">
                        <li class="trending-item">
                            <div class="trending-number">01</div>
                            <div class="trending-content">
                                <h4><a href="{{ route('blog.show') }}">Building Resilient Distributed Systems with
                                        Event-Driven Architecture</a></h4>
                                <time datetime="2026-09-15">7 min read • 4.2k views</time>
                            </div>
                        </li>
                        <li class="trending-item">
                            <div class="trending-number">02</div>
                            <div class="trending-content">
                                <h4><a href="{{ route('blog.show') }}">Understanding LLM Embedding Spaces & Vector
                                        Databases</a></h4>
                                <time datetime="2026-08-28">8 min read • 3.8k views</time>
                            </div>
                        </li>
                        <li class="trending-item">
                            <div class="trending-number">03</div>
                            <div class="trending-content">
                                <h4><a href="{{ route('blog.show') }}">Zero-Downtime Database Migrations in High-Scale
                                        Apps</a></h4>
                                <time datetime="2026-09-08">9 min read • 3.1k views</time>
                            </div>
                        </li>
                        <li class="trending-item">
                            <div class="trending-number">04</div>
                            <div class="trending-content">
                                <h4><a href="{{ route('blog.show') }}">Mastering Modern CSS Grid and Fluid Typography</a>
                                </h4>
                                <time datetime="2026-09-12">5 min read • 2.6k views</time>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Subscription Sidebar Card -->
                <div class="newsletter-card">
                    <div class="newsletter-icon">📬</div>
                    <h3>DevCraft Dispatch</h3>
                    <p>Join 30,000+ engineers receiving our weekly breakdown of real-world production architectures.</p>
                    <form class="newsletter-form" onsubmit="return false;">
                        <input type="email" class="newsletter-input" placeholder="name@company.com" required>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Get Free Weekly Issue</button>
                    </form>
                    <div style="font-size: 0.75rem; color: var(--text-muted); margin-top: 0.75rem; text-align: center;">
                        Zero spam. Unsubscribe anytime.
                    </div>
                </div>

                <!-- Popular Tags Cloud -->
                <div class="widget">
                    <h3 class="widget-title">
                        <span>🏷️</span>
                        <span>Popular Topics</span>
                    </h3>
                    <div class="tags-cloud">
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#SystemDesign</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#PHP84</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#Microservices</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#CSSGrid</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#PostgreSQL</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#WebAssembly</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#DevOps</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#Kafka</a>
                        <a href="{{ route('blog.categories') }}" class="tag-pill">#GenAI</a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection