<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id', 11)->unsigned();
            $table->string('titre', 50);
            $table->string('annee', 4);
            $table->string('image');
            $table->string('duree', 3);
            $table->string('synopsis', 1000);
            $table->string('acteurs', 255);
            $table->integer('id_classement')->unsigned();
            $table->timestamps();
        });

        Schema::table('films', function (Blueprint $table) {
            $table->foreign('id_classement')->references('id')->on('classements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('films');
    }
}
