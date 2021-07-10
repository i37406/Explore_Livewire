<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CommentModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommentModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function(){
                                return User::all()->random();
            },
            'body' => $this->faker->paragraph
        ];
    }
}
