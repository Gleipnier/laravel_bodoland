<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */    public function run()
    {
        db::table('information')->insert([
            [
                'title' => 'Kanakeswar Narzary Sports Excellence Award, 2023-24.',
                'description' => 'With reference to the subject cited above, It is to inform you that the Govt. of BTR, Kokrajhar has taken up an initiative to provide a cash award of Rs. 1,00,000.00 (Rupees One Lakh) only each to 100 nos. of Prominent Sportsperson of BTR as a "Kanakeswar Narzary Sports Excellence Award" during the year 2023-24.',
                'created_at' => '2023-11-29',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            [
                'title' => 'Notification for the post of SDSO, Coach & PI',
                'description' => 'It is hereby notified to all the concerned candidates who have applied for the post of Sub-Divisional Sports Officer (SOSO), Coach & Physical Instructor (PI) as per advertisement vide NO. CHD/SYW/122/Pt. 11/2023/11 Dated Kokrajhar, the 11th May, 2023 that the Call Letter for Interview against the eligible candidates have been sent to their respective postal address through the Indian Postal Services.',
                'created_at' => '2023-10-13',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            [
                'title' => 'J0B ADVERTISEMENT',
                'description' => 'NO. CHD/SYW/122/Pt. II/2023/11 In pursuance of the Bodoland Territorial Council (BTC) order vide Memo No. BTC/SYW-81/2023/134 dtd. 3rd March, 2023, the CHD, Sports & Youth Welfare, BTC, Kokrajhar invites fresh application from the eligible candidates who are citizen of India for filling up of the following posts under Sports & Youth Welfare Deptt.BTC, in the Pay Band and Grade Pay plus other allowances as admissible under the Rules of State Government of Assam.',
                'created_at' => '2023-05-11',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            [
                'title' => 'Incentive Cash Awrad',
                'description' => 'Incentive Cash Award Programme will be held on 26th of March, 2023 at Bhergaon Mini Stadium, Udalguri at 12.30 p.m. onwards',
                'created_at' => '2023-03-18',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            [
                'title' => 'Application form for Higher Study',
                'description' => 'Application form for Higher Study',
                'created_at' => '2023-08-02',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            [
                'title' => 'Sponsorship Programme for Higher Study in Physical Education',
                'description' => 'Circulation for Sponsorship Programme-2022-23 for Higher Study in the field of Physical Education and Certificate course of Sports Coaching i.e. B.P.Ed., B.P.E.S, M.P.Ed. , M.P.E.S., D,S,C, and PGDSC in the recognized Institutions/ University.',
                'created_at' => '2023-08-02',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            [
                'title' => 'Kanakeswar Narzary Sports Excellence Award, 2023-24.',
                'description' => 'Applications are invited for awarding One Time Incentive Cash Award to the Outstanding Sports Persons under BTR and One Time Ex- Gratia to the Prominent Sports Persons having past proficiency in Sports as well as Sports Organizers having experiences is Sports Activities having age above 60 years on 31st December, 2022 under BTR.',
                'created_at' => '2023-01-18',
                'updated_at' => now(),
                'document' => 'downloads/roadmap.pdf',
            ],
            
            
        ]);
    }
}