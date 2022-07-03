<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteTag extends Model
{
    use HasFactory;

    public function route()
    {
        return $this->belongsToMany(Route::class, 'route_tag_route', 'route_tag_id', 'route_id');
    }
}
