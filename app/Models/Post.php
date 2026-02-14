<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all()
    {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Us.',
            'news' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eius excepturi praesentium dolorem repellat quibusdam corrupti, pariatur, laudantium amet omnis iusto ratione? Assumenda eveniet, esse facilis pariatur et aliquid! Esse assumenda voluptatem cupiditate. Minus ipsa numquam modi quaerat cupiditate, sapiente, possimus et quae eveniet veritatis corrupti vel obcaecati vero cumque quia voluptatem iusto fuga maxime nisi ex fugit id. Aliquid, vero! Consectetur sapiente quisquam magni, pariatur soluta non veritatis eaque consequatur animi a, unde nihil inventore eius placeat. Doloremque ut perferendis quam veritatis nesciunt earum nostrum in perspiciatis ratione rerum commodi labore nemo accusantium amet animi eos repellat, laudantium est minus, sapiente nobis. Inventore, velit. Sint eligendi placeat perferendis corrupti est possimus assumenda aliquid, ab ea unde quos nam vitae.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Lulu Hafiza',
            'news' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure eius excepturi praesentium dolorem repellat quibusdam corrupti, pariatur, laudantium amet omnis iusto ratione? Assumenda eveniet, esse facilis pariatur et aliquid! Esse assumenda voluptatem cupiditate. Minus ipsa numquam modi quaerat cupiditate, sapiente, possimus et quae eveniet veritatis.'
        ]
    ];
    }


public static function find ($slug): array {
    $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    if (!$post) {
        abort(404);
    }
    return $post;
}
}

?>