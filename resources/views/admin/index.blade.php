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
                        <th>Plateform</th>
                        <th>Type</th>
                        <th>EAN</th>
                        <th>SKU</th>
                        <th>Brand</th>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>Random plateform</td>
                        <td>Random Type</td>
                        <td>My EAN</td>
                        <td>My SKU</td>
                        <td>Demo Brand</td>
                        <td>Some Title</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Random plateform</td>
                        <td>Random Type</td>
                        <td>My EAN</td>
                        <td>My SKU</td>
                        <td>Demo Brand</td>
                        <td>Some Title</td>
                    </tr><tr>
                        <td>01</td>
                        <td>Random plateform</td>
                        <td>Random Type</td>
                        <td>My EAN</td>
                        <td>My SKU</td>
                        <td>Demo Brand</td>
                        <td>Some Title</td>
                    </tr><tr>
                        <td>01</td>
                        <td>Random plateform</td>
                        <td>Random Type</td>
                        <td>My EAN</td>
                        <td>My SKU</td>
                        <td>Demo Brand</td>
                        <td>Some Title</td>
                    </tr><tr>
                        <td>01</td>
                        <td>Random plateform</td>
                        <td>Random Type</td>
                        <td>My EAN</td>
                        <td>My SKU</td>
                        <td>Demo Brand</td>
                        <td>Some Title</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Random plateform</td>
                        <td>Random Type</td>
                        <td>My EAN</td>
                        <td>My SKU</td>
                        <td>Demo Brand</td>
                        <td>Some Title</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin/partials/models/new-csv-modal')
@endsection
