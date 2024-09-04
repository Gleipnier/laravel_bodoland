<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SportsOfficer;

class SportsOfficersTableSeeder extends Seeder
{

    public function run()
    {
        $officers = [
            ['district' => 'Udalguri', 'name' => 'Sri Swmdwn Muchahary', 'designation' => 'District Sports Officer', 'contact_number' => '8132801530'],
            ['district' => '-Do-', 'name' => 'Sri Bhupen Rabha', 'designation' => 'SDSO', 'contact_number' => '9678421536'],
            ['district' => '-Do-', 'name' => 'Sri Anil Daimary', 'designation' => 'IPE', 'contact_number' => '7002883737'],
            ['district' => 'Kokrajhar', 'name' => 'Sri Pradip Kr. Narzary', 'designation' => 'District Sports Officer, I/c', 'contact_number' => '9101017374'],
            ['district' => 'Chirang', 'name' => 'Sri Dasarath Brahma', 'designation' => 'District Sports Officer, I/c', 'contact_number' => '8133846092'],
            ['district' => 'Baksa', 'name' => 'Sri Debanga Mahilary', 'designation' => 'District Sports Officer, I/c', 'contact_number' => '6000519780'],
            ['district' => 'Kokrajhar', 'name' => 'Sri Motilal Borgoyary', 'designation' => 'SDSO attached to CHD Office', 'contact_number' => '9435720466'],
        ];

        foreach ($officers as $officer) {
            SportsOfficer::create($officer);
        }
    }
}
