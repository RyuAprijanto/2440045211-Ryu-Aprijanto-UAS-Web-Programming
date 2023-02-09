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
            $table->string('first_name', 25)->nullable(false);
            $table->string('last_name', 25)->nullable(false);
            $table->string('email', 100)->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->unsignedInteger('gender_id')->foreign('role_id')->references('id')->on('genders')->onDelete('cascade')->nullable(false);
            $table->unsignedInteger('role_id')->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->nullable(false);
            $table->string('display_pict', 100)->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
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
