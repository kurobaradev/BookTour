<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriesTour extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public function CategoriesTourChildrent()
    {
        return $this->hasMany(CategoriesTour::class,'parent_id');
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class,'id');
    }
}
