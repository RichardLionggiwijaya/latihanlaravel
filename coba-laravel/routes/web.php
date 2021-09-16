<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Richard",
        "email" => "richardlionggiwijaya828@gmail.com",
        "image" => "download.jpg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts =[
        [
            "title" =>"Judul Post",
            "slug" =>"judul-post-pertama",
            "author" =>"Nama author Post",
            "body" =>"dajsfjdas;fjdas;fjdsafjd;safjdsajf;dsjfasj"
        ],
        [
            "title" =>"Judul Post kedua",
            "slug" =>"judul-post-kedua",
            "author" =>"Nama author Post 2",
            "body" =>"dajsfjdas;fjdas;fjdsafjd;safjdsajf;dsjfasj"
        ],
    ];


    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}',function ($slug) { //{slug} = wildcard,untuk ngambil isi apapun dari slash nya
    $blog_posts =[
        [
            "title" =>"Judul Post",
            "slug" =>"judul-post-pertama",
            "author" =>"Nama author Post",
            "body" =>"dajsfjdas;fjdas;fjdsafjd;safjdsajf;dsjfasj"
        ],
        [
            "title" =>"Judul Post kedua",
            "slug" =>"judul-post-kedua",
            "author" =>"Nama author Post 2",
            "body" =>"dajsfjdas;fjdas;fjdsafjd;safjdsajf;dsjfasj"
        ],
];

    $new_post = [];
    foreach ($blog_posts as $post)
    {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
}); 


