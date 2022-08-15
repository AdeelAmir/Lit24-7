@extends('web')


@section('title')
<title>Membership</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("membership/1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .membershipBox{
        padding: 30px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        text-align: center;
    }

    .membershipBox:hover{
        background-color: #FCCE36;
        color: white;
        transform: translateY(0) scale(1.1);
    }

    .membershipBox:hover .btns{
        background-color: white;
        color: black;
    }

    .membershipBox:hover .price{
        background-color: #5E5534;
        color: white;
    }

    .membershipBox:hover .txt{
        color: white;
    }


    .price{
        background-color: #E5E5E5;
        padding: 20px;
        width: auto;
        margin: 20px 40px;
    }

    .txt{
        color: #747474; 
    }

    .btns{
        background-color: #FCCE36;
        color: white;
        width: 60%;
    }

    .btn-team{
        background-color: #FCCE36;
        color: white;
        width: 80%;
    }

    .circle{
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border: 2px dashed #fcce36;
    }

    .carousel-indicators .active{
        background-color: #fcce36;
    }

    .comment{
        text-align:center;
        color: black;
        padding-bottom: 70px;
    }

    .commentBox{
        padding: 30px;
        margin: 2px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    }

    .commentBox:hover{
        background-color: #FCCE36;
        color: white; 
    }

    .profile{
        border-top-left-radius: 50%;
        border-top-right-radius: 50%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
    }
</style>
@endsection

@section('content')
<div class="img-container">
    <div style="color: white; font-size:30px;">
        <strong>Membership</strong>
    </div>
</div>
<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Membership</strong>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>

<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Pricing Table</strong>
</div>
<div class="row mt-5 mb-5  text-muted" style="margin:0% 20%;">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="membershipBox">
                <b style="font-size:20px;">Basic</b>
                <div class="price rounded">Free</div>
                <p class="txt">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <a href="{{url('signUpIndex')}}" class="btn btn-lg btns">Sign Up</a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="membershipBox">
                <b style="font-size:20px;">Professional</b>
                <div class="price rounded">$99/Per Installation</div>
                <p class="txt">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <a href="{{url('signUpIndex')}}" class="btn btn-lg btns">Sign Up</a>
            </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="membershipBox">
                <b style="font-size:20px;">Standard</b>
                <div class="price rounded">$49/Per Installation</div>
                <p class="txt">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                <a href="{{url('signUpIndex')}}" class="btn btn-lg btns">Sign Up</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Our Team</strong>
</div>
<div class="row mt-5 mb-5  text-muted" style="margin:0% 20%;">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="col-md-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t1.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t2.png')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t3.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t4.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t5.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t6.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t7.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div style="height: 400px; text-align: center;">
                          <img src="{{asset('team/t8.jpg')}}" height="200px" width="200px" class="circle" alt="First Slide"><br><br><br>
                          <a href="#" class="btn btn-lg btn-team"><b>ABC XYZ</b><br>Professor</a>
                      </div>
                  </div>
              </div>
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
    <strong style="font-size:40px; text-align: center;">Customer Said</strong>
</div>
<div class="row mt-5 mb-5  text-muted" style="margin:0% 20%;">
    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="col-md-12">
        <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                  <div class="col-md-4 comment">
                      <div class="commentBox rounded">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      </div><br>
                      <img src="{{asset('team/t7.jpg')}}" height="60px" width="60px" class="profile" alt="First Slide"><a href="#" class="btn"><b>ABC XYZ</b><br>Student</a>
                  </div>
                  <div class="col-md-4 comment">
                      <div class="commentBox rounded">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      </div><br>
                      <img src="{{asset('team/t8.jpg')}}" height="60px" width="60px" class="profile" alt="First Slide"><a href="#" class="btn"><b>ABC XYZ</b><br>Student</a>
                  </div>
                  <div class="col-md-4 comment">
                      <div class="commentBox rounded">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      </div><br>
                      <img src="{{asset('team/t9.jpg')}}" height="60px" width="60px" class="profile" alt="First Slide"><a href="#" class="btn"><b>ABC XYZ</b><br>Student</a>
                  </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                  <div class="col-md-4 comment">
                      <div class="commentBox rounded">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      </div><br>
                      <img src="{{asset('team/t1.jpg')}}" height="60px" width="60px" class="profile" alt="First Slide"><a href="#" class="btn"><b>ABC XYZ</b><br>Student</a>
                  </div>
                  <div class="col-md-4 comment">
                      <div class="commentBox rounded">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      </div><br>
                      <img src="{{asset('team/t3.jpg')}}" height="60px" width="60px" class="profile" alt="First Slide"><a href="#" class="btn"><b>ABC XYZ</b><br>Student</a>
                  </div>
                  <div class="col-md-4 comment">
                      <div class="commentBox rounded">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      </div><br>
                      <img src="{{asset('team/t2.png')}}" height="60px" width="60px" class="profile" alt="First Slide"><a href="#" class="btn"><b>ABC XYZ</b><br>Student</a>
                  </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
</div>
@endsection