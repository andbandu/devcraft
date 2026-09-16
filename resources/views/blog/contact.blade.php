@extends('layouts.blog')

@section('title', 'Contact Editorial & FAQ | DevCraft Journal')
@section('meta_description', 'Contact DevCraft Journal editors, submit technical article proposals, or explore frequently asked questions.')

@section('content')
<div class="container">
    <div class="categories-hero">
        <span class="badge badge-indigo">Direct Inquiries</span>
        <h1 style="margin-top: 0.75rem;">Get in Touch with Editorial</h1>
        <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.6;">
            Have feedback on a published guide, interested in submitting a technical piece, or wanting to sponsor an edition? We’d love to hear from you.
        </p>
    </div>

    <div class="contact-layout">
        <!-- Interactive Contact Form -->
        <div class="contact-card">
            <h2 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Send a Message</h2>
            <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 2rem;">
                Fill out the form below. We usually respond within one business day.
            </p>

            <form id="contactForm">
                <div class="form-group">
                    <label class="form-label" for="contactName">Full Name *</label>
                    <input type="text" id="contactName" class="form-control" placeholder="Jane Doe" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="contactEmail">Email Address *</label>
                    <input type="email" id="contactEmail" class="form-control" placeholder="jane@company.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="contactSubject">Inquiry Subject</label>
                    <select id="contactSubject" class="form-control">
                        <option value="pitch">Pitching an Article</option>
                        <option value="feedback">Feedback on Published Guide</option>
                        <option value="partnership">Sponsorship &amp; Partnership</option>
                        <option value="correction">Technical Correction / Errata</option>
                        <option value="other">General Inquiry</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="contactMessage">Message / Proposal *</label>
                    <textarea id="contactMessage" class="form-control" placeholder="Describe your topic outline, question, or feedback in detail..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.8rem;">
                    <span>Send Message to Editors</span>
                    <span>&rarr;</span>
                </button>
            </form>
        </div>

        <!-- Contact Info & FAQ -->
        <div>
            <!-- Direct Channels Card -->
            <div class="contact-card" style="margin-bottom: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1.25rem;">Direct Channels</h3>

                <div class="contact-info-list">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">✉️</div>
                        <div>
                            <strong style="font-size: 0.95rem; color: var(--text-main);">Editorial Desk</strong>
                            <div style="color: var(--text-muted); font-size: 0.88rem;">editors@devcraft-journal.dev</div>
                            <div style="font-size: 0.78rem; color: var(--accent-emerald); font-weight: 600; margin-top: 2px;">⚡ Average reply &lt; 24h</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">🛡️</div>
                        <div>
                            <strong style="font-size: 0.95rem; color: var(--text-main);">Security &amp; Vulnerabilities</strong>
                            <div style="color: var(--text-muted); font-size: 0.88rem;">security@devcraft-journal.dev</div>
                            <div style="font-size: 0.78rem; color: var(--text-muted);">PGP Key available upon request</div>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">📍</div>
                        <div>
                            <strong style="font-size: 0.95rem; color: var(--text-main);">Headquarters</strong>
                            <div style="color: var(--text-muted); font-size: 0.88rem;">DevCraft Media Group, 500 Howard St, San Francisco, CA</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Accordion -->
            <div>
                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0.5rem;">Frequently Asked Questions</h3>
                <p style="color: var(--text-muted); font-size: 0.88rem; margin-bottom: 1rem;">
                    Quick answers to common questions about writing and licensing.
                </p>

                <div class="faq-list">
                    <div class="faq-item active">
                        <button type="button" class="faq-question">
                            <span>How does article pitching work?</span>
                            <span class="faq-icon">▼</span>
                        </button>
                        <div class="faq-answer">
                            Submit an outline with the target audience, problem statement, key diagrams, and sample code snippets. Our editorial board reviews pitches on Tuesdays and Thursdays.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            <span>Are code snippets open source?</span>
                            <span class="faq-icon">▼</span>
                        </button>
                        <div class="faq-answer">
                            Yes! All code snippets published on DevCraft Journal are licensed under the MIT License and are free to use in personal, educational, and commercial projects without attribution.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" class="faq-question">
                            <span>Do you accept guest contributions?</span>
                            <span class="faq-icon">▼</span>
                        </button>
                        <div class="faq-answer">
                            Yes. We collaborate with senior engineers and architects worldwide. We provide full editorial review, technical fact-checking, custom diagram production, and author stipends.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
