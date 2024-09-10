<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('services')->insert([
            [
                'title' => 'Services',
                'description' => 'Sports Tournament',
                'image_path' => 'images/coach.jpg',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Services',
                'description' => 'Personal Coaching',
                'image_path' => 'images/soccer-coach-post.png',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Services',
                'description' => 'Team Coaching',
                'image_path' => 'images/sports.png',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
