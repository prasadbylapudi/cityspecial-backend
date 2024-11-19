<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PostInteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_interactions')->insert([
            [
                'post_id' => 1,
                'user_identifier' => 'user1@example.com',
                'type' => 'like',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 1,
                'user_identifier' => 'user2@example.com',
                'type' => 'dislike',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 2,
                'user_identifier' => 'user3@example.com',
                'type' => 'poop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 3,
                'user_identifier' => 'user1@example.com',
                'type' => 'like',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => 3,
                'user_identifier' => 'user2@example.com',
                'type' => 'poop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
