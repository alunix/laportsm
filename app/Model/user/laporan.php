<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
