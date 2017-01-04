<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('uploader');
            $table->string('mime');
            $table->integer('label_id')->unsigned();
            $table->timestamps();

            $table->foreign('label_id')
                    ->references('id')
                    ->on('labels')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::drop('templates');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); 
    }
}
