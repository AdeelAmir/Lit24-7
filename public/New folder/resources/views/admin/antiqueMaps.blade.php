@extends('admin.master')
@section('title', 'Antique Maps')

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
                <h1 class="h3 mb-2 text-gray-800">Antique Maps</h1>
            </div>
            <div class="col-6">
                <a href="{{url('admin/addAntiqueMapIndex')}}" class="btn btn-primary float-right">Add Antique Map</a>
            </div>
        </div>
        <br>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Map Maker</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($antiqueMaps!=null)
                            @foreach($antiqueMaps as $am)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img data-enlargeable style="cursor: zoom-in;" src="{{$am->image}}" width="40px" height="40px"></td>
                                <td>{{$am->title}}</td>
                                <td>{{$am->map_maker}}</td>
                                <td>{{$am->price}}</td>
                                <td>
                                    <a href="{{url('admin/viewAntiqueMap', $am->id)}}" style="color:gray"><i class="fas fa-eye"></i></a>
                                    &nbsp&nbsp&nbsp
                                    <a href="{{url('admin/editAntiqueMapIndex', $am->id)}}"><i class="fas fa-edit"></i></a>
                                    &nbsp&nbsp&nbsp
                                    <a href="{{url('admin/deleteAntiqueMap', $am->id)}}" style="color:red;"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6">No Antique Map Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    @if($antiqueMaps!=null)
                    <div style="float:right">
                        {{$antiqueMaps->links("pagination::bootstrap-4")}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

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