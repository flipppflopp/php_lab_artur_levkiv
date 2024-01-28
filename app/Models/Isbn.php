<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isbn extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'issued_by', 'issued_on'];

    public function Isbn()
    {
        return $this->hasOne('App\Models\Isbn');
    }

    public function book()
    {
        return $this->BelongsTo('App\Models\Book');
    }
}
