<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_book',
        'author_book',
        'description_book',
        'category_id',
        'publish_year',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function borrow()
    {
        return $this->hasMany(Borrow::class);
    }
}
