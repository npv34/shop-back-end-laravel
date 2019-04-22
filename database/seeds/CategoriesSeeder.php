<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id = 1;
        $category->name = "Quần";
        $category->slug = "quan";
        $category->desc = "";
        $category->image = "";
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->name = "Áo";
        $category->slug = "ao";
        $category->desc = "";
        $category->image = "";
        $category->save();

    }
}
