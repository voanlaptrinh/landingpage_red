<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i=0; $i < 4; $i++) { 
        DB::table('teams')->insert([
            'name' => 'Thành viên ' .$i,
            'phone' => '0921933898',
            'images' => 'IMG_1786.JPG',
            'category' => 'Dev, design',
            'address' => 'Hà nội',
            'created_at' => Carbon::now(),
        ]);
       }
    }
}
