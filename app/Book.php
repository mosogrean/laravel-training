<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'writer',
        'book_name',
        'price',
        'type',
    ];

//    protected $guarded = ['id'];
}
