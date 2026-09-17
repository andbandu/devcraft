<?php

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('homepage returns successful response with blog title and articles', function () {
    Post::create([
        'title' => 'Mastering Modern CSS Grid',
        'category' => 'Frontend',
        'badge_class' => 'badge-emerald',
        'gradient' => 'linear-gradient(135deg, #064e3b 0%, #047857 100%)',
        'emoji' => '🎨',
        'read_time' => '5',
        'author_name' => 'Marcus Chen',
        'author_image' => 'https://example.com/avatar.jpg',
        'snippet' => 'How to construct robust fluid layouts.',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('DevCraft');
    $response->assertSee('Mastering Modern CSS Grid');
});

test('single blog post detail page returns successful response', function () {
    $response = $this->get('/blog/building-resilient-distributed-systems');

    $response->assertStatus(200);
    $response->assertSee('Transactional Outbox');
    $response->assertSee('OrderService.php');
});

test('categories page returns successful response with topic disciplines', function () {
    $response = $this->get('/categories');

    $response->assertStatus(200);
    $response->assertSee('Curated Technical Disciplines');
    $response->assertSee('System Design');
    $response->assertSee('Frontend Craftsmanship');
});

test('about page returns successful response with editorial team', function () {
    $response = $this->get('/about');

    $response->assertStatus(200);
    $response->assertSee('About DevCraft');
    $response->assertSee('Sophia Vance');
    $response->assertSee('Marcus Chen');
});

test('contact page returns successful response with form and FAQ', function () {
    $response = $this->get('/contact');

    $response->assertStatus(200);
    $response->assertSee('Get in Touch with Editorial');
    $response->assertSee('Frequently Asked Questions');
});
