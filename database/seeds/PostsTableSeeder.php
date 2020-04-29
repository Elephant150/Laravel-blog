<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => 'Laravel blog',
                    'intro' => 'Blog written on Laravel',
                    'body_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'picture' => 'picture/1.jpg'
                ],
                [
                    'title' => 'Laravel blog 2',
                    'intro' => 'Blog written on Laravel post 2',
                    'body_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    'picture' => 'picture/1.jpg'
                ]
            )
        );
    }
}
