<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryCars extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public function CategoriesCarChildrent()
    {
        return $this->hasMany(CategoryCars::class,'parent_id');
    }
}
