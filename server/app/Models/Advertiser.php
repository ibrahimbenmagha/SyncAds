<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    use HasFactory;
    protected $table = 'advertisers';

    protected $fillable = [
        'name',
        'advertiser_activity',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}
