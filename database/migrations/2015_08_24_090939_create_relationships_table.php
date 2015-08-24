<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function(Blueprint $table) {
            $table->increments('relationship_id');
            $table->integer('scout_id')->unsigned();
            $table->integer('parent_id')->unsigned();
            $table->enum('type', ['father','mother','other']);

            $table->foreign('scout_id')->references('scout_id')->on('scouts');
            $table->foreign('parent_id')->references('parent_id')->on('parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('relationships');
    }
}
