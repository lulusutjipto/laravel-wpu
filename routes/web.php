<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Rumah']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Ini Dashboard Proyek Laen BTW']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post) {

    return view('post', ['title' => 'Article', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
