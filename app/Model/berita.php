<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
