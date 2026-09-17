<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Mastering Modern CSS Grid and Fluid Responsive Typography',
                'category' => 'Frontend',
                'badge_class' => 'badge-emerald',
                'gradient' => 'linear-gradient(135deg, #064e3b 0%, #047857 100%)',
                'emoji' => '🎨',
                'read_time' => '5',
                'author_name' => 'Marcus Chen',
                'author_image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80',
                'snippet' => 'How to construct robust, zero-breakage fluid layouts using pure CSS subgrid, clamp(), and container queries without extra media queries.',
            ],
            [
                'title' => 'Zero-Downtime Database Migrations in High-Scale Applications',
                'category' => 'DevOps',
                'badge_class' => 'badge-amber',
                'gradient' => 'linear-gradient(135deg, #78350f 0%, #b45309 100%)',
                'emoji' => '🗄️',
                'read_time' => '9',
                'author_name' => 'Elena Rostova',
                'author_image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80',
                'snippet' => 'Step-by-step strategies for expanding schema columns, phasing out legacy tables, and running dual-writes without locking production tables.',
            ],
            [
                'title' => 'Deploying Edge Functions with WebAssembly: A Pragmatic Guide',
                'category' => 'Cloud',
                'badge_class' => 'badge-indigo',
                'gradient' => 'linear-gradient(135deg, #1e1b4b 0%, #4338ca 100%)',
                'emoji' => '⚡',
                'read_time' => '6',
                'author_name' => 'David Miller',
                'author_image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=80&h=80&q=80',
                'snippet' => 'Compressing compute overhead at global PoPs. Why compile Rust and Go to Wasm for instantaneous millisecond cold starts.',
            ],
            [
                'title' => 'Understanding LLM Embedding Spaces & Vector Databases',
                'category' => 'AI & ML',
                'badge_class' => 'badge-rose',
                'gradient' => 'linear-gradient(135deg, #881337 0%, #e11d48 100%)',
                'emoji' => '🧠',
                'read_time' => '8',
                'author_name' => 'Sophia Vance',
                'author_image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80',
                'snippet' => 'Demystifying cosine distance, HNSW indexes, hybrid BM25 search, and chunking strategies when building enterprise RAG pipelines.',
            ],
            [
                'title' => 'Clean Architecture Patterns in Modern PHP 8.4',
                'category' => 'System Design',
                'badge_class' => 'badge-indigo',
                'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)',
                'emoji' => '🏗️',
                'read_time' => '6',
                'author_name' => 'Marcus Chen',
                'author_image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80',
                'snippet' => 'Leveraging property hooks, asymmetric visibility, and custom attributes to construct clean, domain-driven boundaries in backend services.',
            ],
            [
                'title' => 'Micro-Frontends in 2026: The Good, The Bad, and The Pragmatic',
                'category' => 'Frontend',
                'badge_class' => 'badge-emerald',
                'gradient' => 'linear-gradient(135deg, #0c4a6e 0%, #0284c7 100%)',
                'emoji' => '🧩',
                'read_time' => '7',
                'author_name' => 'Elena Rostova',
                'author_image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=80&h=80&q=80',
                'snippet' => 'A retrospective on module federation, isolated build pipelines, and whether organizational autonomy justifies the runtime trade-offs.',
            ],
        ];

        foreach ($posts as $postData) {
            Post::updateOrCreate(
                ['title' => $postData['title']],
                $postData
            );
        }
    }
}
