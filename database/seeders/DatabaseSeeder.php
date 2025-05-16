<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Role;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();
        Category::factory(10)->create();
        Role::factory(2)->create();
        Post::factory(10)->create();
    }
}
