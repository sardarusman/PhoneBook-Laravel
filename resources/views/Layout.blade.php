<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>PhoneBook</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
          <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- BOOTSTRAP -->
        <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs/dt-1.10.8/datatables.min.css"/>

        <!-- Styles -->
    </head>
    <body>
      <div class="container">
       @if (Auth::check()) 
        <div class="row">
            Welcome {{ ucfirst (Auth::user()->name) }} [ <a href="{{ url('/contacts') }}">Home</a>&nbsp;|&nbsp;<a href="{{ url('/logout') }}">Logout</a> ]
        </div>
       @endif
              <div class="content">
                <div class="title">
                    @yield ('content')
                </div>
            </div>
     </div>
    
        <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/js/vendor/bootstrap.js') }}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/r/bs/dt-1.10.8/datatables.min.js"></script>

         @yield ('inline_js')
    </body>
</html>
