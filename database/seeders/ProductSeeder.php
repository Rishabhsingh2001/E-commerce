<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
                'name'=>'Apple iphone',
                "price"=>"400",
                "description"=>"Smartphone with 8 Gb RAM, 64 GB ROM, Water and Dust Resistance",
                "category"=>"mobile",
                "gallery"=>"https://wallpaperaccess.com/full/7052724.jpg"
           ],
           [
            'name'=>'OnePlus Y1 Smart Android TV',
            "price"=>"300",
            "description"=>"Operating System: Android, Full HD 1920 x 1080 Pixels, 20 W Speaker Output",
            "category"=>"TV",
            "gallery"=>"https://5.imimg.com/data5/KG/OR/OJ/SELLER-47616313/55-inch-smart-4k-led-tv-500x500.jpeg"
            ],
            [
                'name'=>'Mi 5X Android TV',
                "price"=>"250",
                "description"=>"Mi 5X 108 cm (43 inch) Ultra HD (4K) LED Smart Android TV with Dolby Atmos and Dolby Vision",
                "category"=>"TV",
                "gallery"=>"https://static.toiimg.com/thumb/resizemode-4,msid-83187124,imgsize-400,width-270/83187124.jpg"
           ],
           [
            'name'=>'Boat Headphone',
            "price"=>"150",
            "description"=>"This wireless headset from boAt delivers up to 8 hours of playtime with a single and complete charging session.",
            "category"=>"Headphone",
            "gallery"=>"https://m.media-amazon.com/images/I/61ljxTBpTCL._SL1500_.jpg"
            ],

        ]);

    }
}
