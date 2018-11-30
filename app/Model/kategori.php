<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function berita()
    {
        return $this->belongsToMany('App\Model\berita','kategori_berita');
    }
}
