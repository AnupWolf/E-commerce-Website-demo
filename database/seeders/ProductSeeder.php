<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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

            ['name'=>'Panasonic Tv',
            'price'=> '400',
            'category'=> 'tv',
            'description'=>'A smart tv  with  much more features.',
            'image'=> 'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
            ],

            ['name'=>'Oppo mobile',
            'price'=> '300',
            'category'=> 'mobile',
            'description'=>'A smart phone with 8gb ram and much more features.',
            'image'=> 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'
            ],

            ['name'=>'Sony tv',
            'price'=> '500',
            'category'=> 'tv',
            'description'=>'A smart tv with  much more features.',
            'image'=> 'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'
            ],

            ['name'=>'LG fridge',
            'price'=> '500',
            'category'=> 'fridge',
            'description'=>'A fridge with  much more features.',
            'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU'
            ],
        ]);
    }
}