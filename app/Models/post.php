<?php

namespace App\Models;


class post /* data yang akan di akses */
{
    private static $blog_post = [
    [
        "title" => "post pertama",
        "slug" => "judul+post+pertama",
        "author" => "Fredi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit eius, nam earum tenetur tempore obcaecati iste accusantium. Est unde deserunt alias delectus molestiae nobis dolorum, et doloribus blanditiis harum?"
        ],
    [
        "title" => "post kedua lagi",
        "slug" => "judul+post+kedua",
        "author" => "Fredi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sit eius, nam earum tenetur tempore obcaecati iste accusantium. Est unde deserunt alias delectus molestiae nobis dolorum, et doloribus blanditiis harum?"
        ]
];

public static function all(){ /* mwngambil semua data yang ada */
    return collect(self::$blog_post); /* collect membuat array biasa menjadi memiliki banyak fungsi di laravel */
}
public static function find($slug){ /* menampilkan data 1 per 1 */
    $posts = static::all(); /* mwngambil informasi data tang tesedia */

return $posts -> firstWhere('slug', $slug); /* embil semua collection post, cari yang pertama ditemukan
dimana slugnya = $slug*/
}
}
