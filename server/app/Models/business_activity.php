<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function advertiser()
    {
        return $this->hasMany(Advertiser::class);
    }
}
