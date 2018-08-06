<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['platform', 'type', 'ean', 'sku', 'clean_sku', 'sku_type',

        'category', 'brand', 'title', 'condition', 'our_inventory', 'quantity', 'msp', 'mxsp',
        'our_price', 'our_sale_price', 'new_price', 'price_difference', 'seller_price', 'seller_sale_price',
        'seller', 'seller_rating', 'other_offer', 'available_offer', 'top_seller', 'seller_handling_time',
        'available_offers', 'top_ean', 'our_handling_time', 'inventory_status', 'price_updated_at',
        'price_checked_at', 'comment', 'last_checked_by', 'fb_status', 'is_active', 'action_requested_at',
        'action_pending'
    ];
}
