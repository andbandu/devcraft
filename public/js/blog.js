/**
 * DevCraft Blog - Client-side Interactive Engine
 * Vanilla JavaScript (No dependencies)
 */

document.addEventListener('DOMContentLoaded', () => {
    initThemeToggle();
    initMobileNav();
    initSearchModal();
    initCategoryFilter();
    initReadingProgress();
    initTableOfContents();
    initCodeCopyButtons();
    initEngagementClaps();
    initCommentForm();
    initContactForm();
    initFaqAccordion();
});

/* --------------------------------------------------------------------------
   1. Dark / Light Theme Toggle
   -------------------------------------------------------------------------- */
function initThemeToggle() {
    const themeToggleBtn = document.getElementById('themeToggleBtn');
    const mobileThemeToggleBtn = document.getElementById('mobileThemeToggleBtn');
    const html = document.documentElement;

    // Load saved or system theme
    const savedTheme = localStorage.getItem('devcraft-theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (savedTheme) {
        html.setAttribute('data-theme', savedTheme);
    } else if (systemPrefersDark) {
        html.setAttribute('data-theme', 'dark');
    } else {
        html.setAttribute('data-theme', 'light');
    }

    updateThemeIcons();

    function toggleTheme() {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('devcraft-theme', newTheme);
        updateThemeIcons();
    }

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', toggleTheme);
    }
    if (mobileThemeToggleBtn) {
        mobileThemeToggleBtn.addEventListener('click', toggleTheme);
    }

    function updateThemeIcons() {
        const isDark = html.getAttribute('data-theme') === 'dark';
        const icons = document.querySelectorAll('.theme-icon');
        icons.forEach(icon => {
            icon.textContent = isDark ? '☀️' : '🌙';
        });
    }
}

/* --------------------------------------------------------------------------
   2. Mobile Drawer Navigation
   -------------------------------------------------------------------------- */
function initMobileNav() {
    const openBtn = document.getElementById('mobileMenuOpen');
    const closeBtn = document.getElementById('mobileMenuClose');
    const drawer = document.getElementById('mobileDrawer');
    const overlay = document.getElementById('mobileDrawerOverlay');

    if (!openBtn || !drawer || !overlay) return;

    function openDrawer() {
        drawer.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        drawer.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    openBtn.addEventListener('click', openDrawer);
    if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
    overlay.addEventListener('click', closeDrawer);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && drawer.classList.contains('active')) {
            closeDrawer();
        }
    });
}

/* --------------------------------------------------------------------------
   3. Search Modal Dialog
   -------------------------------------------------------------------------- */
function initSearchModal() {
    const searchModal = document.getElementById('searchModal');
    const openTriggers = document.querySelectorAll('.js-open-search');
    const closeBtn = document.getElementById('searchModalClose');
    const searchInput = document.getElementById('searchInput');
    const resultsContainer = document.getElementById('searchResultsList');

    if (!searchModal) return;

    const sampleArticles = [
        {
            title: "Building Resilient Distributed Systems with Event-Driven Architecture",
            category: "System Design",
            url: "/blog/building-resilient-distributed-systems",
            date: "September 15, 2026",
            readTime: "7 min read"
        },
        {
            title: "Mastering Modern CSS Grid and Fluid Responsive Typography",
            category: "Frontend",
            url: "/blog/mastering-modern-css-grid",
            date: "September 12, 2026",
            readTime: "5 min read"
        },
        {
            title: "Zero-Downtime Database Migrations in High-Scale Applications",
            category: "DevOps",
            url: "/blog/zero-downtime-database-migrations",
            date: "September 08, 2026",
            readTime: "9 min read"
        },
        {
            title: "Deploying Edge Functions with WebAssembly: A Pragmatic Guide",
            category: "Cloud",
            url: "/blog/edge-functions-webassembly",
            date: "September 02, 2026",
            readTime: "6 min read"
        },
        {
            title: "Understanding LLM Embedding Spaces & Vector Databases",
            category: "AI & ML",
            url: "/blog/understanding-llm-embeddings",
            date: "August 28, 2026",
            readTime: "8 min read"
        },
        {
            title: "High-Performance PHP 8.4 Features You Should Be Using",
            category: "Backend",
            url: "/blog/php-8-4-features",
            date: "August 20, 2026",
            readTime: "6 min read"
        }
    ];

    function openModal() {
        searchModal.classList.add('active');
        if (searchInput) {
            searchInput.value = '';
            setTimeout(() => searchInput.focus(), 50);
            renderResults(sampleArticles);
        }
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        searchModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    openTriggers.forEach(btn => btn.addEventListener('click', openModal));
    if (closeBtn) closeBtn.addEventListener('click', closeModal);

    searchModal.addEventListener('click', (e) => {
        if (e.target === searchModal) closeModal();
    });

    // Keyboard shortcut (Ctrl+K or Cmd+K)
    document.addEventListener('keydown', (e) => {
        if ((e.metaKey || e.ctrlKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            if (searchModal.classList.contains('active')) {
                closeModal();
            } else {
                openModal();
            }
        }
        if (e.key === 'Escape' && searchModal.classList.contains('active')) {
            closeModal();
        }
    });

    // Real-time filtering
    if (searchInput && resultsContainer) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            if (!query) {
                renderResults(sampleArticles);
                return;
            }

            const filtered = sampleArticles.filter(item =>
                item.title.toLowerCase().includes(query) ||
                item.category.toLowerCase().includes(query)
            );
            renderResults(filtered);
        });
    }

    function renderResults(items) {
        if (!resultsContainer) return;
        if (items.length === 0) {
            resultsContainer.innerHTML = `
                <li style="padding: 1.5rem; text-align: center; color: var(--text-muted); font-size: 0.95rem;">
                    No articles found matching your query.
                </li>
            `;
            return;
        }

        resultsContainer.innerHTML = items.map(item => `
            <li class="search-result-item" onclick="window.location.href='${item.url}'">
                <div class="search-result-title">${escapeHtml(item.title)}</div>
                <div class="search-result-meta">${escapeHtml(item.category)} • ${escapeHtml(item.readTime)} • ${escapeHtml(item.date)}</div>
            </li>
        `).join('');
    }
}

/* --------------------------------------------------------------------------
   4. Home Page Category Filter
   -------------------------------------------------------------------------- */
function initCategoryFilter() {
    const pills = document.querySelectorAll('.category-pill');
    const posts = document.querySelectorAll('.post-card');
    const countDisplay = document.getElementById('filterCountDisplay');

    if (pills.length === 0 || posts.length === 0) return;

    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');

            const category = pill.getAttribute('data-category');
            let visibleCount = 0;

            posts.forEach(post => {
                const postCategory = post.getAttribute('data-category');
                if (category === 'all' || postCategory === category) {
                    post.style.display = 'flex';
                    visibleCount++;
                } else {
                    post.style.display = 'none';
                }
            });

            if (countDisplay) {
                countDisplay.textContent = `Showing ${visibleCount} article${visibleCount === 1 ? '' : 's'}`;
            }
        });
    });
}

/* --------------------------------------------------------------------------
   5. Reading Progress Bar
   -------------------------------------------------------------------------- */
function initReadingProgress() {
    const progressBar = document.getElementById('readingProgressBar');
    if (!progressBar) return;

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
    });
}

/* --------------------------------------------------------------------------
   6. Table of Contents Highlighting
   -------------------------------------------------------------------------- */
function initTableOfContents() {
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = document.querySelectorAll('.article-content h2, .article-content h3');

    if (tocLinks.length === 0 || sections.length === 0) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                tocLinks.forEach(link => {
                    if (link.getAttribute('href') === `#${id}`) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        });
    }, {
        rootMargin: '-80px 0px -70% 0px'
    });

    sections.forEach(section => {
        if (section.id) observer.observe(section);
    });
}

/* --------------------------------------------------------------------------
   7. Code Copy Buttons
   -------------------------------------------------------------------------- */
function initCodeCopyButtons() {
    const copyButtons = document.querySelectorAll('.btn-copy');

    copyButtons.forEach(btn => {
        btn.addEventListener('click', async () => {
            const codeBlock = btn.closest('.code-block');
            const code = codeBlock ? codeBlock.querySelector('code') : null;
            if (!code) return;

            try {
                await navigator.clipboard.writeText(code.innerText);
                const originalText = btn.textContent;
                btn.textContent = 'Copied!';
                btn.style.color = '#34d399';
                btn.style.borderColor = '#34d399';

                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.style.color = '';
                    btn.style.borderColor = '';
                }, 2000);
            } catch (err) {
                btn.textContent = 'Failed';
                setTimeout(() => {
                    btn.textContent = 'Copy';
                }, 2000);
            }
        });
    });
}

/* --------------------------------------------------------------------------
   8. Clap / Like Counter Interaction
   -------------------------------------------------------------------------- */
function initEngagementClaps() {
    const clapBtn = document.getElementById('btnClap');
    const countSpan = document.getElementById('clapCount');

    if (!clapBtn || !countSpan) return;

    let claps = parseInt(countSpan.textContent, 10) || 142;
    let hasClapped = false;

    clapBtn.addEventListener('click', () => {
        claps++;
        countSpan.textContent = claps;
        clapBtn.classList.add('clapped');

        if (!hasClapped) {
            hasClapped = true;
            showToast('👏 Thanks for appreciating this article!');
        }
    });
}

/* --------------------------------------------------------------------------
   9. Static Comment Submission Simulation
   -------------------------------------------------------------------------- */
function initCommentForm() {
    const form = document.getElementById('newCommentForm');
    const commentsList = document.getElementById('commentsList');

    if (!form || !commentsList) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const authorInput = document.getElementById('commentAuthor');
        const messageInput = document.getElementById('commentMessage');

        const author = authorInput ? authorInput.value.trim() : '';
        const message = messageInput ? messageInput.value.trim() : '';

        if (!author || !message) {
            showToast('Please fill in your name and comment.', 'warning');
            return;
        }

        // Create new static comment element
        const newComment = document.createElement('div');
        newComment.className = 'comment-card';
        newComment.style.animation = 'toastSlideIn 0.3s ease forwards';
        newComment.innerHTML = `
            <div class="comment-header">
                <div class="comment-user">
                    <div class="comment-avatar">${escapeHtml(author.charAt(0).toUpperCase())}</div>
                    <div>
                        <strong style="font-size: 0.95rem;">${escapeHtml(author)}</strong>
                        <div style="font-size: 0.78rem; color: var(--text-muted);">Just now</div>
                    </div>
                </div>
                <span class="badge badge-emerald">Verified Reader</span>
            </div>
            <p style="font-size: 0.95rem; color: var(--text-main); line-height: 1.6;">${escapeHtml(message)}</p>
        `;

        commentsList.prepend(newComment);
        form.reset();
        showToast('💬 Your comment was published!');
    });
}

/* --------------------------------------------------------------------------
   10. Contact Form Simulation & Toast
   -------------------------------------------------------------------------- */
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) return;

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = document.getElementById('contactName')?.value.trim();
        const email = document.getElementById('contactEmail')?.value.trim();
        const message = document.getElementById('contactMessage')?.value.trim();

        if (!name || !email || !message) {
            showToast('Please complete all required fields.', 'warning');
            return;
        }

        contactForm.reset();
        showToast('✉️ Thank you! Your message has been sent successfully.');
    });

    // Also handle newsletter form in footer & sidebar
    const newsletterForms = document.querySelectorAll('.newsletter-form');
    newsletterForms.forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const input = form.querySelector('.newsletter-input');
            if (input && input.value.trim()) {
                input.value = '';
                showToast('🎉 You are now subscribed to DevCraft Dispatch!');
            }
        });
    });
}

/* --------------------------------------------------------------------------
   11. FAQ Accordion
   -------------------------------------------------------------------------- */
function initFaqAccordion() {
    const items = document.querySelectorAll('.faq-item');
    if (items.length === 0) return;

    items.forEach(item => {
        const questionBtn = item.querySelector('.faq-question');
        if (questionBtn) {
            questionBtn.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                items.forEach(i => i.classList.remove('active'));
                if (!isActive) {
                    item.classList.add('active');
                }
            });
        }
    });
}

/* --------------------------------------------------------------------------
   Toast Helper
   -------------------------------------------------------------------------- */
function showToast(message, type = 'info') {
    let container = document.getElementById('toastContainer');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toastContainer';
        container.className = 'toast-container';
        document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = message;

    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateY(10px)';
        toast.style.transition = 'all 0.3s ease';
        setTimeout(() => toast.remove(), 300);
    }, 3500);
}

function escapeHtml(string) {
    const div = document.createElement('div');
    div.innerText = string;
    return div.innerHTML;
}
