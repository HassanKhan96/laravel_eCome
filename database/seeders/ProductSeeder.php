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
                'name'=>'Macbook pro',
                'price'=>'500',
                'category'=>'laptop',
                'description'=>'Macbook pro 2015 256gb SSD BigSurr',
                'imageUrl'=>'https://images.unsplash.com/photo-1544931170-3ca1337cce88?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'
            ],
            [
                'name'=>'Iphone 11',
                'price'=>'700',
                'category'=>'mobile',
                'description'=>'Iphone 11 with 128gb rom and 8gb ram',
                'imageUrl'=>'https://images.unsplash.com/photo-1589492477829-5e65395b66cc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'
            ],
            [
                'name'=>'Redmi Mi 10',
                'price'=>'200',
                'category'=>'mobile',
                'description'=>'Redmi Mi 10 8gb ram, 64gb rom and 32mega pixal camera.',
                'imageUrl'=>'https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'
            ],
            [
                'name'=>'Smart LED',
                'price'=>'250',
                'category'=>'TV',
                'description'=>'Smart LED with screen cast feature and more.',
                'imageUrl'=>'https://images.unsplash.com/photo-1593305841991-05c297ba4575?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'
            ],
            [
                'name'=>'LG Fridge',
                'price'=>'350',
                'category'=>'Fridge',
                'description'=>'Double door counter top fridge.',
                'imageUrl'=>'https://images.unsplash.com/photo-1630459065645-549fe5a56db4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8'
            ]
        ]);
    }
}
