<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('roles_id')->nullable();
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('roles',function(Blueprint $kolom){
            $kolom->increments('id');
            $kolom->string('namaRule');
        });

        Schema::table('users', function(Blueprint $kolom){
            $kolom->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::drop('users');
        Schema::drop('roles');
    }
}
