<!DOCTYPE html>
<html>
<head>
  <title>Purchase</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>
<style type="text/css">
  
/* BASIC */

html {
  background-color: white;
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

input[type=email],input[type=text],input[type=password] {
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

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #fcce36;
}

input[type=text]:placeholder {
  color: #cccccc;
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

input[type="radio"] {
  /* remove standard background appearance */
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* create custom radiobutton appearance */
  display: inline-block;
  width: 15px;
  height: 15px;
  padding: 2px;
  /* background-color only for content */
  background-clip: content-box;
  border: 1px solid #bbbbbb;
  border-radius: 50%;
}

/* appearance for checked radiobutton */
input[type="radio"]:checked {
  background-color: #fcce36;
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
  -webkit-animation-delay: 0s;
  -moz-animation-delay: 0s;
  animation-delay: 0s;
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
  <div class="fadeIn first mb-3">
     <h3 style="text-align: center"><a href="{{url('/')}}"><img src="{{asset('logo/logo2.png')}}"></a></h3>
  </div>
  <div class="fadeIn zero mb-3">
    <input type="radio" name="card"> &nbsp<img src="{{asset('cards/visa.png')}}" height="50px" width="80px" style="border: 1px solid lightgrey; grey; padding: 10px;" class="rounded">&nbsp&nbsp&nbsp&nbsp
    <input type="radio" name="card"> &nbsp<img src="{{asset('cards/master.png')}}" height="50px" width="80px" style="border: 1px solid lightgrey; padding: 5px 15px;" class="rounded">&nbsp&nbsp&nbsp&nbsp
    <input type="radio" name="card"> &nbsp<img src="{{asset('cards/paypal.png')}}" height="50px" width="80px" style="border: 1px solid lightgrey; padding: 7px 10px;" class="rounded">
  </div>
  <div id="formContent">
    <form action="{{url('payment')}}" method="post" class="stripe-payment" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="stripe-payment">
      @csrf
      <br>
      <input type="hidden" name="id" value="{{$order_id}}">
      <input type="text" id="price" class="fadeIn second" name="price" value="{{$price}}" required="" readonly="">
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="Name" required="">
      <input autocomplete='off' type="text" id="card-num" class="fadeIn second card-num" name="cardNumber" placeholder="Card Number" required="">
      <input autocomplete='off' type="text" id="card-expiry-month" class="fadeIn third card-expiry-month" name="month" placeholder="Expiry Date (MM)" size="2" required="">
      <input autocomplete='off' type="text" id="card-expiry-year" class="fadeIn third card-expiry-year" name="year" placeholder="Expiry Year (YYYY)" size="4" required="">
      <input autocomplete='off' type="text" id="card-cvc" class="fadeIn third card-cvc" name="CVC" placeholder="CVC" size="4" required="">
      <div class='hide error form-group'>
        <br><div class='alert-danger alert'>Fix the errors before you begin.</div>
      </div>
      <input type="submit" class="fadeIn third" value="Confirm">
    </form>
  </div>
</div>

<script type="text/javascript">
    $(function () {
        var $form = $(".stripe-payment");
        $('form.stripe-payment').bind('submit', function (e) {
            var $form = $(".stripe-payment"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function (i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeRes);
            }

        });

        function stripeRes(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
</body>
</html>