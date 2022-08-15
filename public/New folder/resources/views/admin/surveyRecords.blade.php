@extends('admin.master')
@section('title', 'Survey Records')

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
            @if(Session::get('success'))
            <div class="col-md-6">
                <div class="alert bg-success text-center" style=" color: white;">
                    {{Session::get('success')}}
                </div>
            </div>
            @endif 
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-6">
                <h1 class="h3 mb-2 text-gray-800">Survey Records</h1>
            </div>
            <div class="col-6">
                <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#addSurveyModal">Add Survey Record</a>
            </div>
        </div>
        <br>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Survey Records</h6>
            </div> -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($surveyRecords!=null)
                            @foreach($surveyRecords as $sr)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img data-enlargeable style="cursor: zoom-in;" src="{{$sr->image}}" width="40px" height="40px"></td>
                                <td>{{$sr->name}}</td>
                                <td>{{$sr->price}}</td>
                                <td>
                                    <a href="{{url('admin/viewSurveyRecord', $sr->id)}}" style="color:gray"><i class="fas fa-eye"></i></a>
                                    &nbsp&nbsp&nbsp
                                    <a href="" data-obj="{{$sr}}" data-toggle="modal" data-target="#editSurveyModal"><i class="fas fa-edit" data-id="{{$sr}}"></i></a>
                                    &nbsp&nbsp&nbsp
                                    <a href="{{url('admin/deleteSurveyRecord', $sr->id)}}" style="color:red;"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5">No Survey Record Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @if($surveyRecords!=null)
                    <div style="float:right">
                        {{$surveyRecords->links("pagination::bootstrap-4")}}
                    </div>
                    @endif
                </div>
            </div>
        </div>


    </div>

    {{-- Add survey Modal --}}


    <div class="modal fade" id="addSurveyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Survey Record</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="{{url('admin/addSurveyRecord')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="name" class="form-control form-control-user" placeholder="Name" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="number" name="price" class="form-control form-control-user" placeholder="Price" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Description" required=""></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <img src="" width="100%" height="250px" id="showImage" style="display: none;">
                                <input type="file"  name="image" class="form-control" onchange="loadFile(event)">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- Edit survey Modal --}}


    <div class="modal fade" id="editSurveyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Survey Record</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="post" action="{{url('admin/editSurveyRecord')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <input type="hidden" name="id">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="name">Name :</label>
                                <input type="text" name="name" class="form-control form-control-user" id="name"
                                    placeholder="Name" required="">
                            </div>
                            <div class="col-sm-6">
                                <label for="price">Price :</label>
                                <input type="number" name="price" class="form-control form-control-user" id="price"
                                    placeholder="Price" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descriptoin">Descriptoin :</label>
                            <textarea name="description" class="form-control" placeholder="Description" id="description" required=""></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label>Image :</label>
                                <img src="" width="100%" height="250px" id="eshowImage">
                                <input type="file"  name="image" class="form-control" onchange="loadeFile(event)">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>

    

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#editSurveyModal').on('shown.bs.modal', function(e) {
          var sr = $(e.relatedTarget).data('obj');
          var modal = $(this)
          modal.find('.modal-body input[name="id"]').val(sr['id']);
          modal.find('.modal-body input[name="name"]').val(sr['name']);
          modal.find('.modal-body input[name="price"]').val(sr['price']);
          modal.find('.modal-body textarea[name="description"]').val(sr['description']);
          var output = document.getElementById('eshowImage');
          output.src = sr['image'];
        })
    });
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('showImage');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.display="block";
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>
<script>
  var loadeFile = function(event) {
    var output = document.getElementById('eshowImage');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
      $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
      var src = $(this).attr('src');
      var modal;

      function removeModal() {
        modal.remove();
        $('body').off('keyup.modal-close');
      }
      modal = $('<div>').css({
        background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
        backgroundSize: 'contain',
        width: '100%',
        height: '100%',
        position: 'fixed',
        zIndex: '10000',
        top: '0',
        left: '0',
        cursor: 'zoom-out'
      }).click(function() {
        removeModal();
      }).appendTo('body');
      //handling ESC
      $('body').on('keyup.modal-close', function(e) {
        if (e.key === 'Escape') {
          removeModal();
        }
      });
    });
</script>
@endsection
