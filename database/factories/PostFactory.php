<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $categoryIds = Category::pluck('id')->toArray();
       $userIds     = User::pluck('id')->toArray();
        return [
            'title'              => $this->faker->sentence(),
            'description'       => $this->faker->text(),
            'category_id'       => $categoryIds[array_rand($categoryIds)],
            'user_id'           => $userIds[array_rand($userIds)],
        ];
    }
}
