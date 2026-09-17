@props(['category', 'categoryBadge', 'gradient', 'emoji', 'date', 'readTime', 'title', 'author', 'authorImg'])
<article class="post-card" data-category="{{ \Illuminate\Support\Str::slug($category) }}">
    <div class="post-thumb">
        <span class="badge {{ $categoryBadge }} post-thumb-badge">{{ $category }}</span>
        <div class="post-thumb-pattern" style="background: {{ $gradient }};">
            <div style="font-size: 2.75rem;">{{ $emoji }}</div>
        </div>
    </div>
    <div class="post-body">
        <div class="post-meta-row" style="margin-bottom: 0.5rem;">
            <time datetime="{{ $date }}">{{  $date  }}</time>
            <span>•</span>
            <span class="reading-time">⏱️ {{ $readTime  }} min read</span>
        </div>
        <h2 class="post-title">
            <a href="{{ route('blog.show') }}">{{  $title  }}</a>
        </h2>
        <p class="post-snippet">
            {{ $slot  }}
        </p>
        <div class="post-footer">
            <div class="author-pill">
                <img src="{{ $authorImg }}" alt="{{ $author }}" class="author-avatar"
                    style="width: 32px; height: 32px;">
                <span class="author-name" style="font-size: 0.85rem;">{{  $author  }}</span>
            </div>
            <a href="{{ route('blog.show') }}" style="color: var(--primary); font-weight: 700; font-size: 0.88rem;">Read
                &rarr;</a>
        </div>
    </div>
</article>