<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'business_activity_id'
    ];

    public function business_type()
    {
        return $this->hasMany(BusinessType::class);
    }
 
}
