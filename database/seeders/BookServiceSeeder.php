<?php

namespace Database\Seeders;

use App\Models\BookService;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Membership',
                'description' => 'Information on how to become a member, membership benefits, and policies.',
                'category' => 'General Services'
            ],
            [
                'name' => 'Interlibrary Loan',
                'description' => 'Borrow materials from other libraries.',
                'category' => 'Borrowing Services'
            ],
            [
                'name' => 'Research Consultation',
                'description' => 'One-on-one assistance with research projects.',
                'category' => 'Research Services'
            ],
            [
                'name' => 'Computer Access',
                'description' => 'Free computer and internet access for library members.',
                'category' => 'Technology Services'
            ],
            [
                'name' => 'Printing and Copying',
                'description' => 'Print and copy services available at affordable rates.',
                'category' => 'Technology Services'
            ]
        ];

        foreach ($services as $service) {
            BookService::create($service);
        }
    }
}
