<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Kim Minju',
            'email' => 'minguri@izone.co.kr',
            'role' => 'Admin',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Hanni',
            'email' => 'hanni@nj.co.kr',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        User::create([
            'name' => 'Kang Seulgi',
            'email' => 'seulgi@rv.co.kr',
            'role' => 'Manager',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        User::factory(8)->create();

        Author::factory(5)->create();
        Publisher::factory(5)->create();

        Category::create([
            'name' => 'Comic',
            'slug' => 'comic',
        ]);

        Category::create([
            'name' => 'Novel',
            'slug' => 'novel',
        ]);

        Category::create([
            'name' => 'Japan',
            'slug' => 'japan',
        ]);

        Category::create([
            'name' => 'History',
            'slug' => 'history',
        ]);

        Category::create([
            'name' => 'English',
            'slug' => 'english',
        ]);

        Book::factory(5)->create();
    }
}
