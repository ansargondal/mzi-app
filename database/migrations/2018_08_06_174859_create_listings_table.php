<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plateform')->default('SOUQ');
            $table->string('type');
            $table->string('ean');
            $table->string('sku');
            $table->string('clean_sku')->nullable();
            $table->string('sku_type')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('title')->nullable();
            $table->string('condition')->nullable();
            $table->integer('our_inventory_quantity')->nullable();
            $table->double('msp', 8, 4)->default(12.0000);
            $table->double('mxsp', 8, 4)->nullable();
            $table->double('our_price', 8, 2)->nullable();
            $table->double('our_sale_price', 8, 2)->default(0, 00);
            $table->double('new_price', 8, 4)->nullable();
            $table->double('price_difference', 8, 4)->nullable();
            $table->double('seller_price', 8, 4)->nullable();
            $table->double('seller_sale_price', 8, 2)->nullable();
            $table->string('seller')->nullable();
            $table->double('seller_rating')->nullable();
            $table->integer('other_offer')->nullable();
            $table->integer('available_offer')->nullable();
            $table->tinyInteger('top_seller')->default(0);
            $table->integer('seller_handling_time')->nullable();
            $table->integer('available_offers')->nullable();
            $table->tinyInteger('top_ean')->default(0);
            $table->integer('our_handling_time')->nullable();
            $table->string('inventory_status')->nullable();
            $table->timestamp('price_updated_at')->nullable();
            $table->timestamp('price_checked_at')->nullable();
            $table->string('comment')->nullable();
            $table->string('last_checked_by')->nullable();
            $table->string('fb_status')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->dateTime('action_requested_at')->nullable();
            $table->addColumn('tinyInteger', 'action_pending', ['length' => 4, 'default' => '0']);


            $table->unique(['plateform', 'type', 'ean']);
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
        Schema::dropIfExists('listings');
    }
}
