<?php

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
        DB::table('products')->insert([
            ['category_id'=>1,'name'=>'Samsung LED Curved TV 49 Inch','description'=>'warna hitam','price'=>'161450000','image'=>'img\samsungLED.jpg'],
            ['category_id'=>1,'name'=>'Sharp LED TV 32 Inch','description'=>'warna hitam','price'=>'9020000','image'=>'img\sharpTV.jpg'],
            ['category_id'=>1,'name'=>'LG LED TV 55 Inch','description'=>'warna hitam','price'=>'22420000','image'=>'img\LG.jpg'],
            ['category_id'=>1,'name'=>'Mi TV 55inch 4K','description'=>'Ready kirim hari ini, FREE ONGKIR!','price'=>'5699000','image'=>'img\xiaomi.jpg'],

            ['category_id'=>2,'name'=>'Iphone 12 pro max 256 GB','description'=>'warna hitam','price'=>'15420000','image'=>'img\iphone12.png'],
            ['category_id'=>2,'name'=>'Samsung 20 Ultra 256 GB','description'=>'warna hitam','price'=>'1420000','image'=>'img\samsung.jpg'],
            ['category_id'=>2,'name'=>'Iphone 11 pro max 256 GB','description'=>'warna hitam','price'=>'24200000','image'=>'img\iphone11.png'],
           
            ['category_id'=>3,'name'=>'Macbook 16" Inch 2020 512 GB','description'=>'warna hitam','price'=>'42500000','image'=>'img\macbook.png'],
            ['category_id'=>3,'name'=>'ASUS ROG Zephyrus G14 (GA401)','description'=>'warna hitam','price'=>'10420000','image'=>'img\asus.jpg'],
            ['category_id'=>3,'name'=>'Dell Alienware M14X','description'=>'warna hitam','price'=>'14420000','image'=>'img\dell.jpg'],

        ]);
    }
}
