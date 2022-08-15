@extends('admin.master')
@section('title', 'Edit Antique Map')

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
                <h1 class="h3 mb-2 text-gray-800">Edit Antique Maps</h1>
            </div>
        </div>
        <br>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="{{url('admin/editAntiqueMap')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" class="form-control form-control-user" value="{{$am->id}}" required="">
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Title :</label>
                            <input type="text" name="title" class="form-control form-control-user" placeholder="Title" value="{{$am->title}}" required="">
                        </div>
                        <div class="col-sm-4">
                            <label>Map Maker :</label>
                            <input type="text" name="map_maker" class="form-control form-control-user" placeholder="Map Maker" value="{{$am->map_maker}}" required="">
                        </div>
                        <div class="col-sm-4">
                            <label>Price :</label>
                            <input type="number" name="price" class="form-control form-control-user" placeholder="Price" value="{{$am->price}}" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Size :</label>
                            <input type="text" name="size" class="form-control form-control-user" placeholder="Size" value="{{$am->size}}" required="">
                        </div>
                        <div class="col-sm-4">
                            <label>Condition</label>
                            <input type="text" name="condition" class="form-control form-control-user" placeholder="Condition" value="{{$am->condition}}" required="">
                        </div>
                        <div class="col-sm-4">
                            <label>Stock# :</label>
                            <input type="text" name="stock" class="form-control form-control-user" placeholder="Stock#" value="{{$am->stock}}" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <label>Color :</label>
                            <input type="text" name="color" class="form-control form-control-user" placeholder="Color" value="{{$am->color}}" required="">
                        </div>
                        <div class="col-sm-4">
                            <label>Image Dimensions :</label>
                            <input type="text" name="image_dimensions" class="form-control form-control-user" placeholder="Image Dimensions" value="{{$am->image_dimensions}}" required="">
                        </div>
                        <div class="col-sm-4">
                            <label>Reference :</label>
                            <input type="text" name="reference" class="form-control form-control-user" placeholder="Reference" value="{{$am->reference}}" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Publication Data :</label>
                                    <input type="date" name="publication_date" class="form-control form-control-user" placeholder="Publication Date" value="{{$am->publication_date}}" required="">
                                </div>
                                <div class="col-sm-6">
                                    <label>Publication Place :</label>
                                    <input type="text" name="publication_place" class="form-control form-control-user" placeholder="Publication Place" value="{{$am->publication_place}}" required="">
                                </div>
                            </div>
                            <div class="form-group"><br>
                                <label>Description :</label>
                                <textarea rows="7" name="description" class="form-control" placeholder="Description" required="">{{$am->description}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label>Image :</label>
                            <img src="{{$am->image}}" width="100%" height="250px" id="showImage">
                            <input type="file"  name="image" class="form-control form-control" onchange="loadFile(event)">
                        </div>
                    </div><br>
                    <div style="float:right;">
                        <a class="btn btn-secondary" href="{{url('admin/antiqueMaps')}}">Cancel</a>&nbsp
                        <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('showImage');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>
@endsection