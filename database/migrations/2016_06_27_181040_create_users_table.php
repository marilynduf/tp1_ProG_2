<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 11)->unsigned();
            $table->string('login', 50)->unique();
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->string('autologin', 50);
            $table->integer('id_roles')->unsigned()->default(1); // ici le rôle est a "membre" par défault: seul un administrateur aura le droit de changer le rôle d'un membre.
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id_roles')
                ->references('id')->on('roles')
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
        Schema::drop('users');
    }
}
