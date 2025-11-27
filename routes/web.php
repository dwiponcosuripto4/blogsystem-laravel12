<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
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
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
