@extends('admin.master')
@section('title', 'Sales')

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
                <h1 class="h3 mb-2 text-gray-800">Sales</h1>
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
                                <th>#Transaction Id</th>
                                <th>Ticket Id</th>
                                <th>Ticket Owner Id</th>
                                <th>Purchaser Id</th>
                                <th>Ticket Price</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sales as $s)
                            <tr>
                                <td>{{$s->transaction_id}}</td>
                                <td>{{$s->ticket_id}}</td>
                                <td>{{$s->ticket_owner_id}}</td>
                                <td>{{$s->purchaser_id}}</td>
                                <td>${{$s->ticket_price}}</td>
                                <td>{{$s->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
          $('#dataTable').DataTable();
      })
</script>
@endsection
