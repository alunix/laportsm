<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function berita()
    {
        return $this->belongsToMany('app\Model\admin\berita','tag_berita');
    }
}
