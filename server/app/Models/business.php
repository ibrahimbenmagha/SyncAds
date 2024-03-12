<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Business extends model {
//     private $id;
//     private $userId;
//     private $businessTypeId;
//     private $businessActivityId;
//     private $name;

//     public function __construct($id, $userId, $businessTypeId, $businessActivityId, $name) {
//         $this->id = $id;
//         $this->userId = $userId;
//         $this->businessTypeId = $businessTypeId;
//         $this->businessActivityId = $businessActivityId;
//         $this->name = $name;
//     }

//     // Getters
//     public function getId() {
//         return $this->id;
//     }

//     public function getUserId() {
//         return $this->userId;
//     }

//     public function getBusinessTypeId() {
//         return $this->businessTypeId;
//     }

//     public function getBusinessActivityId() {
//         return $this->businessActivityId;
//     }

//     public function getName() {
//         return $this->name;
//     }

//     // Setters
//     public function setUserId($userId) {
//         $this->userId = $userId;
//     }

//     public function setBusinessTypeId($businessTypeId) {
//         $this->businessTypeId = $businessTypeId;
//     }

//     public function setBusinessActivityId($businessActivityId) {
//         $this->businessActivityId = $businessActivityId;
//     }

//     public function setName($name) {
//         $this->name = $name;
//     }

//     // Convert object to array
//     public function toArray() {
//         return array(
//             'id' => $this->id,
//             'user_id' => $this->userId,
//             'business_type_id' => $this->businessTypeId,
//             'business_activity_id' => $this->businessActivityId,
//             'name' => $this->name
//         );
//     }
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'businessType',
        'businessActivity',
        'user_id',
    ];

    /**
     * Get the user that owns the business.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
