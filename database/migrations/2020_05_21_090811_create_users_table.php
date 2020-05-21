<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('team_id');
            $table->integer('team_role_id');
            $table->integer('role_id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->id();
            $table->timestamps();
            $table->boolean('enabled');
            $table->string('profile_picture');
            $table->string('quote');
            $table->string('emoji');
            $table->string('website_url');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
