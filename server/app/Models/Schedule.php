<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'opening_hour',
        'closing_hour',
        'day',
        'business_id',
    ];

    protected $casts = [
        'opening_hour' => 'time',
        'closing_hour' => 'time',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class, "business_id", "id");
    }
}
