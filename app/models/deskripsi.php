<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class deskripsi extends Model
{
    protected $table = 'deskripsi';

    public $timestamps = false;

    protected $fillable = [
        'id', 'isi' 
    ];
}
