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
        $posts = [
            ['title'=>'Tips cepat Nikah', 'content'=>'lorem ipsum'],
            ['title'=>'Haruskah menunda Nikah?', 'content'=>'lorem ipsum'],
            ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
        ];
        // masukkan data ke database
        DB::table('posts')->insert($posts);
    }
 }
