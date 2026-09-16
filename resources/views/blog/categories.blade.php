@extends('layouts.blog')

@section('title', 'Explore Topics & Categories | DevCraft Journal')
@section('meta_description', 'Browse engineering topics across System Design, Frontend Crafts, DevOps, Cloud Infrastructure, AI, and Backend Engineering.')

@section('content')
<div class="container">
    <div class="categories-hero">
        <span class="badge badge-indigo">Topic Directory</span>
        <h1 style="margin-top: 0.75rem;">Curated Technical Disciplines</h1>
        <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.6;">
            Every discipline is curated by active senior staff engineers. Explore foundational concepts, battle-tested recipes, and pragmatic trade-off analyses.
        </p>
    </div>

    <div class="categories-grid">
        <!-- Category 1 -->
        <article class="category-card">
            <div class="category-icon-box" style="background: rgba(79, 70, 229, 0.1); color: #4f46e5;">
                🏗️
            </div>
            <h3>System Design</h3>
            <p>
                Event-driven topologies, outbox patterns, CQRS, eventual consistency models, fault tolerance, and scalable distributed consensus.
            </p>
            <div class="category-card-footer">
                <span>28 Deep Guides</span>
                <a href="{{ route('blog.index') }}">Browse Articles &rarr;</a>
            </div>
        </article>

        <!-- Category 2 -->
        <article class="category-card">
            <div class="category-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                🎨
            </div>
            <h3>Frontend Craftsmanship</h3>
            <p>
                CSS Grid &amp; Subgrid, container queries, fluid responsive typography, state management paradigms, and micro-animations without bloat.
            </p>
            <div class="category-card-footer">
                <span>34 Deep Guides</span>
                <a href="{{ route('blog.index') }}">Browse Articles &rarr;</a>
            </div>
        </article>

        <!-- Category 3 -->
        <article class="category-card">
            <div class="category-icon-box" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                🗄️
            </div>
            <h3>DevOps &amp; Reliability</h3>
            <p>
                Zero-downtime database schema migrations, automated rollback pipelines, chaos engineering, and container orchestration at scale.
            </p>
            <div class="category-card-footer">
                <span>22 Deep Guides</span>
                <a href="{{ route('blog.index') }}">Browse Articles &rarr;</a>
            </div>
        </article>

        <!-- Category 4 -->
        <article class="category-card">
            <div class="category-icon-box" style="background: rgba(244, 63, 94, 0.1); color: #f43f5e;">
                🧠
            </div>
            <h3>AI &amp; Machine Learning</h3>
            <p>
                Vector databases, embedding space projections, RAG ingestion pipelines, quantization, and self-hosted open source inference runtimes.
            </p>
            <div class="category-card-footer">
                <span>19 Deep Guides</span>
                <a href="{{ route('blog.index') }}">Browse Articles &rarr;</a>
            </div>
        </article>

        <!-- Category 5 -->
        <article class="category-card">
            <div class="category-icon-box" style="background: rgba(6, 182, 212, 0.1); color: #06b6d4;">
                ⚡
            </div>
            <h3>Cloud &amp; Edge Systems</h3>
            <p>
                Compiling Rust and Go to WebAssembly, serverless cold-start optimization, distributed edge key-value stores, and global Anycast routing.
            </p>
            <div class="category-card-footer">
                <span>16 Deep Guides</span>
                <a href="{{ route('blog.index') }}">Browse Articles &rarr;</a>
            </div>
        </article>

        <!-- Category 6 -->
        <article class="category-card">
            <div class="category-icon-box" style="background: rgba(124, 58, 237, 0.1); color: #7c3aed;">
                🐘
            </div>
            <h3>Backend Architecture</h3>
            <p>
                Modern PHP 8.4 property hooks, asymmetric visibility, asynchronous concurrency with Fibers, clean architecture, and domain-driven design.
            </p>
            <div class="category-card-footer">
                <span>25 Deep Guides</span>
                <a href="{{ route('blog.index') }}">Browse Articles &rarr;</a>
            </div>
        </article>
    </div>

    <!-- Banner Card -->
    <div class="newsletter-card" style="margin-top: 4rem; text-align: center; max-width: 800px; margin-left: auto; margin-right: auto;">
        <div class="newsletter-icon" style="margin: 0 auto 1rem auto;">📬</div>
        <h2>Want customized topic digests?</h2>
        <p style="max-width: 500px; margin: 0 auto 1.5rem auto;">
            Subscribe to choose which topics appear in your weekly delivery. No marketing fluff, only technical depth.
        </p>
        <form class="newsletter-form" style="max-width: 420px; margin: 0 auto;" onsubmit="return false;">
            <input type="email" class="newsletter-input" placeholder="you@company.com" required>
            <button type="submit" class="btn btn-primary" style="margin-top: 0.5rem;">Join 30,000+ Engineers</button>
        </form>
    </div>
</div>
@endsection
