@extends('admin.master')
@section('title', 'Add Antique Map')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            @if(Session::get('fail'))
            <div class="col-md-6">
                <div class="alert bg-danger text-center" style="color: white;">
                    {{Session::get('fail')}}
                </div>
            </div>
            @endif
            @if ($errors->any())
            <div class="col-md-6">
                <div class="alert bg-danger text-center" style="color: white;">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-gray-800">Add Antique Maps</h1>
            </div>
        </div>
        <br>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="{{url('admin/addAntiqueMap')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="title" class="form-control form-control-user" placeholder="Title" required="">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="map_maker" class="form-control form-control-user" placeholder="Map Maker" required="">
                        </div>
                        <div class="col-sm-4">
                            <input type="number" name="price" class="form-control form-control-user" placeholder="Price" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="size" class="form-control form-control-user" placeholder="Size" required="">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="condition" class="form-control form-control-user" placeholder="Condition" required="">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="stock" class="form-control form-control-user" placeholder="Stock#" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="color" class="form-control form-control-user" placeholder="Color" required="">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="image_dimensions" class="form-control form-control-user" placeholder="Image Dimensions" required="">
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="reference" class="form-control form-control-user" placeholder="Reference" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="date" name="publication_date" class="form-control form-control-user" placeholder="Publication Date" required="">
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <input type="text" name="publication_place" class="form-control form-control-user" placeholder="Publication Place" required="">
                        </div>
                        <div class="col-sm-4">
                            <input type="file"  name="image" class="form-control form-control" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" rows="4" placeholder="Description" required=""></textarea>
                    </div>
                    <div style="float:right;">
                        <a class="btn btn-secondary" href="{{url('admin/antiqueMaps')}}">Cancel</a>&nbsp
                        <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection