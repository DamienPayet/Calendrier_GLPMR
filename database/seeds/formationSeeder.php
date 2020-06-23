<?php

use Illuminate\Database\Seeder;

class formationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('formation')->insert([
        'nom'=> 'ASI1',
        'idform'=> 'D0000000042S',
      ]);
      DB::table('formation')->insert([
        'nom'=> 'ASI2',
        'idform'=> 'D0000000043S',
      ]);
      DB::table('formation')->insert([
        'nom'=> 'CG1',
        'idform'=> 'D0000000044S',
      ]);
      DB::table('formation')->insert([
        'nom'=> 'CG2',
        'idform'=> 'D0000000045S',
      ]);
      DB::table('formation')->insert([
        'nom'=> 'CI1',
        'idform'=> 'D0000000046S',
      ]);
      DB::table('formation')->insert([
        'nom'=> 'CI2',
        'idform'=> 'D0000000047S',
      ]);
    }
}
