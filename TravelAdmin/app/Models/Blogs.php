<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public function categoryblog()
    {
        return $this->belongsTo(CategoryBlogs::class,'category_blog_id');
    }
}
