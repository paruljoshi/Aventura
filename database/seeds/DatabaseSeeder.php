<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(SearchTableSeeder::class);
        $this->call(ReportTableSeeder::class); 
        $this->call(ReviewTableSeeder::class); 
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'building' =>$faker->buildingNumber,
                'street'=> $faker->streetAddress,
                'city' => $faker->city,
                'state' =>$faker->state,
                'country'=>$faker->country,
                'date_of_birth'=>$faker->date($format = 'm-d-Y', $max = 'now'),
                'phoneno'=>$faker->phonenumber,
                'zipcode'=>$faker->postcode,
                'image'=>$faker->imageUrl($width = 640, $height = 480),
                'quote'=>$faker->text,
                'status'=>$faker->boolean,
            ]);
        }
    }
}


class EventTableSeeder extends Seeder
{
    
    public function run()
    {
         $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('events')->insert([
                'name' => $faker->company,
                'desc' =>$faker->catchPhrase,
                'address'=> $faker->streetAddress,
                'city' => $faker->city,
                'state' =>$faker->state,
                'country'=>$faker->country,
                'zipcode'=>rand(111111,999999),
                'ticket' => rand(0,5000),
                'ratings' => rand(1,5),
                'reviewed' =>rand(0,1),
                'addedByUser' => rand(0,1),
                'user_id' => rand(0,10),
            ]);
        }
    }
}

class SearchTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('searches')->insert([
                'event' => $faker->company,
                'city' => $faker->city,
                'state' =>$faker->state,
                'country'=>$faker->country,
            ]);
        }
    }
}

class ReportTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('reports')->insert([
                'description' => $faker->text,
                'reason' => $faker->text,
                'status' =>rand(0,1),
                'user_id' => rand(1,10),
                'event_id'=>rand(0,10),
            ]);
        }
    }
}

class PurchaseTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('purchases')->insert([
                'cvv' => rand(100,999),
                'creditcardnumber' => $faker->creditCardNumber,
                'cardname' =>rand(0,1),
                'price' =>rand(0,1000),
                'expirydate'=> $faker->date($format = 'Y-m-d'),
                'address'=>$faker->address,
            ]);
        }
    }
}

class ReviewTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('reviews')->insert([
                'desc' => $faker->company,
                'ratings' => rand(0,5),
                'user_id' => rand(1,10),
                'event_id'=>rand(0,10),
                'user_name'=>$faker->name
            ]);
        }
    }
}