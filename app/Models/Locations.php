<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Locations extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function areaShow()
    {
        return $this->belongsTo(Area::class,'area_id','id');
    }
}
