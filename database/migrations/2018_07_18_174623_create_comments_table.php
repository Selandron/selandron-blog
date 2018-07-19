<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->boolean('moderated')->default(false);

            $table->timestamps();

            $table->integer('article_id');
            $table->integer('user_id');
            $table->integer('child_id')->nullable();
            $table->integer('parent_id')->nullable();

            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('child_id')->references('id')->on('comments');
            $table->foreign('parent_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
