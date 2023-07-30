<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
            'name' => 'Telefon HUAWEI nova 9 SE',
            'description' => 'Telefon HUAWEI nova 9 SE, 128GB, 8GB RAM, Dual SIM, Midnight Black.',
            'photo' =>
            'https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_HUAWEI_Nova_9_SE_128GB_8GB_RAM_Dual_SIM_Midnight_Black_coperta.jpg',
            'price' => 899.00
        ]);
        DB::table('products')->insert([
            'name' => 'Smartwatch GARMIN Venu Sq 2 Music Edition',
            'description' => 'Smartwatch GARMIN Venu Sq 2 Music Edition, 40mm, Wi-Fi, Android/iOS, silicon, Slate/Black',
            'photo' =>'https://lcdn.altex.ro/media/catalog/product/S/m/Smartwatch-GARMIN-Venu-Sq_-Android-iOS_-silicon_-Slate-Shadow-Gray_2.jpg',
            'price' => 1257.99
        ]);
        DB::table('products')->insert([
            'name' => 'Laptop HP 15-dw3043nq',
            'description' => 'Laptop HP 15-dw3043nq, Intel Core i3-1115G4 pana la 4.1GHz, 15.6" Full HD, 8GB, SSD 256GB, Intel UHD Graphics, Windows 10 Home, gri inchis',
            'photo' =>'https://lcdn.altex.ro/media/catalog/product/h/p/hp_15s-fq20_negru_1_33ca50d2.jpg',
            'price' => 1990.90
        ]);
     }
 }
