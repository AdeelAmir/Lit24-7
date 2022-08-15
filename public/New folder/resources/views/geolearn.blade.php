@extends('web')


@section('title')
<title>Geolearn</title>
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
<div class="row mt-5 mb-5" style="margin:0% 20%;">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit" style="background-color:#333333; color:white;">Search</button>
    </form>
</div>
<div class="row mt-5 mb-5" style="margin:0% 10%;">
    <table class="table table-borderless">
      <thead style="background-color:#FCCE36; color:white;">
        <tr>
          <th scope="col">Course Number</th>
          <th scope="col">Course Description</th>
          <th scope="col">Faculty</th>
          <th scope="col">Level</th>
          <th scope="col">Hours</th>
          <th scope="col">Price</th>
          <th scope="col">Preview</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>12-12-op</td>
          <td><a href="{{url('courseDescription')}}" class="link">Programming Fundamentals</a></td>
          <td>Mark Modi</td>
          <td>3</td>
          <td>1.5</td>
          <td>$10.00</td>
          <td><a href="#" class="link"><i class="fas fa-play-circle" style="padding-left: 10px;"></i></a></td>
          <td><a href="{{url('courseDescription')}}" class="link">More>></a></td>
        </tr>
      </tbody>
    </table>
</div>
@endsection