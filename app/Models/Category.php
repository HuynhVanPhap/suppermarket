<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'slug',
    ];

    /**
     * Get all of the comments for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}