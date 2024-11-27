<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'CategoryName'
    ];

    public function products(): HasMany {
        return $this->HasMany(Product::class, 'CategoryId');

    }
}
