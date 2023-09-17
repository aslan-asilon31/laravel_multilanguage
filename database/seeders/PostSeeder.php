<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Post::create([
        //     'title' => 'title_en2',
        //     'desc' => 'desc_en2',
        //     'lang' => 'en',
        //     'lang_id' => 2,
        // ]);
        \App\Models\Post::create([
            'title' => 'title_jp2',
            'desc' => 'desc_jp2',
            'lang' => 'jp',
            'lang_id' => 2,
        ]);
        \App\Models\Post::create([
            'title' => 'title_ch2',
            'desc' => 'desc_ch2',
            'lang' => 'ch',
            'lang_id' => 2,
        ]);
        \App\Models\Post::create([
            'title' => 'title_id2',
            'desc' => 'desc_id2',
            'lang' => 'id',
            'lang_id' => 2,
        ]);
    }
}
