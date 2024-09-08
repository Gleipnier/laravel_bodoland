<?php

namespace Database\Seeders;

use App\Models\document;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        db::table('documents')->insert([
            [
                'title' => 'Sports & Youth',
                'size' => '287.9 KB',
                'detail' => 'downloads/roadmap.pdf',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Vision for 2025.pdf',
                'size' => '136.09 KB',
                'detail' => 'downloads/vision2025.pdf',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Action Plan',
                'size' => '369 KB',
                'detail' => 'downloads/actionplan.pdf',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Calendar',
                'size' => '169 KB',
                'detail' => 'downloads/calender.pdf',  // File path of the uploaded document
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
