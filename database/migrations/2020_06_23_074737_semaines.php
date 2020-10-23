<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Semaines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('semaines', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nom', 250);
          $table->string('num', 250);
          $table->string('numsem', 250);
          $table->string('debut', 250);
          $table->string('fin', 250);
          $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
