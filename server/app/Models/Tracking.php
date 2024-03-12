<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'date',
        'display_time',
        'campaign_id',
    ];

    protected $casts = [
        'date' => 'datetime',
        'display_time' => 'time',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'id');
    }
}
