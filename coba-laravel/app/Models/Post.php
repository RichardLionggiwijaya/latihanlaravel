<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable =['title','excerpt','body'];//title,ex,body yang boleh di isi ,sisanya ga boleh
    protected $guarded =['id']; //id ga boleh di isi/ dijagain,sisanya boleh
}
