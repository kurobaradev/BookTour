<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cars extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public function categorycar()
    {
        return $this->belongsTo(CategoryCars::class,'category_car_id');
    }
}
