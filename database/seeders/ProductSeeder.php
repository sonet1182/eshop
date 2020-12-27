<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'Xiomi',
            'price'=>'350',
            'description'=>'This is the description for LG phone',
            'category'=>'Mobile Phone',
            'gallery'=>'https://www.gizmochina.com/wp-content/uploads/2019/06/Xiaomi-Mi-9T-600x600.jpg'
        ],

        [
            'name'=>'Nokia',
            'price'=>'320',
            'description'=>'This is the description for LG phone',
            'category'=>'Mobile Phone',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/1525937784_635_xiaomi_redmi_s2.jpg'
        ],

        [
            'name'=>'Oppo',
            'price'=>'350',
            'description'=>'This is the description for LG phone',
            'category'=>'Mobile Phone',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0036/4806/1509/products/715673a4474fa54a5c14d337dcb979ff524aabfd_square2946516_1.jpg?v=1601848594'
        ],

        [
            'name'=>'Vivo',
            'price'=>'100',
            'description'=>'This is the description for LG phone',
            'category'=>'Mobile Phone',
            'gallery'=>'https://hnsfpau.imgix.net/5/images/detailed/102/HDNOK7.2GY.jpg?fit=fill&bg=0FFF&w=2560&h=1440&auto=format,compress'
        ],

        [
            'name'=>'One Plus',
            'price'=>'500',
            'description'=>'This is the description for LG phone',
            'category'=>'Mobile Phone',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/61L1ItFgFHL._SL1500_.jpg'
        ]

        ]);
    }
}
