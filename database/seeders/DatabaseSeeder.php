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
        DB::table('landingpages')->insert(
            [
                'title' => 'block03',
                'order' => 3,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block04',
                'order' => 4,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block05',
                'order' => 5,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block06',
                'order' => 6,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block07',
                'order' => 7,
                'status' => 1
            ],
        );
        DB::table('landingpages')->insert(
            [
                'title' => 'block08',
                'order' => 8,
                'status' => 1
            ],
        );
        DB::table('webConfigs')->insert(
            [
                'title' => 'Landingpages',
                'email' => 'info@example.com',
                'phone' => '0921933797',
                'facebook' => '#',
                'youtube' => '#',
                'twitter' => '#',
                'telegram' => '#',
                'zalo' => '#',
            ],
        );
        DB::table('blocks')->insert(
            [
                'block_type' => 'block01',
                'title' => 'Make Perfect Design',
                'title1' => 'Let\'s Learn 3D Design Quickly & Creatively',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean ligula eget dolor. Aenean massa. Cum sociis natoque penatibus magnis parturient montes nascetur ridiculus. ',
                'link' => '#',
                'link1' => 'https://www.youtube.com/watch?v=MLpWrANjFbI',
                'images' => '/landing/Working-at-Office.png',
                'landingpage_id' => 1
            ],
        );
        DB::table('blocks')->insert(
            [
                'block_type' => 'block02',
                'title' => 'We Collaborate With Professional Designers Around The World',
                'json' => json_encode([
                    [
                        'key' => 'Drawing Sketch',
                        'value' => 'Lorem ipsum dolor sit ame, consect adipiscing elitse do eiusmod elit.',
                        'link' => '#',
                        'image' => '/landing/icon-5.png',

                    ],
                    [
                        'key' => 'Drawing Sketch',
                        'value' => 'Lorem ipsum dolor sit ame, consect adipiscing elitse do eiusmod elit.',
                        'link' => '#',
                        'image' => '/landing/icon-5.png',

                    ],
                    [
                        'key' => 'Drawing Sketch',
                        'value' => 'Lorem ipsum dolor sit ame, consect adipiscing elitse do eiusmod elit.',
                        'link' => '#',
                        'image' => '/landing/icon-5.png',

                    ],
                    [
                        'key' => 'Drawing Sketch',
                        'value' => 'Lorem ipsum dolor sit ame, consect adipiscing elitse do eiusmod elit.',
                        'link' => '#',
                        'image' => '/landing/icon-5.png',

                    ],
                    [
                        'key' => 'Drawing Sketch',
                        'value' => 'Lorem ipsum dolor sit ame, consect adipiscing elitse do eiusmod elit.',
                        'link' => '#',
                        'image' => '/landing/icon-5.png',

                    ],
                    [
                        'key' => 'Drawing Sketch',
                        'value' => 'Lorem ipsum dolor sit ame, consect adipiscing elitse do eiusmod elit.',
                        'link' => '#',
                        'image' => '/landing/icon-5.png',

                    ],
                ]),

                'landingpage_id' => 2
            ],
        );
        DB::table('blocks')->insert(
            [
                'block_type' => 'block03',
                'title' => 'Core Features',
                'title1' => 'Learn More About Our Methodology',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit utelit nec ullamcorper mattis pulvinar dapibus.',
                'json' => json_encode([
                    [
                        'key' => 'Trusted Platform',
                    ],
                    [
                        'key' => 'Multi Purpose',
                    ],
                    [
                        'key' => 'Security Ensured',
                    ],
                    [
                        'key' => 'Real Interactions',
                    ],
                    [
                        'key' => 'User Experience',
                    ],
                    
                ]),

                'images' => '/landing/Woman-Pose-98BS3LD-e1658281232137.png',

                'landingpage_id' => 3
            ],
        );
    }
}
