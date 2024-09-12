<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LatestUpdate;

class LatestUpdatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('latest_updates')->insert([
            [
                'title' => 'Book Ticket To DURANDCUP',
                'link' => 'https://www.youtube.com/watch?v=xmvD_EjNE-4',
                'date' => '2023-08-02',  // File path of the uploaded document
                'created_at'=> now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Update Title 2',
                'link' => 'https://www.youtube.com/watch?v=xmvD_EjNE-4',
                'date' => '2023-08-02',  // File path of the uploaded document
                'created_at'=> now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
