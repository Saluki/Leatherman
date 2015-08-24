<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function(Blueprint $table) {
            $table->increments('parent_id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->integer('address_id')->unsigned();
            $table->string('email', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->timestamps();

            $table->foreign('address_id')->references('address_id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parents');
    }
}
