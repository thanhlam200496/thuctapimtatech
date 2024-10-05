<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3), // Tạo tên bài viết ngẫu nhiên
            'news_summary' => $this->faker->paragraph(), // Tạo tóm tắt ngẫu nhiên
            'image' => $this->faker->imageUrl(), // Tạo đường dẫn hình ảnh ngẫu nhiên
            'category_id' => Category::all()->random()->id, // Liên kết với bảng categories
            'slug' => Str::slug($this->faker->sentence(3)), // Tạo slug từ tên bài viết
            'description' => $this->faker->text(500), // Tạo mô tả ngẫu nhiên
            'stock' => $this->faker->numberBetween(0, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
