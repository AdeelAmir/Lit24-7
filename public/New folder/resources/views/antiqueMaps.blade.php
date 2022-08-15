@extends('web')


@section('title')
<title>Antique Maps</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("maps/m1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .sortBox{
        padding: 5px 0px 5px 20px;
        vertical-align: middle;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }
    .sortbtn{
        border: 1px solid #aaa;
        margin: 5px;
    }
    .sortbtnactive{
        color: white;
        background-color: #FCCE36;
        border: none;
    }

    .mapBox{
        padding: 20px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .btns{
        background-color: #FCCE36;
        color: white;
        width: 80%;
    }

    .detailBtn{
        background-color:#E2E7EB; 
        color:black;
        width: 80%;
    }

    .detailBtn:hover{
        background-color: black;
        opacity: .8;
        color: white;
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
        <strong>Antique Maps</strong>
    </div>
</div>
<div class="row mt-5 mb-5" style="margin:0% 20%;">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit" style="background-color:#333333; color:white;">Search</button>
    </form>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="sortBox rounded"><b>Sort By: </b>
            <a href="#" class="btn sortbtn sortbtnactive">Issue Date</a>
            <a href="#" class="btn sortbtn">Title</a>
            <a href="#" class="btn sortbtn">Map Maker</a>
            <a href="#" class="btn sortbtn">Newest Added</a>
            <a href="#" class="btn sortbtn">Price (US)</a>
    </div>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="mapBox rounded">
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('mapDetails')}}"><img src="{{asset('/maps/m3.jpg')}}" width="100%"></a>
            </div>
            <div class="col-md-6">
                <a href="{{url('mapDetails')}}" class="link"><b>Nova Totius Livoniae accurata Descriptio</b></a>
                <div class="mt-2 mb-2">Jan Jansson</div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <b>Place/Date:</b> Amsterdam / 1640 circa
                    </div>
                    <div class="col-md-12">
                        <b>Size:</b> 20.5 x 15.5 inches
                    </div>
                    <div class="col-md-12">
                        <b>Condition:</b> VG+
                    </div>
                    <div class="col-md-12">
                        <b>Stock#:</b> 78888
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <center>
                    <b>$750.00</b>
                    <nav><br>
                        <a href="#" class="btn btns"><i class="fas fa-shopping-cart"></i>&nbsp Add to Cart
                        </a><br><br>
                        <a href="{{url('mapDetails')}}" class="btn detailBtn"><i class="fas fa-info-circle"></i>&nbsp View Details
                        </a>
                    </nav>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection