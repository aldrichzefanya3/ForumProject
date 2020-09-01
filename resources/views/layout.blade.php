<!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <title>Gadget Review</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      
        <nav class="navbar navbar-inverse navbar-fixed-top"  >
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{URL::to('/')}}">
                  <img src="{{ asset('image/favicon.png') }}"  style="width:30px; ">
              </a>
            </div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
            </ul>

            @if(Auth::user())
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{URL::to('/forums')}}">Forum</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
            </ul>
            @else
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('/signup')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
            </ul>
            @endif

        </div>
    </nav>


@yield('home')
@yield('register')
@yield('login')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">                       
@yield('forum')          
    </body>
<style>
    .navbar{
    	background-color: #001233;
        border-style:none;
        
    }
    .nav.navbar-nav{
    	background-color: #001845;
    }
    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover{
    	background-color:#023E7D;
        color:white;
    }
    ul.nav navbar-class{
        background-color:   white;
    }
    .padding{
        padding-bottom: 2rem;
    }
    .footer{
        background-color: #3f3f3f;
        color:#d5d5d5;
        margin-top: 0px;
    }
    
</style>
</html>