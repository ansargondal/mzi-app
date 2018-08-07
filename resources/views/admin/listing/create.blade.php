@extends('admin.master')

@section('content')
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-8 mx-auto ">
                <form action="{{route('listings.store')}}" class="form-upload" method="post"
                      enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">Upload CSV</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="csv">Select CSV</label>
                            <input type="file" class="form-control {{$errors->has('csv_file')? 'is-invalid' : ''}}"
                                   name="csv_file">
                            @if($errors->has('csv_file'))
                                <span class="invalid-feedback">
                                    {{$errors->first('csv_file')}}
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="csv">Upload Type</label>
                            <select name="upload_type" class="form-control">
                                <option value="psm">Add To PSM</option>
                                <option value="ean">Top EAN</option>
                                <option value="ts">Top Seller</option>
                                <option value="delete-from-psm">Delete From PSM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="fb" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">FB</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">UPLOAD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
