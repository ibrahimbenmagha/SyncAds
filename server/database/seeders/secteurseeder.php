<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
use App\Models\User;
// use App\Models\business_activity;

class secteurseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $secteur = [
             ['name' => 'Aïn Diab'],
            ['name' => 'Ain Sbaa'],
            ['name' => 'Belvédère'],
            ['name' =>'Californie'],
            ['name' => 'Derb Ghallef'],
            ['name' => 'Gauthier'],
            ['name' => 'Habous'],
            ['name' => 'Hay El Hanaa'],
            ['name' => 'Hay El Hassani'],
            ['name' => 'Hay Salama'],
            ['name' => 'Inara'],
            ['name' =>'La Colline'],
            ['name' => 'Oasis'],
            ['name' => 'Oulfa'],
            ['name' => 'Racine'],
            ['name' => 'Salmia 1'],
            ['name' => 'Salmia 2'],
            ['name' => 'Sidi Marouf'],
            ['name' => 'Les Roches Noires'],
        ];
            DB::table('secteurs')->insert($secteur);
    
        }
    }








// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;  
// use App\Models\Secteur; 

// class secteur_seeder extends Seeder 
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         $secteurs = [
//             ['name' => 'Aïn Diab'],
//             ['name' => 'Ain Sbaa'],
//             ['name' => 'Belvédère'],
//             ['name' =>'Californie'],
//             ['name' => 'Derb Ghallef'],
//             ['name' => 'Gauthier'],
//             ['name' => 'Habous'],
//             ['name' => 'Hay El Hanaa'],
//             ['name' => 'Hay El Hassani'],
//             ['name' => 'Hay Salama'],
//             ['name' => 'Inara'],
//             ['name' =>'La Colline'],
//             ['name' => 'Oasis'],
//             ['name' => 'Oulfa'],
//             ['name' => 'Racine'],
//             ['name' => 'Salmia 1'],
//             ['name' => 'Salmia 2'],
//             ['name' => 'Sidi Marouf'],
//             ['name' => 'Les Roches Noires'],
//         ];

//         DB::table('secteurs')->insert($secteurs);
//     }
// }
