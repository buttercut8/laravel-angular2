<?php

use Illuminate\Database\Seeder;

class SeedProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Product1 = new App\Product();
        $Product1->name = "Iphone 5S";
        $Product1->description = "Description about Iphone 5S: Iphone 5S is greats and cool";
        $Product1->price = 5600000;
        $Product1->images = "product4.jpg";
        $Product1->category_id = 1;
        $Product1->user_id = 1;
        $Product1->created_at = \Carbon\Carbon::now();
        $Product1->updated_at = \Carbon\Carbon::now();
        $Product1->save();

        $Product2 = new App\Product();
        $Product2->name = "Xperia Z3";
        $Product2->description = "Description about Xperia Z3: Xperia Z3 is greats and cool";
        $Product2->price = 4700000;
        $Product2->images = "product2.jpg";
        $Product2->category_id = 2;
        $Product2->user_id = 1;
        $Product2->created_at = \Carbon\Carbon::now();
        $Product2->updated_at = \Carbon\Carbon::now();
        $Product2->save();

        $Product3 = new App\Product();
        $Product3->name = "Lumia 9";
        $Product3->description = "Description about Lumia 9: Lumia 9 is greats and cool";
        $Product3->price = 3400000;
        $Product3->images = "product3.jpg";
        $Product3->category_id = 3;
        $Product3->user_id = 1;
        $Product3->created_at = \Carbon\Carbon::now();
        $Product3->updated_at = \Carbon\Carbon::now();
        $Product3->save();


        $Product5 = new App\Product();
        $Product5->name = "Iphone 7Plus";
        $Product5->description = "Description about Iphone 7Plus: Iphone 7Plus is greats and cool";
        $Product5->price = 2970000;
        $Product5->images = "product4.jpg";
        $Product5->category_id = 1;
        $Product5->user_id = 2;
        $Product5->created_at = \Carbon\Carbon::now();
        $Product5->updated_at = \Carbon\Carbon::now();
        $Product5->save();


        $Product4 = new App\Product();
        $Product4->name = "Xperia Premium Z5";
        $Product4->description = "Description about Xperia Premium Z5: Xperia Premium Z5 is greats";
        $Product4->price = 5260000;
        $Product4->images = "product1.jpg";
        $Product4->category_id = 2;
        $Product4->user_id = 2;
        $Product4->created_at = \Carbon\Carbon::now();
        $Product4->updated_at = \Carbon\Carbon::now();
        $Product4->save();



        $Product6 = new App\Product();
        $Product6->name = "Xperia Z4 PLus";
        $Product6->description = "Description about Xperia Z4 PLus: Xperia Z4 PLus is greats and cool";
        $Product6->price = 3860000;
        $Product6->images = "product1.jpg";
        $Product6->category_id = 2;
        $Product6->user_id = 1;
        $Product6->created_at = \Carbon\Carbon::now();
        $Product6->updated_at = \Carbon\Carbon::now();
        $Product6->save();
    }
}
