<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('landingpages')->insert(
            [
                'title' => 'block01',
                'order' => 1,
                'status' => 1
    
            ],
           
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block02',
                'order' => 2,
                'status' => 1
            ],
        );
        DB::table('blocks')->insert(
            [
                'title' => 'block01',
                'title1' => 'block01',
                'title2' => 'block01',
                'title3' => 'block01',
                'title4' => 'block01',
                'title5' => 'block01',
                'landingpage_id' => 1
            ],
        );
        DB::table('blocks')->insert(
            [
                'title' => 'block01',
                'title1' => 'block01',
                'title2' => 'block01',
                'title3' => 'block01',
                'title4' => 'block01',
                'title5' => 'block01',
                'landingpage_id' => 2
            ],
        );
    }
}
