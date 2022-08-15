@extends('web')


@section('title')
<title>Course Description</title>
@endsection

@section('style')
<style type="text/css">
    .img-container{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9) 0%,rgba(0, 0, 0, .1) 30%) , url('{{asset("geolearn/1.jpg")}}');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 200px;
        padding: 80px 40px;
    }

    .courseBox{
        padding: 10px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
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
        <strong>Geolearn</strong>
    </div>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="courseBox rounded">
                <img src="{{asset('/Geolearn/c1.png')}}" width="100%" height="180px">
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <b>Nova Totius Livoniae accurata Descriptio</b><br>
            <i class="fas fa-star rating"></i><i class="fas fa-star rating"></i><i class="fas fa-star rating"></i><i class="fas fa-star rating"></i><i class="fas fa-star rating"></i> 5 Rating | 488 Reviews | 820 Orders<br><br>
            <b>Course Number: </b>GL-120344-07-DM<br>
            <b>Author: </b>Mark Poland<br>
            <b>Date: </b>February 2022<br>
            <b>Price: </b>$49.00<br>
            <b>PDH Credit: </b>1 Hour<br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 mb-2">
            <nav>
                <a href="#" class="btn btns">Preview Course
                </a>
            </nav>
        </div>
        <div class="col-md-2 mb-2">
            <nav>
                <a href="#" class="btn btns">Add to Cart
                </a>
            </nav>
        </div>
    </div>
    <div class="row mt-4">
        <b>Course Description</b><br>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
    </div>
    <div class="row">
        <b>Pre-Requisite Knowledge</b><br>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
    </div>
    <div class="row">
        <b>Learning Obejectives</b><br>
        <ul style="padding-left:30px;">
            <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</li>
            <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</li>
            <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</li>
        </ul>
    </div>
    <div class="row mt-5">
        <b>Additional Courses You Might Be Interested In</b>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="courseBox rounded">
                    <a href="#"><img src="{{asset('/Geolearn/c1.png')}}" width="100%" height="180px"></a>
                </div><br>
                <a href="#" class="link"><b>Nova Totius Livoniae accurata Description and XYZ</b></a><br><br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-md-4">
                <div class="courseBox rounded">
                    <a href="#"><img src="{{asset('/Geolearn/c1.png')}}" width="100%" height="180px"></a>
                </div><br>
                <a href="#" class="link"><b>Nova Totius Livoniae accurata Description</b></a><br><br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="col-md-4">
                <div class="courseBox rounded">
                    <a href="#"><img src="{{asset('/Geolearn/c1.png')}}" width="100%" height="180px"></a>
                </div><br>
                <a href="#" class="link"><b>Nova Totius Livoniae accurata Desript</b></a><br><br>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
        </div>
    </div>
</div>
@endsection