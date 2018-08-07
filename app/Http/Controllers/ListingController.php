<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Listing;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::paginate(10);
        return view('admin/index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listing.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListingRequest $request)
    {
        $path = $request->file('csv_file')->getRealPath();

        $rows = array_map('str_getcsv', file($path));

        $listings = ['id', 'platform', 'type', 'ean', 'sku', 'clean_sku', 'sku_type',
            'category', 'brand', 'title', 'condition', 'our_inventory_quantity', 'msp', 'mxsp',
            'our_price', 'our_sale_price', 'new_price', 'price_difference', 'seller_price', 'seller_sale_price',
            'seller', 'seller_rating', 'seller_handling_time', 'other_offer', 'available_offers', 'top_ean', 'top_seller',
            'our_handling_time', 'inventory_status', 'price_updated_at',
            'price_checked_at', 'comment', 'last_checked_by', 'fb_status', 'is_active', 'created_at', 'updated_at',
            'action_requested_at', 'action_pending'
        ];

        $listings_array = [];
        foreach ($rows as $row) {

            foreach ($row as $key => $column) {

//                //platform value will always be SOUQ
                if ($listings[$key] === 'platform') {

                    $listings_array[$listings[$key]] = 'SOUQ';

                    //if user has checked the fb checkbox
                } elseif ($request->has('fb') && $listings[$key] == 'type') {

                    $listings_array[$listings[$key]] = 'FB';

                } else {

                    $listings_array[$listings[$key]] = str_replace('\'', '', $column);
                }
            }

//            create the listing row in database
            Listing::create($listings_array);

        }


        return redirect(route('listings.index'))->withMessage('CSV file has been imported!');
    }
}
