<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'phpUser',
            'email' => 'test@example.com',
        ]);

        //   Job::factory(200)->create(); logic moved to the JobnSeeder
        $this->call(JobSeeder::class);
        Post::factory(200)->create();
        Tag::factory(200)->create();

        // you can create dedicated seeders for each model
        // $this->call([JobSeeder::class, PostSeeder::class, TagSeeder::class]);

        //we can seed specific class by using php artisan db:seed --class=ClassName
    }
}
