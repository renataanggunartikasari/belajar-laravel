<?php

namespace App\Models;


class Posts
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Renata",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem unde facere officiis voluptatem deserunt? Consectetur tempora, sit quod, blanditiis voluptatem atque a minima velit deleniti eligendi dolor officia eum mollitia obcaecati cumque suscipit minus magni excepturi at veritatis inventore voluptas sequi culpa. Explicabo minus perferendis iste commodi soluta, aperiam quos. Omnis, mollitia laboriosam! Id, sint. Expedita ea illo cupiditate iure non et officia, reiciendis iste dolorem repellendus labore quasi eum, saepe tempore? Magni ipsum ratione enim blanditiis, esse natus unde."
        ],

        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Arzaline",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, nesciunt. Temporibus id nam maxime hic quos ipsa minima voluptatem ducimus laudantium, necessitatibus deleniti eos est voluptatum labore porro explicabo dolores dolor veritatis voluptatibus voluptates eveniet consectetur, sapiente dignissimos? Ex vitae iusto commodi recusandae, beatae nulla corporis rerum deleniti dolor mollitia laboriosam distinctio! Esse molestias debitis doloremque hic minima aspernatur, consequuntur laudantium sit beatae maiores quisquam dolore? Quas aliquid accusantium obcaecati expedita tenetur labore ab distinctio ut, culpa sit, similique minima quo autem illum eaque debitis sapiente nisi officiis harum. Est consequuntur blanditiis eaque nobis corrupti beatae nam distinctio, quia voluptates."
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
