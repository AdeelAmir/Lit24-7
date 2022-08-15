<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
    @yield('style')
    <style type="text/css">
      .nav-link:hover{
        color: #FCCE36 !important;
      }

      .active{
        color: #FCCE36 !important;
      }

      .web-link{
        text-decoration: none;
        color: white;
      }

      .web-link:hover{
        color: #FCCE36 !important;
      }
    </style>
    @yield('title')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="background-color: #393939; color: white; padding: 1% 4%;">
        <div class="col-lg-3">Welcome to Survey Logics</div>
        <div class="col-lg-9">
          <i class="fas fa-phone-alt"></i> &nbsp;Call Us: 111-222-3333
          <span style="float: right;">
            @if($user)
            <a id="cartCount" href="{{url('cartItems')}}" <?php if ($page == 'CART') echo 'class="web-link active"';else echo 'class="web-link"'; ?>><i class="fas fa-shopping-cart"></i>@if($cartCount>0)<sup> {{$cartCount}}</sup> @endif</a>&nbsp;
            @endif
            <div class="btn-group">
              <button type="button" class="btn btn-secondary btn-sm dropdown-toggle web-link" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:transparent; border: none;">
                <i class="fas fa-user"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                @if($user)
                <li><a href="{{url('user/dashboard')}}" class="dropdown-item" type="button">Dashboard</a></li>
                <li><a href="{{url('logout')}}" class="dropdown-item" type="button">Logout</a></li>
                @else
                <li><a href="{{url('loginIndex')}}" class="dropdown-item" type="button">Sign in</a></li>
                <li><a href="{{url('signUpIndex')}}" class="dropdown-item" type="button">Register</a></li>
                @endif
              </ul>
            </div>
          </span>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('logo/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="{{url('/')}}" <?php if ($page == 'HOME') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>HOME</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('survey')}}" <?php if ($page == 'SURVEY') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>SURVEY</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('surveyRecord')}}" <?php if ($page == 'SURVEY RECORDS') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>SURVEY RECORDS</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('antiqueMaps')}}" <?php if ($page == 'ANTIQUE MAPS') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>ANTIQUE MAPS</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('geo')}}"<?php if ($page == 'GEOLEARN') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>GEOLEARN</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('member')}}" <?php if ($page == 'MEMBERSHIP') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>MEMBERSHIP</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('aboutUs')}}" <?php if ($page == 'ABOUT') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>ABOUT</b></a>
            </li>
            <li class="nav-item">
              <a href="{{url('contact')}}" <?php if ($page == 'CONTACT US') echo 'class="nav-link active"';else echo 'class="nav-link"'; ?>><b>CONTACT US</b></a>
            </li>
          </ul>
        </div>
        </nav>
    </div>
    

    <div class="container-fluid">
      @yield('content')
    </div>
    


    <div class="container-fluid">
      <div class="row bg-dark" style="color: white; padding: 3% 10%;">
        <div class="col-md-4 mt-3">
          <b>About Us</b><br><br>
          <div class="row">
            <div class="col-md-4"><a class="web-link" href="{{url('aboutUs')}}">About</a></div>
            <div class="col-md-4">Services</div>
          </div>
          <div class="row">
            <div class="col-md-4"><a class="web-link" href="{{url('contact')}}">Location</a></div>
            <div class="col-md-4"><a class="web-link" href="{{url('contact')}}">Contact</a></div>
          </div>
          <div class="row">
            <div class="col-md-4">Blog</div>
            <div class="col-md-4">Library</div>
          </div>
        </div>

        <div class="col-md-4 mt-3">
          <b>Popular Categories</b><br><br>
          <div class="row">
            <div class="col-md-6">3D Scanning</div>
            <div class="col-md-6">Survey LinkedIn</div>
          </div>
          <div class="row">
            <div class="col-md-6">Survey Module</div>
            <div class="col-md-6"><a class="web-link" href="{{url('member')}}">Membership Page</a></div>
          </div>
          <div class="row">
            <div class="col-md-6"><a class="web-link" href="{{url('antiqueMaps')}}">Antique Maps</a></div>
            <div class="col-md-6">Antique Map</div>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3 mt-3">
          <b>Contact Us</b><br><br>
          <div class="row">
            <div class="col-md-12"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp; info@surveylogics.co</div>
          </div>
          <div class="row">
            <div class="col-md-12"><i class="fas fa-envelope"></i>&nbsp; info@surveylogics.co</div>
          </div>
          <div class="row">
            <div class="col-md-12"><i class="fas fa-phone-alt" style="color:white;"></i> &nbsp;+1 111 222 3333</div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-12" style="font-size: 30px;"><i class="fab fa-twitter"></i> &nbsp;<i class="fab fa-facebook-f"></i> &nbsp;<i class="fab fa-instagram"></i> &nbsp;<i class="fab fa-youtube"></i></div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    @yield('script')

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>