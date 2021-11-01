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
            $table->id();
            $table->string('uname');
            $table->string('adr')->nullable();
            $table->string('email')->unique();
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('phno')->nullable();           
            $table->string('exp')->nullable();
            $table->string('resume')->nullable();
            // $table->string('path');
            $table->boolean('flag')->default(0);
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('is_admin')->default(0);
            // $table->rememberToken();
            // $table->timestamps();
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
