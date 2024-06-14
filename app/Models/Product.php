<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'price', 'created_at',
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function Images(): HasMany
    {
        return $this->hasMany('images');
    }
}
