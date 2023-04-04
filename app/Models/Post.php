<?php

namespace App\Models;
use App\Models\Post;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Adityaimam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium cum incidunt nemo modi nulla dicta ipsa debitis illum, facere quibusdam esse repudiandae tenetur hic similique voluptatem voluptas, omnis placeat recusandae voluptate explicabo! Aliquam, facilis nobis nisi deserunt quaerat odio voluptas porro non quo debitis dolor alias possimus, quibusdam consectetur fuga magni mollitia adipisci magnam. Numquam, dolores! Quod aliquid illum corrupti ex a alias aperiam quas distinctio quis ea architecto nobis repellat in totam id hic, aspernatur aliquam dicta quos cupiditate mollitia natus vel rem! Dolore hic quaerat laboriosam consequuntur cumque corporis porro, accusantium eos aut neque id ipsa doloribus dignissimos. Iste impedit delectus amet, distinctio est fugiat debitis placeat molestias optio consequuntur labore fugit nemo dolor minus esse perferendis commodi animi neque laborum doloremque. Illum ipsa eaque sequi aliquid tempore architecto consequatur, a dolorem quos suscipit veritatis quisquam? Alias facilis quidem tenetur excepturi eius distinctio esse est similique dolorem consequatur iure eos quos dolor vel veniam perferendis atque, repellendus voluptas fugit totam animi. Nulla quasi vel libero excepturi ea, ut quos corporis quod fuga iure minus voluptates amet id eos repudiandae odit, minima autem eligendi aliquid. Mollitia beatae aperiam voluptas vero assumenda ipsum fugiat culpa quam, quis perspiciatis ipsa, ratione necessitatibus vitae doloremque, laboriosam iure pariatur. Error esse, eos dicta blanditiis rem quasi nobis incidunt quis quisquam architecto deserunt eligendi fugiat quo reiciendis, dolorum, tempora reprehenderit vitae? Est, tempora quasi.",
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Sandika ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium cum incidunt nemo modi nulla dicta ipsa debitis illum, facere quibusdam esse repudiandae tenetur hic similique voluptatem voluptas, omnis placeat recusandae voluptate explicabo! Aliquam, facilis nobis nisi deserunt quaerat odio voluptas porro non quo debitis dolor alias possimus, quibusdam consectetur fuga magni mollitia adipisci magnam. Numquam, dolores! Quod aliquid illum corrupti ex a alias aperiam quas distinctio quis ea architecto nobis repellat in totam id hic, aspernatur aliquam dicta quos cupiditate mollitia natus vel rem! Dolore hic quaerat laboriosam consequuntur cumque corporis porro, accusantium eos aut neque id ipsa doloribus dignissimos. Iste impedit delectus amet, distinctio est fugiat debitis placeat molestias optio consequuntur labore fugit nemo dolor minus esse perferendis commodi animi neque laborum doloremque. Illum ipsa eaque sequi aliquid tempore architecto consequatur, a dolorem quos suscipit veritatis quisquam? Alias facilis quidem tenetur excepturi eius distinctio esse est similique dolorem consequatur iure eos quos dolor vel veniam perferendis atque, repellendus voluptas fugit totam animi. Nulla quasi vel libero excepturi ea, ut quos corporis quod fuga iure minus voluptates amet id eos repudiandae odit, minima autem eligendi aliquid. Mollitia beatae aperiam voluptas vero assumenda ipsum fugiat culpa quam, quis perspiciatis ipsa, ratione necessitatibus vitae doloremque, laboriosam iure pariatur. Error esse, eos dicta blanditiis rem quasi nobis incidunt quis quisquam architecto deserunt eligendi fugiat quo reiciendis, dolorum, tempora reprehenderit vitae? Est, tempora quasi.",
        ]
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
