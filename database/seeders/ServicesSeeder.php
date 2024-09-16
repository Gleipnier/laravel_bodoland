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
                'title' => 'Services Extra',
                'description' => 'Description',
                'image_path' => 'images/gov1.jpg',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
        ]);
    }
}
