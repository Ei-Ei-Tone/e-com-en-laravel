<?php

namespace Database\Seeders;

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
        [
            'name'=>'LG mobile',
            'price'=>'2028',
            'description'=>'A smart phone with 4g ram',
            'category'=>'people',
            'gallery'=>'https://www.lg.com/in/images/gnb-global/LMG910EMW-Aurora-Silver-2.png'
        ],
        [
            'name'=>'Oppo mobile',
            'price'=>'2028',
            'description'=>'A smart phone with 4g ram',
            'category'=>'people',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06190476/gallery/medium01.jpg'
        ],
        [
            'name'=>'Hwei mobile',
            'price'=>'2028',
            'description'=>'A smart phone with 4g ram',
            'category'=>'people',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07517838/gallery/LMG910EMW-Aurora-Silver-D-03.jpg'
        ],
        [
            'name'=>'Honer mobile',
            'price'=>'2028',
            'description'=>'A smart phone with 4g ram',
            'category'=>'people',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07519000/gallery/LMK315IM-D-01-v1.jpg'
        ],
        [
            'name'=>'Realme mobile',
            'price'=>'2028',
            'description'=>'A smart phone with 4g ram',
            'category'=>'people',
            'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06218996/LMG850EMW-D-1-v11.jpg'
        ],
        ]);
    }
}
