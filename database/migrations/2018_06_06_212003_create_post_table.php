<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile_artist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',15)->unique;
            $table->string('password',15);
            $table->text('firstname');
            $table->text('lastname');
            $table->text('email');
            $table->timestamps();
            $table->timestamp('publish_at');
            $table->integer('deleted')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_profile_artist');
    }
}
