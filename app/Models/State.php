<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $fillable = [
        'name',
        'uf',
    ];

    // Relationships
    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
