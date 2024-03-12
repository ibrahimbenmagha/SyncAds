<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use App\Models\User;
// use App\Models\business_activity;

class businessactivity extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $business_activity = [
                [
                    'name' => 'Beaty',
                ],
                [
                    'name' => 'Health',
                ],
                [
                    'name' =>'Entertainment'
                ],
                [
                    'name' => 'Sports'
                ],
                [
                    'name' => 'Food'
                ]
        ];
            DB::table('business_activities')->insert($business_activity);
    
        }
    }
