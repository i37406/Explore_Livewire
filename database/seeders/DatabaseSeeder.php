<?php

namespace Database\Seeders;


use App\Models\CommentModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Comment::factory(20)->create();
        \App\Models\CommentModel::factory(20)->create();
    }
}
