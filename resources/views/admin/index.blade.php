@extends('admin/master')

@section('content')

    {{--Navigation Included --}}
    @include('admin/partials/navigation')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="#upload-csv-modal" data-toggle="modal" class="btn btn-primary mb-3">Upload CSV</a>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Platform</th>
                        <th>Type</th>
                        <th>EAN</th>
                        <th>SKU</th>
                        <th>Brand</th>
                        <th>Title</th>
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
                            <td>{{$list->brand}}</td>
                            <td>{{$list->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{$listings->links()}}
            </div>
        </div>
    </div>

    @include('admin/partials/models/new-csv-modal')
@endsection
