@extends('web')


@section('title')
<title>Home</title>
@endsection

@section('style')
<style type="text/css">
    p{
        text-align: left;
    }

    .serviceBox{
        text-align: center;
        height: 100px;
        margin: 0% 10%;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
    }

    .offerBox{
        height: 500px;
        text-align: center;
    }

    .partnerBox{
        height: 100px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }
    
    .carousel-indicators .active{
        background-color: #fcce36;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('home/1.jpg')}}" height="500px" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
              <img src="{{asset('home/2.jpg')}}" height="500px" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
              <img src="{{asset('home/3.jpg')}}" height="500px" class="d-block w-100" alt="Third Slide">
            </div>
            <div class="carousel-item">
              <img src="{{asset('home/4.jpg')}}" height="500px" class="d-block w-100" alt="Fourth Slide">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
</div>
<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Our Services</strong>
</div>
<div class="row mt-5" style="margin:0% 10%;">
    <div class="col-md-4 mb-5">
        <div class="serviceBox">
            <img src="{{asset('home/s1.jpg')}}" width="100%" height="90px" alt="Service 1" style="padding:5%;">
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="serviceBox">
            <img src="{{asset('home/s2.svg')}}" width="100%" height="90px" alt="Service 2" style="padding:5%;">
        </div>
    </div>
    <div class="col-md-4 mb-5">
        <div class="serviceBox" style="padding:10%;">
            <b class="text-muted">LAND SURVEY RECORDS</b>
        </div>
    </div>
</div>
<div class="row mt-3">
    <strong style="font-size:40px; text-align: center;">We Offering</strong>
</div>
<div class="row" style="margin:0% 10%;">
    <div class="col-md-3 mt-5 mb-5">
        <div class="offerBox">
            <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
            <div class="mt-4 mb-3"><b>Formal PDH Approval</b></div>
            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <a class="btn mt-3" href="#" style="background-color: #FCCE36; color: white;">Learn More</a>
        </div>
    </div>
    <div class="col-md-3 mt-5 mb-5">
        <div class="offerBox">
            <img src="{{asset('home/o2.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 2">
            <div class="mt-4 mb-3"><b>Technical Topics</b></div>
            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <a class="btn mt-3" href="#" style="background-color: #FCCE36; color: white;">Learn More</a>
        </div>
    </div>
    <div class="col-md-3 mt-5 mb-5">
        <div class="offerBox">
            <img src="{{asset('home/o3.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 3">
            <div class="mt-4 mb-3"><b>Group Solutions</b></div>
            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <a class="btn mt-3" href="#" style="background-color: #FCCE36; color: white;">Learn More</a>
        </div>
    </div>
    <div class="col-md-3 mt-5 mb-5">
        <div class="offerBox">
            <img src="{{asset('home/o4.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 4">
            <div class="mt-4 mb-3"><b>Interviews & Commentaries</b></div>
            <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            <a class="btn mt-3" href="#" style="background-color: #FCCE36; color:white;">Learn More</a>
        </div>
    </div>
</div>
<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Channel Partners</strong>
</div>
<div class="row mt-5" style="margin:0% 10%;">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row mt-1">
                <div class="col-md-1"></div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 4" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 5" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 6" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 6" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 6" style="padding:3% 10%;">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row mt-1">
                <div class="col-md-1"></div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 1" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 2" style="padding:3%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 2" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 6" style="padding:3% 10%;">
                    </div>
                </div>
                <div class="col-md-2 mb-5">
                    <div class="partnerBox rounded">
                        <img src="{{asset('home/s2.svg')}}" width="100%" height="100px" alt="Partner 6" style="padding:3% 10%;">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>

<div class="row" style="background-color:#393939; height: auto;">
    <div class="col-md-2"></div>
    <div class="col-md-2" style="color: white; padding-top: 5%;">
        <div style="float: right;">HOW WE DO IT</div><br>
        <h2 style="float: left;">Case Studies</h2>
        <br>
        <p style="float:left;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
    </div>
    <div class="col-md-2 p-0">
        <img src="{{asset('home/o2.jpg')}}" width="100%" height="325px" alt="Partner 6">
    </div>
    <div class="col-md-2 p-0">
        <img src="{{asset('home/img1.jpg')}}" width="100%" height="325px" alt="Partner 6">
    </div>
    <div class="col-md-2 p-0">
        <img src="{{asset('home/img2.jpg')}}" width="100%" height="325px" alt="Partner 6">
    </div>
</div>

<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">About Us</strong>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>

@endsection