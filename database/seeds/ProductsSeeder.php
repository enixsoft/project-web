<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        	'productID' => "401015",
        	'productName' => "Product 7700",
        	'productPrice' => "199",
        	'productDescription' => "Product 7700 Description",        	
        ]);
    }
}
