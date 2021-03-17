<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_has_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('list_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('role');
            $table->timestamps();

            $table->foreign('list_id')->references('id')->on('lists');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_has_users');
    }
}
