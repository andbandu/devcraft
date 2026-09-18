<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            ['name' => 'Frontend', 'badge' => 'badge-emerald', 'gradient' => 'linear-gradient(135deg, #064e3b 0%, #047857 100%)', 'emoji' => '🎨'],
            ['name' => 'DevOps', 'badge' => 'badge-amber', 'gradient' => 'linear-gradient(135deg, #78350f 0%, #b45309 100%)', 'emoji' => '🗄️'],
            ['name' => 'Cloud', 'badge' => 'badge-indigo', 'gradient' => 'linear-gradient(135deg, #1e1b4b 0%, #4338ca 100%)', 'emoji' => '⚡'],
            ['name' => 'AI & ML', 'badge' => 'badge-rose', 'gradient' => 'linear-gradient(135deg, #881337 0%, #e11d48 100%)', 'emoji' => '🧠'],
            ['name' => 'System Design', 'badge' => 'badge-indigo', 'gradient' => 'linear-gradient(135deg, #1e293b 0%, #334155 100%)', 'emoji' => '🏗️'],
        ];

        $category = fake()->randomElement($categories);

        return [
            'title' => fake()->sentence(6),
            'category' => $category['name'],
            'badge_class' => $category['badge'],
            'gradient' => $category['gradient'],
            'emoji' => $category['emoji'],
            'read_time' => (string) fake()->numberBetween(3, 15),
            'author_name' => fake()->name(),
            'author_image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&h=80&q=80',
            'snippet' => fake()->paragraph(2),
        ];
    }
}
