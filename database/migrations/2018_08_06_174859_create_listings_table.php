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
            $table->string('clean_sku')->nullable();
            $table->string('sku_type')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('title')->nullable();
            $table->string('condition')->nullable();
            $table->integer('our_inventory_quantity');


            /**
             *
             * `our_inventory_quantity` int(11) DEFAULT NULL,
             * `msp` double(8,4) NOT NULL DEFAULT 12.0000,
             * `mxsp` double(8,4) DEFAULT NULL,
             * `our_price` double(8,4) DEFAULT NULL,
             * `our_sale_price` double(8,2) DEFAULT 0.00,
             * `new_price` double(8,4) DEFAULT NULL,
             * `price_difference` double(8,4) DEFAULT NULL,
             * `seller_price` double(8,4) DEFAULT NULL,
             * `seller_sale_price` double(8,2) DEFAULT NULL,
             * `seller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
             * `seller_rating` double DEFAULT NULL,
             * `seller_handling_time` int(11) DEFAULT NULL,
             * `other_offer` int(11) DEFAULT NULL,
             * `available_offers` int(11) DEFAULT NULL,
             * `top_ean` tinyint(1) NOT NULL DEFAULT 0,
             * `top_seller` tinyint(1) NOT NULL DEFAULT 0,
             * `our_handling_time` int(11) DEFAULT NULL,
             * `inventory_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
             * `price_updated_at` timestamp NULL DEFAULT NULL,
             * `price_checked_at` timestamp NULL DEFAULT NULL,
             * `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
             * `last_checked_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
             * `fb_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
             * `is_active` tinyint(1) NOT NULL DEFAULT 1,
             * `action_requested_at` datetime DEFAULT NULL,
             * `action_pending` tinyint(4) DEFAULT 0,
             * PRIMARY KEY (`id`),
             * KEY `unique_key` (`platform`,`type`,`ean`)
             */
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
