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
        //
        DB::table('products')->insert([
            [
                'name'=>'Dell Vostro 3510 laptop',
                'price'=>'13999',
                'description'=>'11th Gen Intel core i7-1165G7, 8GB RAM, 1TB HDD',
                'category'=>'Laptop',
                'gallery'=>'https://m.media-amazon.com/images/I/81Gphn97m9L._AC_SL1500_.jpg',
            ],
            [
                'name'=>'Lenovo IdeaPad 3',
                'price'=>'17499',
                'description'=>'11th Intel Core i7-1165G7, 12GB RAM',
                'category'=>'Laptop',
                'gallery'=>'https://m.media-amazon.com/images/I/71h5Z3Qf72L._AC_SL1500_.jpg',
            ],
            
            [
                'name'=>'HP 255 G8 Laptop',
                'price'=>'7499',
                'description'=>'Athlon Gold 3150U, 8 GB RAM, 1 TB HDD, AMD Radeon Graphics',
                'category'=>'Laptop',
                'gallery'=>'https://m.media-amazon.com/images/I/81QGhmhCNuL._AC_SL1500_.jpg',
            ],
            
            [
                'name'=>'HP Pavilion 15-dk1026ne Gaming laptop',
                'price'=>'15799.',
                'description'=>'0th Intel Core i5-10300H, 8 GB RAM, 1TB HDD and 128GB SSD',
                'category'=>'Laptop',
                'gallery'=>'https://m.media-amazon.com/images/I/710tjfg+TBL._AC_SL1500_.jpg',
            ],
            
            [
                'name'=>'HP 15-dw3019ne Laptop',
                'price'=>'14299',
                'description'=>'11th Intel Core i5-1135G7, 8GB RAM, 1TB + 128GB SSD, NVIDIA GeForce MX350 2GB GDDR5 Graphics',
                'category'=>'Laptop',
                'gallery'=>'https://m.media-amazon.com/images/I/31L5t5PRuZL._AC_.jpg',
            ],
            
            
        ]);
       
    }
}
