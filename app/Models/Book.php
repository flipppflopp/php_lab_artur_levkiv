<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'year', 'publication_place', 'pages', 'price', 'publisher'
        ];

    public function isbn()
    {
        return $this->hasOne('App\Models\Isbn');
    }


}
