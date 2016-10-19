<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PhoneBook</title>

  <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header-login-signup.css') }}">
  <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

<header class="header-login-signup">

  <div class="header-limiter">

    <h1>Phone<span>Book</span></h1>
    <ul>
      <li><a href="{{ url('/login') }}">Login</a></li>
      <li><a href="{{ url('/register') }}">Sign up</a></li>
    </ul>

  </div>

</header>

<!-- The content of your page would go here. -->


<div class="menu">
  <h1>WellCome To PhoneBook</h1>
  <h3>Register or Login To Save Your Important Contacts</h3>
</div>



<!-- Demo ads. Please ignore and remove. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>

</body>
</html>
