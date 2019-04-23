<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->id = 1;
        $product->name = "Quần jeans nam ống bó";
        $product->desc = "Dáng ôm sát (skinny) Quần dài";
        $product->content = "Dáng ôm sát (skinny) Quần dài";
        $product->price = "400000";
        $product->quantity = 5;
        $product->image = "";
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->id = 2;
        $product->name = "Quần jeans nam ống bó";
        $product->desc = "Dáng ôm sát (skinny) Quần dài";
        $product->content = "Dáng ôm sát (skinny) Quần dài";
        $product->price = "400000";
        $product->quantity = 5;
        $product->image = "";
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->id = 3;
        $product->name = "Quần jeans nam ống bó";
        $product->desc = "Dáng ôm sát (skinny) Quần dài";
        $product->content = "Dáng ôm sát (skinny) Quần dài";
        $product->price = "400000";
        $product->quantity = 5;
        $product->image = "";
        $product->category_id = 1;
        $product->save();
    }
}
