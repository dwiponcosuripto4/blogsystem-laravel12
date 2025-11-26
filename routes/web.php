<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            "title" => "Judul Artikel 1",
            "author" => "Dwiponco Suripto",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis sunt ipsam
            doloribus laboriosam cupiditate
            earum nemo, possimus modi. Expedita veritatis a tenetur eveniet error culpa dolorum laborum, minus sit
            alias."
        ],
        [
            "title" => "Judul Artikel 2",
            "author" => "Jane Doe",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid fugit veniam
            reprehenderit omnis. Enim placeat asperiores odio labore amet eius molestiae fugit accusamus perferendis,
            pariatur excepturi repudiandae quo. Aperiam, mollitia."
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
