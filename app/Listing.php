<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['platform', 'type', 'ean', 'sku', 'clean_sku', 'sku_type',
        'category', 'brand', 'title', 'condition', 'our_inventory_quantity', 'msp', 'mxsp',
        'our_price', 'our_sale_price', 'new_price', 'price_difference', 'seller_price', 'seller_sale_price',
        'seller', 'seller_rating',  'seller_handling_time','other_offer', 'available_offers', 'top_ean', 'top_seller',
         'our_handling_time','inventory_status',  'price_updated_at',
        'price_checked_at', 'comment', 'last_checked_by', 'fb_status', 'is_active', 'action_requested_at',
        'action_pending'
    ];
}
