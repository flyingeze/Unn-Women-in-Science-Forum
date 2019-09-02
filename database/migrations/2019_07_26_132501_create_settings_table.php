<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->default('UNN Women In Science Forum');
            $table->string('url')->nullable();
            $table->string('banner_text')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('banner1')->nullable();
            $table->string('banner2')->nullable();
            $table->string('banner3')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->longText('about')->nullable();
            $table->longText('info')->nullable();
            $table->longText('why_us')->nullable();
            $table->string('by')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
