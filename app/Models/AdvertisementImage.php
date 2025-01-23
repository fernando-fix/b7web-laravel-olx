<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdvertisementImage extends Model
{
    protected $table = 'advertisement_images';
    protected $fillable = [
        'url',
        'advertisement_id',
        'featured',
    ];

    // Relationships
    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
