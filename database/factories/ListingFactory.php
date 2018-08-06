<?php

use App\Listing;
use Faker\Generator as Faker;

$factory->define(Listing::class, function (Faker $faker) {

    return [
        'platform' => 'SOUQ',
        'type' => 'MP',
        'ean' => $faker->randomNumber(8),
        'sku' => 'IPA' . " $faker->randomDigit" . strtoupper($faker->word) . $faker->randomDigit,
        'clean_sku' => 'IPA' . " $faker->randomDigit" . strtoupper($faker->word) . $faker->randomDigit,
        'sku_type' => 'Normal',
        'category' => $faker->sentence,
        'brand' => $faker->sentence,
        'title' => $faker->sentence,
        'condition' => 'new',
        'our_inventory_quantity' => $faker->numberBetween(5, 200),
        'msp' => $faker->randomFloat(4, 4, 800),
        'mxsp' => null,
        'our_price' => $faker->randomFloat(2, 800, 20),
        'our_sale_price' => 0.00,
        'new_price' => 0.0000,
        'price_difference' => 0.0000,
        'seller_price' => $faker->randomFloat(4, 8, 600),
        'seller_sale_price' => null,
        'seller' => strtoupper($faker->word),
        'seller_rating' => $faker->numberBetween(0, 100),
        'other_offer' => $faker->numberBetween(1, 10),
        'available_offer' => null,
        'top_seller' => 0,
        'seller_handling_time' => null,
        'available_offers' => $faker->numberBetween(0, 30),
        'top_ean' => $faker->numberBetween(0, 10),
        'our_handling_time' => $faker->numberBetween(1, 20),
        'inventory_status' => 'LIVE',
        'price_updated_at' => $faker->dateTime($max = 'now'),
        'price_checked_at' => $faker->dateTime($max = 'now'),
        'comment' => $faker->sentence,
        'last_checked_by' => null,
        'fb_status' => null,
        'is_active' => 1,
        'action_requested_at' => $faker->dateTime($max = 'now'),
        'action_pending' => 0
    ];
});
