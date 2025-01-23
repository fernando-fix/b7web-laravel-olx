<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Advertisement extends Model
{
    protected $table = 'advertisements';
    protected $fillable = [
        'title',
        'slug',
        'price',
        'description',
        'contact',
        'views',
        'user_id',
        'state_id',
        'category_id',
    ];

    // Relationships
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
