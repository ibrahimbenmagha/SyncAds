<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'business_type_id'
    ];

    public function advertiser()
    {
        return $this->hasMany(Advertiser::class);
    }

    public function business_type()
    {
        return $this->belongsTo(BusinessType::class, 'business_type_id', 'id');
    }
}
