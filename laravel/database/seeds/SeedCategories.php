<?php

use Illuminate\Database\Seeder;
class SeedCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $category1 = new App\Category();
       $category1->name = "apple";
       $category1->description = "This is all product of Apple and orthers use MAC OS";
       $category1->save();

       $category2 = new App\Category();
       $category2->name = "android";
       $category2->description = "This is all product of google and orthers use Android";
       $category2->save();

       $category3 = new App\Category();
       $category3->name = "windowphone";
       $category3->description = "This is all product of Microsoft and orthers use Window Phone";
       $category3->save();
    }
}
