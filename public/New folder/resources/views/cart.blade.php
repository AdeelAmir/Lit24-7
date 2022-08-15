@extends('web')


@section('title')
<title>Cart</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("cart/c1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .mapBox{
        padding: 20px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .cartBox{
        background-color: #EEEEEE;
        padding: 20px;
    }

    .btns{
        background-color: #FCCE36;
        color: white;
        width: 100%;
    }

    .rating{
        color: #FCCE36;
    }

    .link{
        text-decoration: none;
        color: black;
    }

    .link:hover{
        color: #FCCE36;
    }
</style>
@endsection

@section('content')
<div class="img-container">
    <div style="color: white; font-size:30px;">
        <strong>Home > Cart</strong>
    </div>
</div>

<div class="row m-5">
    <div class="col-md-3"></div>
    @if(Session::get('fail'))
    <div class="col-md-6">
        <div class="alert" style="background-color: red; color: white; text-align: center;">
            {{Session::get('fail')}}
        </div>
    </div>
    @endif
    @if(Session::get('success'))
    <div class="col-md-6">
        <div class="alert" style="background-color: #FCCE36; color: white; text-align: center;">
        {{Session::get('success')}}
        </div>
    </div>
    @endif
    <div class="col-md-3"></div>
</div>

<div class="row mt-5 mb-5" style="margin:0% 10%;">
    @if($surveyRecords)
    <div class="col-md-12">
        @foreach($surveyRecords as $sr)
        <div class="mapBox mb-4 rounded">
            <div class="row" style="float:right;">
                <sup><a style="float:right; opacity: .6; color:red; font-size: 20px;" data-bs-toggle="tooltip" data-bs-html="true" title="Remove From Cart" href="{{url('cartRemove', $sr->id)}}"><i class="fas fa-times"></i></a></sup>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{url('surveyRecordDetails', $sr->id)}}"><img src="{{asset('/maps/m3.jpg')}}" width="100%"></a>
                </div>
                <div class="col-md-6">
                    <b><a href="{{url('surveyRecordDetails', $sr->id)}}" class="link">{{$sr->name}}</a></b><br>
                    <div class="row">
                        <div class="col-md-12">
                            <b>Description: </b> {{$sr->description}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <center>
                        <br>
                            <div class="btn btns" id="addCart">${{$sr->price}}</div>
                            <br><br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btns" data-id="{{$sr->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Pay
                            </button>
                    </center>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Property Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{url('purchase')}}" method="post">
                  @csrf
                  <div class="modal-body">
                    <input type="hidden" name="id">
                    <input type="text" id="address-input" name="address" class="input map-input form-control" placeholder="Address" required=""><br>
                    <input type="hidden" name="latitude" id="address-latitude" value="0" />
                    <input type="hidden"  name="longitude" id="address-longitude" value="0" />
                    <input type="text"  name="block" placeholder="Block" class="input form-control" required=""><br>
                    <input type="text" name="lot" placeholder="Lot" class="input form-control" required=""><br>
                    <input type="text" name="section" placeholder="Section" class="input form-control">
                  </div>
                  <div class="modal-footer">
                    <input type="submit" name="submit" class="btn btns" value="Save changes">
                  </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="col-md-12">
        <div class="mapBox mb-4 rounded">
            Cart is Empty
        </div>
    </div>
    @endif
</div>
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') // Extract info from data-* attributes
      var modal = $(this)
      modal.find('.modal-body input[name="id"]').val(id);
    })
</script>
@endsection