<?php

use Illuminate\Database\Seeder;
class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user1 = new App\User();
       $user1->name = "Mark Remy";
       $user1->email = "remy@gmail.com";
       $user1->phone = "0976830624";
       $user1->password =bcrypt('2007');
       $user1->remember_token = str_random(100);
       $user1->created_at = \Carbon\Carbon::now();
       $user1->updated_at = \Carbon\Carbon::now();
       $user1->save();

       $user2 = new App\User();
       $user2->name = "Remy Nguyen";
       $user2->email = "remy96@gmail.com";
       $user2->phone = "0976830623";
       $user2->password = bcrypt('2007');
       $user2->remember_token = str_random(100);
       $user2->created_at = \Carbon\Carbon::now();
       $user2->updated_at = \Carbon\Carbon::now();
       $user2->save();
    }
}
