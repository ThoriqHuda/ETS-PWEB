<?php

namespace App\Models;



class Post 
{
    private static $blog_post =  [
        [
            "title"=> "judul post pertama",
            "slug"=> "pertama",
            "author"=>"author post pertama",
            "body"=>"Lorem, ipsum dolor sit 
            amet consectetur adipisicing elit. Unde ipsa consequuntur
             animi facilis quidem dolorum, provident numquam amet 
             voluptatem? Rem incidunt voluptatum dolorum accusantium 
             tenetur voluptas velit! Tempore, quasi atque"
        ],
        [
            "title"=> "judul post kedua",
            "slug"=>"kedua",
            "author"=>"author post kedua",
            "body"=>"Lorem, ipsum dolor sit 
            amet consectetur adipisicing elit. Unde ipsa consequuntur
             animi facilis quidem dolorum, provident numquam amet 
             voluptatem? Rem incidunt voluptatum dolorum accusantium 
             tenetur voluptas velit! Tempore, quasi atque"
        ]
        ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post=static::all();
       
        return $post->firstWhere('slug',$slug);
    }
}

