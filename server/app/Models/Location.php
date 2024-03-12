<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'region',
        'city',
        'secteur',
        'business_id',
    ];

    // Define relationships if needed
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
