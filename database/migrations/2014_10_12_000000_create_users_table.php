<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('reg_no')->unique();
            $table->string('department')->nullable();
            $table->string('age')->nullable();
            $table->string('biography')->nullable();
            $table->string('phone_number')->unique();
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_pic')->default('user.png');
            $table->string('email')->unique();
            $table->string('type')->nullable();
            $table->string('role')->default('member');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
