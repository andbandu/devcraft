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
                    <div style="font-size: 4rem; margin-bottom: 1rem; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.4));">⚡🛰️</div>
                    <div style="font-family: var(--font-mono); font-size: 0.85rem; letter-spacing: 0.1em; color: #a5b4fc; text-transform: uppercase;">
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
                    <a href="{{ route('blog.show') }}">Building Resilient Distributed Systems with Event-Driven Architecture</a>
                </h1>

                <p class="featured-excerpt">
                    A comprehensive, pragmatic guide to designing decoupled microservices, handling eventual consistency, transactional outbox patterns, and maintaining fault tolerance during cascading failures.
                </p>

                <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
                    <div class="author-pill">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" alt="Sophia Vance" class="author-avatar">
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
            <!-- Card 1 -->
            <article class="post-card" data-category="frontend">
                <div class="post-thumb">
                    <span class="badge badge-emerald post-thumb-badge">Frontend</span>
                    <div class="post-thumb-pattern" style="background: linear-gradient(135deg, #064e3b 0%, #047857 100%);">
                        <div style="font-size: 2.75rem;">🎨</div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-meta-row" style="margin-bottom: 0.5rem;">
                        <time datetime="2026-09-12">Sep 12, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 5 min read</span>
                    </div>
                    <h2 class="post-title">
                        <a href="{{ route('blog.show') }}">Mastering Modern CSS Grid and Fluid Responsive Typography</a>
                    </h2>
                    <p class="post-snippet">
                        How to construct robust, zero-breakage fluid layouts using pure CSS subgrid, clamp(), and container queries without extra media queries.
                    </p>
                    <div class="post-footer">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80" alt="Marcus Chen" class="author-avatar" style="width: 32px; height: 32px;">
                            <span class="author-name" style="font-size: 0.85rem;">Marcus Chen</span>
                        </div>
                        <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="post-card" data-category="devops">
                <div class="post-thumb">
                    <span class="badge badge-amber post-thumb-badge">DevOps</span>
                    <div class="post-thumb-pattern" style="background: linear-gradient(135deg, #78350f 0%, #b45309 100%);">
                        <div style="font-size: 2.75rem;">🗄️</div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-meta-row" style="margin-bottom: 0.5rem;">
                        <time datetime="2026-09-08">Sep 08, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 9 min read</span>
                    </div>
                    <h2 class="post-title">
                        <a href="{{ route('blog.show') }}">Zero-Downtime Database Migrations in High-Scale Applications</a>
                    </h2>
                    <p class="post-snippet">
                        Step-by-step strategies for expanding schema columns, phasing out legacy tables, and running dual-writes without locking production tables.
                    </p>
                    <div class="post-footer">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80" alt="Elena Rostova" class="author-avatar" style="width: 32px; height: 32px;">
                            <span class="author-name" style="font-size: 0.85rem;">Elena Rostova</span>
                        </div>
                        <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="post-card" data-category="cloud">
                <div class="post-thumb">
                    <span class="badge badge-indigo post-thumb-badge">Cloud</span>
                    <div class="post-thumb-pattern" style="background: linear-gradient(135deg, #1e1b4b 0%, #4338ca 100%);">
                        <div style="font-size: 2.75rem;">⚡</div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-meta-row" style="margin-bottom: 0.5rem;">
                        <time datetime="2026-09-02">Sep 02, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 6 min read</span>
                    </div>
                    <h2 class="post-title">
                        <a href="{{ route('blog.show') }}">Deploying Edge Functions with WebAssembly: A Pragmatic Guide</a>
                    </h2>
                    <p class="post-snippet">
                        Compressing compute overhead at global PoPs. Why compile Rust and Go to Wasm for instantaneous millisecond cold starts.
                    </p>
                    <div class="post-footer">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80" alt="David Miller" class="author-avatar" style="width: 32px; height: 32px;">
                            <span class="author-name" style="font-size: 0.85rem;">David Miller</span>
                        </div>
                        <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="post-card" data-category="ai">
                <div class="post-thumb">
                    <span class="badge badge-rose post-thumb-badge">AI &amp; ML</span>
                    <div class="post-thumb-pattern" style="background: linear-gradient(135deg, #881337 0%, #e11d48 100%);">
                        <div style="font-size: 2.75rem;">🧠</div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-meta-row" style="margin-bottom: 0.5rem;">
                        <time datetime="2026-08-28">Aug 28, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 8 min read</span>
                    </div>
                    <h2 class="post-title">
                        <a href="{{ route('blog.show') }}">Understanding LLM Embedding Spaces & Vector Databases</a>
                    </h2>
                    <p class="post-snippet">
                        Demystifying cosine distance, HNSW indexes, hybrid BM25 search, and chunking strategies when building enterprise RAG pipelines.
                    </p>
                    <div class="post-footer">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80" alt="Sophia Vance" class="author-avatar" style="width: 32px; height: 32px;">
                            <span class="author-name" style="font-size: 0.85rem;">Sophia Vance</span>
                        </div>
                        <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Card 5 -->
            <article class="post-card" data-category="system-design">
                <div class="post-thumb">
                    <span class="badge badge-indigo post-thumb-badge">System Design</span>
                    <div class="post-thumb-pattern" style="background: linear-gradient(135deg, #1e293b 0%, #334155 100%);">
                        <div style="font-size: 2.75rem;">🏗️</div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-meta-row" style="margin-bottom: 0.5rem;">
                        <time datetime="2026-08-20">Aug 20, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 6 min read</span>
                    </div>
                    <h2 class="post-title">
                        <a href="{{ route('blog.show') }}">Clean Architecture Patterns in Modern PHP 8.4</a>
                    </h2>
                    <p class="post-snippet">
                        Leveraging property hooks, asymmetric visibility, and custom attributes to construct clean, domain-driven boundaries in backend services.
                    </p>
                    <div class="post-footer">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80" alt="Marcus Chen" class="author-avatar" style="width: 32px; height: 32px;">
                            <span class="author-name" style="font-size: 0.85rem;">Marcus Chen</span>
                        </div>
                        <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Card 6 -->
            <article class="post-card" data-category="frontend">
                <div class="post-thumb">
                    <span class="badge badge-emerald post-thumb-badge">Frontend</span>
                    <div class="post-thumb-pattern" style="background: linear-gradient(135deg, #0c4a6e 0%, #0284c7 100%);">
                        <div style="font-size: 2.75rem;">🧩</div>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-meta-row" style="margin-bottom: 0.5rem;">
                        <time datetime="2026-08-15">Aug 15, 2026</time>
                        <span>•</span>
                        <span class="reading-time">⏱️ 7 min read</span>
                    </div>
                    <h2 class="post-title">
                        <a href="{{ route('blog.show') }}">Micro-Frontends in 2026: The Good, The Bad, and The Pragmatic</a>
                    </h2>
                    <p class="post-snippet">
                        A retrospective on module federation, isolated build pipelines, and whether organizational autonomy justifies the runtime trade-offs.
                    </p>
                    <div class="post-footer">
                        <div class="author-pill">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80" alt="Elena Rostova" class="author-avatar" style="width: 32px; height: 32px;">
                            <span class="author-name" style="font-size: 0.85rem;">Elena Rostova</span>
                        </div>
                        <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read &rarr;</a>
                    </div>
                </div>
            </article>
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
                            <h4><a href="{{ route('blog.show') }}">Building Resilient Distributed Systems with Event-Driven Architecture</a></h4>
                            <time datetime="2026-09-15">7 min read • 4.2k views</time>
                        </div>
                    </li>
                    <li class="trending-item">
                        <div class="trending-number">02</div>
                        <div class="trending-content">
                            <h4><a href="{{ route('blog.show') }}">Understanding LLM Embedding Spaces & Vector Databases</a></h4>
                            <time datetime="2026-08-28">8 min read • 3.8k views</time>
                        </div>
                    </li>
                    <li class="trending-item">
                        <div class="trending-number">03</div>
                        <div class="trending-content">
                            <h4><a href="{{ route('blog.show') }}">Zero-Downtime Database Migrations in High-Scale Apps</a></h4>
                            <time datetime="2026-09-08">9 min read • 3.1k views</time>
                        </div>
                    </li>
                    <li class="trending-item">
                        <div class="trending-number">04</div>
                        <div class="trending-content">
                            <h4><a href="{{ route('blog.show') }}">Mastering Modern CSS Grid and Fluid Typography</a></h4>
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