@extends('admin.master')
@section('title', 'View Survey Records')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-gray-800">View Survey Record</h1>
            </div>
            <div class="col-6"></div>
        </div>
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">Name :</label>
                                <input type="text" value="{{$sr->name}}" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Price :</label>
                                <input type="text" value="{{$sr->price}}" class="form-control" readonly>
                            </div>
                        </div><br>
                        <label for="name">Description :</label>
                        <textarea rows="7" class="form-control" readonly>{{$sr->description}}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label for="name">Image :</label>
                        <img src="{{$sr->image}}" width="100%" height="300px">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class="btn btn-secondary" href="{{url('admin/surveyRecords')}}" style="float:right" type="button" data-dismiss="modal">Back</a>
            </div>
        </div>
    </div>
@endsection