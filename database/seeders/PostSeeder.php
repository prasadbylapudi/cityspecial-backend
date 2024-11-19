<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Beautiful Park',
                'username' => 'john_doe',
                'email' => 'john@example.com',
                'description' => 'A wonderful park in the heart of the city.',
                'category' => 'Nature',
                'image_url' => 'https://example.com/park.jpg',
                'location' => 'Central City',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hidden Cafe',
                'username' => 'jane_doe',
                'email' => 'jane@example.com',
                'description' => 'A small, cozy cafe with amazing coffee.',
                'category' => 'Food',
                'image_url' => 'https://example.com/cafe.jpg',
                'location' => 'Downtown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Art Museum',
                'username' => 'alice',
                'email' => 'alice@example.com',
                'description' => 'A museum showcasing modern art.',
                'category' => 'Art',
                'image_url' => 'https://example.com/museum.jpg',
                'location' => 'Art District',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
