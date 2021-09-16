<?php

namespace App\Models;



class Post
{
    private static $blog_posts =[
        [
            "title" =>"Judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author" =>"Nama author Post",
            "body" =>"dajsfjdas;fjdas;fjdsafjd;safjdsajf;dsjfasj"
        ],
        [
            "title" =>"Judul Post kedua Richard",
            "slug" =>"judul-post-kedua",
            "author" =>"Nama author Post 2",
            "body" =>"dajsfjdas;fjdas;fjdsafjd;safjdsajf;dsjfasj"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts); //mengubah array menjadi collection jadi bisa pake fungsibanyak fungsi 
    }

    public static function find($slug)
    {
        $posts = static::all(); //ambil semua post
        

        // $post = [];
        // foreach ($blog_posts as $p) //looping 1 1,representasikan sebagia $p
        // {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
    
}
