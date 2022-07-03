<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaTag extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsToMany(Area::class, 'area_tag_area', 'area_tag_id', 'area_id');
    }
}
