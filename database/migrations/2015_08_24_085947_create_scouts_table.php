<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scouts', function(Blueprint $table) {
            $table->increments('scout_id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->date('birthday');
            $table->integer('address_id')->unsigned();
            $table->string('email', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('totem', 50);
            $table->string('quali', 50);
            $table->integer('scout_year');
            $table->boolean('did_promise');
            $table->integer('patrol_id')->unsigned()->nullable();
            $table->boolean('is_valid')->default(true);
            $table->timestamps();

            $table->foreign('address_id')->references('address_id')->on('addresses');
            $table->foreign('patrol_id')->references('patrol_id')->on('patrols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scouts');
    }
}
