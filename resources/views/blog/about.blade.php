@extends('layouts.blog')

@section('title', 'About Our Publication | DevCraft Journal')
@section('meta_description', 'Learn about DevCraft Journal, our editorial standards, engineering philosophy, and the contributors behind the publication.')

@section('content')
<div class="container">
    <div class="about-hero">
        <span class="badge badge-indigo">About DevCraft</span>
        <h1 style="margin-top: 0.75rem;">Deep Engineering, Free From Hype</h1>
        <p style="color: var(--text-muted); font-size: 1.15rem; line-height: 1.6;">
            Founded by software architects and system engineers, DevCraft Journal provides thorough, production-tested analyses of real-world software architecture, frontend craftsmanship, and backend infrastructure.
        </p>
    </div>

    <!-- Editorial Story & Mission -->
    <div class="about-grid">
        <div>
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem; color: var(--text-main);">
                Why DevCraft Journal Exists
            </h2>
            <p style="color: var(--text-muted); margin-bottom: 1.25rem; font-size: 1.05rem;">
                Modern technical blogging is frequently dominated by superficial clickbait, generic rehashes, and marketing spiels. Too many guides demonstrate a toy "Hello World" that fails completely the moment you face real concurrency, distributed failure, or legacy database constraints.
            </p>
            <p style="color: var(--text-muted); font-size: 1.05rem;">
                DevCraft was founded as an antidote. Every article on this platform is written by active practitioners who have dealt with production outages at 3 AM, migrated terabyte-scale databases without downtime, and maintained frontend applications for millions of active users.
            </p>
        </div>

        <div style="background: linear-gradient(135deg, rgba(79, 70, 229, 0.08) 0%, rgba(6, 182, 212, 0.08) 100%); border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 2.5rem;">
            <h3 style="font-size: 1.35rem; font-weight: 700; margin-bottom: 1.25rem;">Our Core Principles</h3>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 1rem;">
                <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                    <span style="font-size: 1.2rem;">🎯</span>
                    <div>
                        <strong style="color: var(--text-main);">Zero Fluff:</strong>
                        <span style="color: var(--text-muted);"> We dive straight into architecture diagrams, code implementations, and performance tradeoffs.</span>
                    </div>
                </li>
                <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                    <span style="font-size: 1.2rem;">🔬</span>
                    <div>
                        <strong style="color: var(--text-main);">Empirically Verified:</strong>
                        <span style="color: var(--text-muted);"> All code benchmarks and configurations are validated in real operating environments.</span>
                    </div>
                </li>
                <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                    <span style="font-size: 1.2rem;">🤝</span>
                    <div>
                        <strong style="color: var(--text-main);">Open &amp; Accessible:</strong>
                        <span style="color: var(--text-muted);"> No paywalls, no aggressive modal popups, and full support for dark mode and accessibility.</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Editorial Team -->
    <section style="margin-top: 4rem;">
        <div style="text-align: center; max-width: 600px; margin: 0 auto 2.5rem auto;">
            <span class="badge badge-emerald">The Collective</span>
            <h2 style="font-size: 2.15rem; font-weight: 800; margin-top: 0.5rem;">Editorial Board &amp; Authors</h2>
            <p style="color: var(--text-muted); font-size: 0.98rem;">
                Meet the senior engineers and architects responsible for curating, reviewing, and publishing DevCraft guides.
            </p>
        </div>

        <div class="team-grid">
            <!-- Author 1 -->
            <div class="team-card">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&h=200&q=80" alt="Sophia Vance" class="team-avatar">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.25rem;">Sophia Vance</h3>
                <div style="color: var(--primary); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.75rem;">Editor-in-Chief &amp; Systems Architect</div>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.5;">
                    14+ years building event-driven microservices, Kafka streaming pipelines, and fault-tolerant cloud backends.
                </p>
            </div>

            <!-- Author 2 -->
            <div class="team-card">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&h=200&q=80" alt="Marcus Chen" class="team-avatar">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.25rem;">Marcus Chen</h3>
                <div style="color: var(--accent-emerald); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.75rem;">Frontend Lead &amp; Design Technologist</div>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.5;">
                    Specializes in pure CSS architectures, micro-interactions, canvas graphics, and zero-dependency web apps.
                </p>
            </div>

            <!-- Author 3 -->
            <div class="team-card">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&h=200&q=80" alt="Elena Rostova" class="team-avatar">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.25rem;">Elena Rostova</h3>
                <div style="color: var(--accent-amber); font-weight: 600; font-size: 0.85rem; margin-bottom: 0.75rem;">Infrastructure &amp; SRE Director</div>
                <p style="color: var(--text-muted); font-size: 0.88rem; line-height: 1.5;">
                    Veteran database administrator and reliability lead. Obsessed with zero-downtime migrations and observability.
                </p>
            </div>
        </div>
    </section>

    <!-- Pitch an Article Banner -->
    <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-xl); padding: 3rem; text-align: center; margin-top: 4.5rem;">
        <h3 style="font-size: 1.8rem; font-weight: 800; margin-bottom: 0.75rem;">Have a War Story from Production?</h3>
        <p style="color: var(--text-muted); max-width: 550px; margin: 0 auto 1.75rem auto; font-size: 1rem;">
            We pay competitive author stipends for in-depth engineering analyses, post-mortems, and architectural benchmarks.
        </p>
        <a href="{{ route('blog.contact') }}" class="btn btn-primary">
            Submit a Pitch &rarr;
        </a>
    </div>
</div>
@endsection
