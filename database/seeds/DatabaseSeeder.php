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
         $this->call(formationSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(semainesSeeder::class);
    }
}
