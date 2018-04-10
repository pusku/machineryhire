<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function(Blueprint $table) {
            $table->increments('id');
            $table->string('item_name');
            $table->string('item_picture')->nullable();
            $table->text('item_description');
            $table->integer('category_id')->index();
            $table->integer('pricing_rate_id')->index();
            $table->integer('hiring_cost');
            $table->integer('hiring_cost_with_expert');
            $table->string('item_location')->nullable();
            $table->integer('available_quantity');
            $table->string('item_contact')->nullable();
            $table->integer('supplier_id')->index();
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
        Schema::drop('listings');
    }
}
