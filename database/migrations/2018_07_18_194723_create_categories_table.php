<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        \DB::table('categories')->insert([
            ['name' => 'Blog'], ['name' => 'Youtube'], ['name' => 'Culture'],
            ['name' => 'Littérature'], ['name' => 'BD & Comic'], ['name' => 'Film & Série'], 
            ['name' => 'Jeu vidéo'], ['name' => 'Critique'], ['name' => 'Projets'],
            ['name' => 'Autre'], 
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
