<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'author_id',
        'image',
        'description',
        'release_date'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
