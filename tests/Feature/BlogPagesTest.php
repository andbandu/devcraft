<?php

test('homepage returns successful response with blog title and articles', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('DevCraft');
    $response->assertSee('Building Resilient Distributed Systems');
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
