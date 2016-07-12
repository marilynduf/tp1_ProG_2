<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCritiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critiques', function (Blueprint $table) {
            $table->increments('id', 11)->unsigned();;
            $table->decimal('vote', 2, 1);
            $table->string('commentaire', 255);
            $table->integer('id_utilisateur')->unsigned();
            $table->integer('id_film')->unsigned();
            $table->timestamps();
        });

        Schema::table('critiques', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('users');
            $table->foreign('id_film')->references('id')->on('films');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('critiques');
    }
}
