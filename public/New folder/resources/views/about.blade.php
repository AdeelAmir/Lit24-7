@extends('web')


@section('title')
<title>About</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("/about/1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .projectBox{
        height: 300px;
        text-align: center;
    }

    .surveyBox{
        height: 550px;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }
    .carousel-indicators .active{
        background-color: #fcce36;
    }
</style>
@endsection

@section('content')
<div class="img-container">
    <div style="color: white; font-size:30px;">
        <strong>About</strong>
    </div>
</div>
<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">About Us</strong>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>
<div class="row">
    <strong style="font-size:40px; text-align: center;">Our Project</strong>
</div>
<div class="row mt-3 mb-5" style="margin:0% 20%;">
    <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="col-md-3 mb-5 projectBox">
        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
        <div class="mt-4 mb-3"><b>Demographic<br>Public Survey</b></div>
    </div>
    <div class="col-md-3 mb-5 projectBox">
        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
        <div class="mt-4 mb-3"><b>Likert<br>Public Survey</b></div>
    </div>
    <div class="col-md-3 mb-5 projectBox">
        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
        <div class="mt-4 mb-3"><b>Open-ended<br>Public Survey</b></div>
    </div>
    <div class="col-md-3 mb-5 projectBox">
        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
        <div class="mt-4 mb-3"><b>Matrix<br>Public Survey</b></div>
    </div>
</div>

<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Latest Survey</strong>
</div>
<div class="row mt-3 mb-5" style="margin:0% 20%;">
    <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>

<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row p-1">
                <div class="col-md-4 mb-5">
                    <div class="surveyBox rounded">
                        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
                        <p><br>10 AUG 2021 | BY DAVID</p>
                        <div><b>Demographic Public Survey</b></div>
                        <p class="text-muted" style="text-align: left; padding: 5%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a class="btn" href="#" style="background-color: #FCCE36; color: white;">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="surveyBox rounded">
                        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
                        <p><br>10 AUG 2021 | BY DAVID</p>
                        <div><b>Demographic Public Survey</b></div>
                        <p class="text-muted" style="text-align: left; padding: 5%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a class="btn" href="#" style="background-color: #FCCE36; color: white;">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="surveyBox rounded">
                        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
                        <p><br>10 AUG 2021 | BY DAVID</p>
                        <div><b>Demographic Public Survey</b></div>
                        <p class="text-muted" style="text-align: left; padding: 5%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a class="btn" href="#" style="background-color: #FCCE36; color: white;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="surveyBox rounded">
                        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
                        <p><br>10 AUG 2021 | BY DAVID</p>
                        <div><b>Demographic Public Survey</b></div>
                        <p class="text-muted" style="text-align: left; padding: 5%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a class="btn" href="#" style="background-color: #FCCE36; color: white;">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="surveyBox rounded">
                        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
                        <p><br>10 AUG 2021 | BY DAVID</p>
                        <div><b>Demographic Public Survey</b></div>
                        <p class="text-muted" style="text-align: left; padding: 5%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a class="btn" href="#" style="background-color: #FCCE36; color: white;">Read More</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="surveyBox rounded">
                        <img src="{{asset('home/o1.jpg')}}" class="rounded" width="100%" height="250px" alt="Offer 1">
                        <p><br>10 AUG 2021 | BY DAVID</p>
                        <div><b>Demographic Public Survey</b></div>
                        <p class="text-muted" style="text-align: left; padding: 5%;">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                        <a class="btn" href="#" style="background-color: #FCCE36; color: white;">Read More</a>
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

@endsection