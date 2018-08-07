@extends('admin/master')

@section('content')
    <div class="container pt-5">
        @if(isset($message))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Success!</h4>
                <p>{{$message}}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">


                @if(isset($listings) && count($listings))
                    <a href="{{route('listings.create')}}" class="btn btn-primary mb-3">Upload CSV</a>
                    <table class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Platform</th>
                            <th>Type</th>
                            <th>EAN</th>
                            <th>SKU</th>
                            <th>CLEAN SKU</th>
                            <th>SKU TYPE</th>
                            <th>CATEGORY</th>
                            <th>BRAND</th>
                            <th>TITLE</th>
                            <th>CONDITION</th>
                            <th>OUR INVENTORY QUANTITY</th>
                            <th>MSP</th>
                            <th>MXSP</th>
                            <th>OUR PRICE</th>
                            <th>OUR SALE PRICE</th>
                            <th>NEW PRICE</th>
                            <th>PRICE DIFFERENCE</th>
                            <th>SELLER PRICE</th>
                            <th>SELLER SALE PRICE</th>
                            <th>SELLER</th>
                            <th>SELLER RATING</th>
                            <th>OTHER OFFER</th>
                            <th>AVAILABLE OFFER</th>
                            <th>TOP SELLER</th>
                            <th>SELLER HANDLING TIME</th>
                            <th>AVAILABLE OFFERS</th>
                            <th>TOP EAN</th>
                            <th>OUR HANDLING TIME</th>
                            <th>INVENTORY STATUS</th>
                            <th>PRICE UPDATED AT</th>
                            <th>PRICE CHECKED AT</th>
                            <th>COMMENT</th>
                            <th>LAST CHECKED BY</th>
                            <th>FB STATUS</th>
                            <th>IS ACTIVE</th>
                            <th>ACTION REQUESTED AT</th>
                            <th>ACTION PENDING</th>
                            <th>CREATED AT</th>
                            <th>UPDATED AT</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listings as $list)
                            <tr>
                                <td>{{$list->id}}</td>
                                <td>{{$list->platform}}</td>
                                <td>{{$list->type}}</td>
                                <td>{{$list->ean}}</td>
                                <td>{{$list->sku}}</td>
                                <td>{{$list->clean_sku}}</td>
                                <td>{{$list->sku_type}}</td>
                                <td>{{$list->category}}</td>
                                <td>{{$list->brand}}</td>
                                <td>{{$list->title}}</td>
                                <td>{{$list->condition}}</td>
                                <td>{{$list->our_inventory_quantity}}</td>
                                <td>{{$list->msp}}</td>
                                <td>{{$list->mxsp}}</td>
                                <td>{{$list->our_price}}</td>
                                <td>{{$list->our_sale_price}}</td>
                                <td>{{$list->new_price}}</td>
                                <td>{{$list->price_difference}}</td>
                                <td>{{$list->seller_price}}</td>
                                <td>{{$list->seller_sale_price}}</td>
                                <td>{{$list->seller}}</td>
                                <td>{{$list->seller_rating}}</td>
                                <td>{{$list->other_offer}}</td>
                                <td>{{$list->top_seller}}</td>
                                <td>{{$list->seller_handling_time}}</td>
                                <td>{{$list->available_offers}}</td>
                                <td>{{$list->available_offers}}</td>
                                <td>{{$list->top_ean}}</td>
                                <td>{{$list->our_handling_time}}</td>
                                <td>{{$list->inventory_status}}</td>
                                <td>{{$list->price_updated_at}}</td>
                                <td>{{$list->price_checked_at}}</td>
                                <td>{{$list->comment}}</td>
                                <td>{{$list->last_checked_by}}</td>
                                <td>{{$list->fb_status}}</td>
                                <td>{{$list->is_active}}</td>
                                <td>{{$list->action_requested_at}}</td>
                                <td>{{$list->action_pending}}</td>
                                <td>{{$list->created_at}}</td>
                                <td>{{$list->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$listings->links()}}
                @else       <p class="text-center"> You don't have any listings, Start by
                    <a href="{{route('listings.create')}}">Importing new one.</a></p>
                @endif
            </div>
        </div>
    </div>

    @include('admin/partials/models/new-csv-modal')
@endsection
