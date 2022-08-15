@extends('web')


@section('title')
<title>Map Details</title>
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
        <strong>Antique Maps</strong>
    </div>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="row">
        <div class="col-md-7 mb-4">
            <div class="mapBox rounded">
                <img src="{{asset('/maps/m3.jpg')}}" width="100%" height="450px" class="rounded">
                <div class="mt-2">
                    <span>Stock # 72812</span>
                    <span style="float:right;"><a href="{{('downloadMap')}}" class="link">Download Image</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-5 mb-4">
            <div class="detailsBox">
                <div class="row head">
                    <div class="col-md-12">
                        Jacques Le Moyne
                    </div>
                </div>
                <p>The next generation of the web’s favorite icon library + toolkit is now available as a Beta release! Try out the Free version. Subscribe to Font Awesome Pro to get even more!</p>
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="head">
                            Publication Place / Date
                        </div>
                        <div style="padding: 0px 10px;">Frankfurt / 1591</div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="head">
                            Image Dimensions
                        </div>
                        <div style="padding: 0px 10px;">18 x 14.5 inches</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="head">Color</div>
                        <div style="padding: 0px 10px;">Hand Colored</div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="head">Condition</div>
                        <div style="padding: 0px 10px;">VG</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="head">Price</div>
                        <div style="padding: 0px 10px;">$14,000.00</div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="head">Stock #</div>
                        <div style="padding: 0px 10px;">83832</div>
                    </div>
                </div>
            </div><br>
            <nav>
                <a href="#" class="btn btns">
                    <i class="fas fa-shopping-cart"></i>&nbsp Add to Cart
                </a>
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
                    <b>Map this and that and all okay</b><br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="mt-4 mapBox rounded">
                <div class="head">
                    Reference
                </div>
                <div style="padding:10px">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
            <div class="mt-4 mapBox rounded">
                <div class="head">
                    Related Categories
                </div>
                <div style="padding:10px">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
            </div>
            <div class="mt-4 mapBox rounded">
                <div class="head">
                    Related Items
                </div>
                <div class="row" style="padding:10px">
                    <div class="col-md-6 mb-4">
                        <div class="mapBox">
                            <img src="{{asset('/maps/m3.jpg')}}" width="100%">
                            <b><a class="link" href="{{url('mapDetails')}}">Nova Totius Livoniae accurata Descriptio</a></b><br>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <b>Price: $375.00</b>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="mapBox">
                            <img src="{{asset('/maps/m3.jpg')}}" width="100%">
                            <b><a class="link" href="{{url('mapDetails')}}">Nova Totius Livoniae accurata Descriptio</a></b><br>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            <b>Price: $375.00</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection