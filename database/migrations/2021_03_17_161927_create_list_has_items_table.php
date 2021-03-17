<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListHasItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_has_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('list_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();

            $table->foreign('list_id')->references('id')->on('lists');
            $table->foreign('item_id')->references('id')->on('list_items');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_has_items');
    }
}
