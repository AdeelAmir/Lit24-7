@extends('web')


@section('title')
<title>Contact Us</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("contactUs/1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .contactBox{
        padding: 5%;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
    }

    .btns{
        background-color: #FCCE36; 
        color: white;
    }
</style>
@endsection

@section('content')
<div class="img-container">
    <div style="color: white; font-size:30px;">
        <strong>Contact Us</strong>
    </div>
</div>
<div class="row mt-5">
    <strong style="font-size:40px; text-align: center;">Contact Us</strong>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <p class="mb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    <div class="row mt-5">
        <div class="col-md-6">
            <form method="post" action="{{url('')}}">
                @csrf
                <p><b>E-MAIL FORM</b></p>
                <h2><b>Say Hello</b></h2>
                <p>You will find yourself working in a true partnership that results in an incredible experience, and an end product that is the best.</p>

                <label for="name" class="form-label">Your Name (required)</label>
                <input type="text" name="name" id="name" class="form-control"><br>
                <label for="email" class="form-label">Your Email (required)</label>
                <input type="email" name="email" id="email" class="form-control"><br>
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control"><br>
                <label for="message" class="form-label">Your Message</label>
                <textarea rows="4" id="message" class="form-control"></textarea><br>
                <input type="submit" name="submit" value="SEND" class="btn btns">
            </form>
        </div>
        <div class="col-md-6" style="padding-top: 20%"><img src="{{asset('contactUs/contactUs.svg')}}" height="300px" width="100%" alt="First Slide"></div>
    </div>
    <div class="row">
        <div class="col-md-3 mt-5">
            <div class="contactBox rounded">
                <b>Company Address</b>
                <p>Demo address # 16240 SW 107th Place, Miami, Florida</p>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <div class="contactBox rounded">
                <b>Email</b>
                <p>Info@surveylogics.co surveylogics@hotmail.co</p>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <div class="contactBox rounded">
                <b>Phone Numebers</b>
                <p>Mobile: +1 111 222 3333<br>Phone: +1 111 222 3333</p>
            </div>
        </div>
        <div class="col-md-3 mt-5">
            <div class="contactBox rounded">
                <b>Office Hours</b>
                <p>Mon to Sat - 08:00-18-00<br>Sunday-08:00-14:00</p>
            </div>
        </div>
    </div>
</div>

@endsection