<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->increments('id');
            $table->string('pseudo')->unique();
            $table->string('email')->unique();
            $table->text('bio')->nullable();
            $table->string('avatar')->default("./base.jpg");
            $table->boolean('avatar_generated')->default(true);
            $table->boolean('private')->default(true);
            $table->string('password');
            $table->enum('status', ['admin', 'writer', 'moderator', 'member'])->default("member");
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'pseudo' => 'admin',
            'email' => 'selandron@blog.com',
            'password' => bcrypt('azerty')
        ]);
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
