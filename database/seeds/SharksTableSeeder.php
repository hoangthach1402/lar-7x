<?php

use App\shark ;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SharksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker\Factory::create();
        for($i=0;$i<50;$i++) {
            shark::create([        // lưu ý User là tên tương ứng với Model muốn seed .ở đây là bảng Users trong database
                'id' => $faker->unique()->ean8,
                'name' => $faker->username,
                        
                'email' => $faker->unique()->safeEmail,
               
            ]);
    }
}
}