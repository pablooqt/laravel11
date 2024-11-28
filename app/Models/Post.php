<?php

namespace App\Models;

use Illuminate\Support\Arr;
class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Pablo Anjay Mabar',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio debitis sequi officia asperiores doloremque quisquam, perferendis sapiente eos fugiat corporis earum? Non reprehenderit minima aliquam dolorum alias repellat dolores culpa!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Satria Dinata',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem vel blanditiis nesciunt modi dolore, officiis pariatur quia minus sint magni, a cupiditate rem laboriosam. Doloribus ex officia iste iusto illum.'
            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404); 
        }

        return $post;
    }
}