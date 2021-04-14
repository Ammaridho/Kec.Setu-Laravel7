<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class gambar_bacaan extends Model
{
    protected $table = 'gambar_bacaan';
    public $timestamps = false;

    //many to one
    // public function bacaan()
    // {
    //     return $this->belongsTo(bacaan::class);
    // }
}
