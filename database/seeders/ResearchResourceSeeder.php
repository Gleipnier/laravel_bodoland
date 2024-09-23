<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResearchResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResearchResourceSeeder extends Seeder
{
    public function run()
    {
        $resources = [
            [
                'title' => 'JSTOR',
                'description' => 'Digital library of academic journals, books, and primary sources.',
                'type' => 'Database',
                'url' => 'https://www.jstor.org/'
            ],
            [
                'title' => 'Academic Writing Guide',
                'description' => 'Comprehensive guide to academic writing styles and formats.',
                'type' => 'Guide',
                'url' => null
            ],
            [
                'title' => 'Citation Management Workshop',
                'description' => 'Learn how to use citation management tools effectively.',
                'type' => 'Workshop',
                'url' => null
            ],
            [
                'title' => 'ProQuest',
                'description' => 'Platform for scholarly journals, newspapers, reports, working papers and datasets.',
                'type' => 'Database',
                'url' => 'https://www.proquest.com/'
            ],
            [
                'title' => 'Research Methodology Course',
                'description' => 'Online course covering various research methodologies.',
                'type' => 'Course',
                'url' => null
            ]
        ];

        foreach ($resources as $resource) {
            ResearchResource::create($resource);
        }
    }
}
