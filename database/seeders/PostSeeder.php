<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = collect([
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
            [
                'id_user' => rand(1, 3),
                'judul' => fake('id')->sentence('3'),
                'kontent' => fake('id')->sentence('10')
            ],
        ]);
        $posts->each(fn ($post) => Post::create($post));
    }
}
