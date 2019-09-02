<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->bigIncrements('topic_id');
            $table->string('topic_title')->unique();
            $table->string('topic_slug')->unique();
            $table->longText('topic_description');
            $table->string('topic_by');
            $table->string('topic_category');
            $table->longText('topic_rule');
            $table->string('topic_picture')->default('topic-default.jpg');
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
        Schema::dropIfExists('topics');
    }
}
