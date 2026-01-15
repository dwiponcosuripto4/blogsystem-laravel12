<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "slug" => "judul-artikel-1",
                "title" => "Judul Artikel 1",
                "author" => "Dwiponco Suripto",
                "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis sunt ipsam
                doloribus laboriosam cupiditate
                earum nemo, possimus modi. Expedita veritatis a tenetur eveniet error culpa dolorum laborum, minus sit
                alias."
            ],
            [
                "id" => 2,
                "slug" => "judul-artikel-2",
                "title" => "Judul Artikel 2",
                "author" => "Jane Doe",
                "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugit veniam
                reprehenderit omnis. Enim placeat asperiores odio labore amet eius molestiae fugit accusamus perferendis,
                pariatur excepturi repudiandae quo. Aperiam, mollitia."
            ]
        ];
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
