<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => '太郎',
            'email' => 'user1@example.com',
            'sex' => '0',
            'self_introduction' => 'コーギー１０ヶ月です',
            'img_name' => 'sample001.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'パグ',
            'email' => 'user2@example.com',
            'sex' => '0',
            'self_introduction' => '人懐っこい子です',
            'img_name' => 'sample002.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'シュナウザー',
            'email' => 'user3@example.com',
            'sex' => '0',
            'self_introduction' => '元気でわんぱくです',
            'img_name' => 'sample003.jpg',
            'password' => Hash::make('password123'),
            ],
            ['name' => 'イーロン',
            'email' => 'user4@example.com',
            'sex' => '0',
            'self_introduction' => '上目使いが得意です',
            'img_name' => 'sample004.jpg',
            'password' => Hash::make('password123'),
            ],
        ]);
    }
}
