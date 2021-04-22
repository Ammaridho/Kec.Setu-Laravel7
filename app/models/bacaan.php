<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class bacaan extends Model
{
    protected $table = 'bacaan';

    //one to many
    // public function gambar_bacaan()
    // {
    //     return $this->hasMany(gambar_bacaan::class);
    // }
}
