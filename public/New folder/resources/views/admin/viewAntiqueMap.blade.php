@extends('admin.master')
@section('title', 'View Antique Map')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-gray-800">View Antique Maps</h1>
            </div>
        </div>
        <br>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="{{url('admin/editAntiqueMap')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Title :</label>
                            <input type="text" name="title" class="form-control form-control-user" placeholder="Title" value="{{$am->title}}" readonly="">
                        </div>
                        <div class="col-sm-4">
                            <label>Map Maker :</label>
                            <input type="text" name="map_maker" class="form-control form-control-user" placeholder="Map Maker" value="{{$am->map_maker}}" readonly="">
                        </div>
                        <div class="col-sm-4">
                            <label>Price :</label>
                            <input type="number" name="price" class="form-control form-control-user" placeholder="Price" value="{{$am->price}}" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Size :</label>
                            <input type="text" name="size" class="form-control form-control-user" placeholder="Size" value="{{$am->size}}" readonly="">
                        </div>
                        <div class="col-sm-4">
                            <label>Condition</label>
                            <input type="text" name="condition" class="form-control form-control-user" placeholder="Condition" value="{{$am->condition}}" readonly="">
                        </div>
                        <div class="col-sm-4">
                            <label>Stock# :</label>
                            <input type="text" name="stock" class="form-control form-control-user" placeholder="Stock#" value="{{$am->stock}}" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Color :</label>
                            <input type="text" name="color" class="form-control form-control-user" placeholder="Color" value="{{$am->color}}" readonly="">
                        </div>
                        <div class="col-sm-4">
                            <label>Image Dimensions :</label>
                            <input type="text" name="image_dimensions" class="form-control form-control-user" placeholder="Image Dimensions" value="{{$am->image_dimensions}}" readonly="">
                        </div>
                        <div class="col-sm-4">
                            <label>Reference :</label>
                            <input type="text" name="reference" class="form-control form-control-user" placeholder="Reference" value="{{$am->reference}}" readonly="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Publication Data :</label>
                                    <input type="date" name="publication_date" class="form-control form-control-user" placeholder="Publication Date" value="{{$am->publication_date}}" readonly="">
                                </div>
                                <div class="col-sm-6">
                                    <label>Publication Place :</label>
                                    <input type="text" name="publication_place" class="form-control form-control-user" placeholder="Publication Place" value="{{$am->publication_place}}" readonly="">
                                </div>
                            </div>
                            <div class="form-group"><br>
                                <label>Description :</label>
                                <textarea rows="6" name="description" class="form-control" placeholder="Description" readonly="">{{$am->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Image :</label>
                            <img src="{{$am->image}}" width="100%" height="250px">
                        </div>
                    </div><br>
                    <div style="float:right;">
                        <a class="btn btn-secondary" href="{{url('admin/antiqueMaps')}}">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection