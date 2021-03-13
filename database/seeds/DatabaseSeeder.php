<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  $this->call(MemberSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(SharksTableSeeder::class)
         
    }
}
