<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comments_content' => $this->faker->text(500),
            'user_id' => User::all()->random()->id,  
            'article_id' => Article::all()->random()->id, 
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
        ];
    }
}
