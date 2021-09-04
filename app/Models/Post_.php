<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andi Aliansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim laudantium at nisi ratione, modi voluptatum ab tempore commodi atque optio hic soluta minus aliquid error sunt ipsa officiis saepe dicta itaque molestiae earum corporis provident. Pariatur nostrum quae vitae repellat qui quisquam eligendi quos unde. Nam, nihil! Cupiditate culpa obcaecati pariatur at voluptate doloribus tempora possimus numquam mollitia sequi repudiandae sed ad incidunt earum placeat aperiam doloremque minus optio veniam error voluptates, nihil laboriosam eligendi dolores! Provident corrupti quibusdam ullam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kuro Neko",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis omnis explicabo suscipit, molestiae quo facilis minima facere eius magni quam delectus quos incidunt? Itaque nihil odit repellat, id deleniti aliquid rerum dicta ipsam vitae, esse placeat? Repudiandae non libero repellat nam maxime deserunt nemo. Repellat iste, consequatur praesentium nesciunt, dolor nemo maxime eos recusandae amet a sapiente dicta rem voluptas incidunt aut non. Veritatis exercitationem mollitia voluptatum aliquid sint quibusdam hic modi provident numquam! Delectus eos dignissimos tempora beatae cumque sunt ratione pariatur eum totam nulla. Nobis dicta quam magnam neque, esse voluptates earum voluptate ad asperiores optio totam accusamus omnis similique consequuntur necessitatibus quisquam, adipisci commodi maiores fugit, ipsa laudantium quos natus voluptatum. Deleniti quaerat obcaecati quos aliquid sed."
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
