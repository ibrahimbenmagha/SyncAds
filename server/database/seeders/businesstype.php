<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use App\Models\User;
use App\Models\business_Type;

class businesstype extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $business_type = [
                [
                    'name' => 'Parapharmacy',
                ],
                [
                    'name' => 'Pharmacy',
                ],
                [
                    'name' =>'Cinema'
                ],
                [
                    'name' => 'Gaming center'
                ],
                [
                    'name' => 'Gaming shop'
                ],
                [
                    'name' => 'Gym'
                ],
                [
                    'name' => 'Bodybulding product shop'
                ],
                [
                    'name' => 'Supermarcket'
                ]
        ];
            DB::table('business_types')->insert($business_type);
    
        }
}
