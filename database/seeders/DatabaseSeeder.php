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
        $this->call(NewsSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('subcription')->insert([
            'title' => 'Gói Design',
            'price' => 23333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
            'images' => '/icon-5.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
        ]);
        DB::table('subcription')->insert([
            'title' => 'Gói Web',
            'price' => 23333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
            'images' => '/icon-5.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
        ]);
        DB::table('subcription')->insert([
            'title' => 'Gói Design',
            'price' => 23333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
            'images' => '/icon-5.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
        ]);
        DB::table('subcription')->insert([
            'title' => 'Gói web',
            'price' => 23333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
            'images' => '/icon-5.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
        ]);
        DB::table('subcription')->insert([
            'title' => 'Gói Design',
            'price' => 23333,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
            'images' => '/icon-5.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
        ]);

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
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                                tellus, luctus nec ullamcorper mattis pulvinar.',
                'address' => 'Puputan Renon East ST. 1190, Bali',
                'phone' => '0921933797',
              'instagram' => '#',
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
                'json1' => json_encode([
                    [
                        'key' => '70',
                        'value' => 'App Design',
                    ],
                    [
                        'key' => '90',
                        'value' => 'Brand Design',
                    ],
                    [
                        'key' => '90',
                        'value' => 'Web Design',
                    ],
                    [
                        'key' => '96',
                        'value' => '3D Illustration',
                    ],
                ]),
                'images' => '/landing/Woman-Pose-98BS3LD-e1658281232137.png',

                'landingpage_id' => 3
            ],
        );

        DB::table('blocks')->insert(
            [
                'block_type' => 'block04',
                'title' => 'Core Features',
                'title1' => 'Our Best Online Course For You',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam.',


                'landingpage_id' => 4
            ]
        );

        DB::table('blocks')->insert([
            'block_type' => 'block05',
            'title' => 'How We Works',
            'title1' => 'Our Working Process',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
            'json' => json_encode([
                [
                    'key' => 'Select Your Courses',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/drafting-compass-solid.svg',

                ],
                [
                    'key' => 'Make An Appointment',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/poll-h-solid.svg',

                ],
                [
                    'key' => 'Purchase Your Courses',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/credit-card-solid.svg',

                ],
                [
                    'key' => 'Enjoy Your Courses',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/pencil-ruler-solid.svg',

                ],

            ]),
            'images' => '/landing/Team-Work-WR9ZE5V.png',

            'landingpage_id' => 5
        ]);
        DB::table('blocks')->insert([
            'block_type' => 'block06',

            'json' => json_encode([
                [
                    'number' => 128,
                    'key' => 'K',
                    'value' => 'Project Completed',
                ],
                [
                    'number' => 38,
                    'key' => '+',
                    'value' => 'Years Experience',
                ],
                [
                    'number' => 100,
                    'key' => '%',
                    'value' => 'Money Back',
                ],
                [
                    'number' => 63,
                    'key' => '+',
                    'value' => 'Expert Team',
                ],
                [
                    'number' => 270,
                    'key' => 'K',
                    'value' => 'Creative Practice',
                ],


            ]),


            'landingpage_id' => 6
        ]);

        DB::table('blocks')->insert([
            'block_type' => 'block07',
            'title' => 'Testimonial',
            'title1' => 'Our Clients Said',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.',
            'link' => '#',
            'json' => json_encode([
                [
                    'key' => 'Andrira Hens',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/attractive-older-man-smiling-PQ3VUFU-150x150.jpg',

                ],
                [
                    'key' => 'Michael Doe',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/portrait-of-good-looking-brunette-woman-smiles-too-UCETKXG-150x150.jpg',

                ],
                [
                    'key' => 'Christin Jerre',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/indoor-shot-of-attractive-european-schoolgirl-has-LEUUQRK-150x150.jpg',

                ],
                [
                    'key' => 'John Doe',
                    'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor labore magna elit.',
                    'image' => '/landing/pleased-cheerful-redhaired-male-with-pleasant-smil-CCXAYZL-150x150.jpg',

                ],

            ]),
            'images' => '/landing/Team-Work-WR9ZE5V.png',

            'landingpage_id' => 7
        ]);


        DB::table('blocks')->insert([
            'block_type' => 'block08',
            'title' => 'Our Blog',
            'title1' => 'Lates Blog & Articles',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua veniam.',
            'link' => '#',
            'landingpage_id' => 8
        ]);
        
    }
}
