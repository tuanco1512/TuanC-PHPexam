<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $fillable =[
        "author_id",
        "title",
        "ISBN",
        "pub_year",
        "available"
    ];
}
