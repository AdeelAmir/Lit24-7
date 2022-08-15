<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style type="text/css">
  
/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 3px 6px 0 rgba(0,0,0,0.3);
  box-shadow: 0 3px 6px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #fff;
  border-top: 1px solid #dce8f1;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #FCCE36;
  border: none;
  color: white;
  width: 85%;
  padding: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 1px 3px 0 rgba(95,186,233,0.4);
  box-shadow: 0 1px 3px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #edb602;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=email],input[type=password] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 10px 32px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=email]:focus {
  background-color: #fff;
  border-bottom: 2px solid #fcce36;
}

input[type=email]:placeholder {
  color: #cccccc;
}
input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #fcce36;
}

input[type=password]:placeholder {
  color: #cccccc;
}


/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #fcce36;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: black;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:40%;
}

</style>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <div class="row">
      @if(Session::get('fail'))
      <div class="col-md-12">
          <div class="alert alert-danger" id="alrt" style="background-color: red; color: white; text-align: center;">
                      {{Session::get('fail')}}
            </div>
      </div>
      @endif
      @if ($errors->any())
      <div class="col-md-12">
        <div class="alert alert-danger" id="alrt" style="background-color: red; color: white; text-align: center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      </div>
      <br />
      @endif
    </div>
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first mt-3">
     <h3 style="text-align: center"><a href="{{url('/')}}"><img src="{{asset('logo/logo2.png')}}"></a></h3>
    </div>

    <!-- Login Form -->
    <form action="{{url('userLogin')}}" method="post">
      @csrf
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email" required="">
       @if(Session::get('email_error'))
                    <div class="bg-danger mb-4" id="divID">
                      {{Session::get('email_error')}}
                    </div>
                    @endif
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required="">
       @if(Session::get('password_error'))
                    <div class="bg-danger mb-4" id="divID">
                      {{Session::get('password_error')}}
                    </div>
                    @endif
                    <nav style="text-align:left; padding-left: 32px;"><a style="color: #fcce36; text-decoration: none;" class="underlineHover fadeIn third" href="#">Forgot Password?</a></nav>
                    <br>
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <div class="fadeIn fourth">
        <a href="#" class="btn btn-lg" style="background-color:#transparent; font-size: 30px;">
                      <i class="fab fa-facebook" style="padding-top:10px;"></i></a>
        <a href="#" class="btn btn-lg" style="background-color:#transparent; font-size: 30px;"> <img src="{{asset('logo/google.png')}}" height="25px"></a>
      </div>
    </div>

  </div>
</div>
</body>
</html>