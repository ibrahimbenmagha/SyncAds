<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'budget_max',
        'begin_date',
        'end_date',
        'file',
        'display_hours',
        'status',
        'url',
        'advertiser_id',
    ];

    protected $casts = [
        'begin_date' => 'date',
        'end_date' => 'date',
        'display_hours' => 'time',
    ];

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class, 'advertiser_id', 'id');
    }

    public function trackings()
    {
        return $this->hasMany(Tracking::class);
    }
}
