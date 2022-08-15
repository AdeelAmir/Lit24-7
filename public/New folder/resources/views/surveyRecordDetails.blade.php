@extends('web')


@section('title')
<title>Survey Record Details</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("/maps/m1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .mapBox{
        padding: 10px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .detailsBox{
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }

    .head{
        background-color: #393939;
        color: white;
        padding: 10px;
    }

    .btns{
        background-color: #FCCE36;
        color: white;
        width: 100%;
        padding: 10px;
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
        <strong>Survey Records</strong>
    </div>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="row">
        <div class="col-md-7 mb-4">
            <div class="mapBox rounded">
                <img src="{{$surveyRecord->image}}" width="100%" height="350px" class="rounded">
            </div>
        </div>
        <div class="col-md-5 mb-4">
            <div class="detailsBox">
                <div class="row head">
                    <div class="col-md-12">
                        Survey Record
                    </div>
                </div>
                <p>{{$surveyRecord->name}}</p>
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="head">Price</div>
                        <div style="padding: 0px 10px;">${{$surveyRecord->price}}</div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="head">ID #</div>
                        <div style="padding: 0px 10px;">{{$surveyRecord->id}}</div>
                    </div>
                </div>
            </div><br>
            <nav>
                @if($user)
                @if($activeSurveyOrder)
                <button class="btn btns">Already Active Order</button>
                @else
                <button class="btn btns" id="addCart"><i class="fas fa-shopping-cart"></i>&nbsp <?php if($cart==1){echo('Added');}else{echo "Add To Cart";}?></button>
                @endif
                @endif
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="mt-4 mapBox rounded">
                <div class="head">
                    Description
                </div>
                <div style="padding:10px">
                    {{$surveyRecord->description}}
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var cart={{$cart}};
    var chk=0;
    $('#addCart').click(function(){
        if(cart=='0')
        {
            $.ajax({
                type: "POST",
                url: "{{url('addCart')}}",
                data: {
                    _token:'{{csrf_token()}}',
                    id:'{{$surveyRecord->id}}',
                },
                success: function(data){
                    $('#addCart').html('<i class="fas fa-cart-plus"></i> &nbsp Added');
                    if(chk==0)
                    {
                        $('#cartCount').html('<i class="fas fa-shopping-cart"></i>@if($cartCount+1>0) <sup> {{$cartCount+1}}</sup> @endif');
                        chk=1;
                    }
                    else
                    {
                        $('#cartCount').html('<i class="fas fa-shopping-cart"></i>@if($cartCount>0) <sup> {{$cartCount}}</sup> @endif');
                        chk=0;
                    }
                }
            })
            cart=1;
        }
        else
        {
            $.ajax({
                type: "POST",
                url: "{{url('removeCart')}}",
                data: {
                    _token:'{{csrf_token()}}',
                    id:'{{$surveyRecord->id}}',
                },
                success: function(data){
                    $('#addCart').html('<i class="fas fa-cart-plus"></i> &nbsp Add To Cart');
                    if(chk==0)
                    {
                        $('#cartCount').html('<i class="fas fa-shopping-cart"></i>@if($cartCount-1>0) <sup> {{$cartCount-1}}</sup> @endif');
                        chk=1;
                    }
                    else
                    {
                        $('#cartCount').html('<i class="fas fa-shopping-cart"></i>@if($cartCount>0) <sup> {{$cartCount}}</sup> @endif');
                        chk=0;
                    }
                }
            })
            cart=0;
        }
    })
</script>
@endsection