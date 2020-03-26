<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>E-Commerce</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <nav class="navbar navbar-inverse"  >
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{URL::to('/')}}">Logo</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
        </ul>
       
        @if(Auth::user())
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{URL::to('/events')}}">Events</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::to('/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::to('/signup')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Sign In <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{URL::to('/signin')}}">Sign In as User</a></li>
                        <li><a href="#">Sign In as Administrator</a></li>

                </ul>
            </li>
        </ul>
        @endif
        
    </div>
</nav>
<style>
    .navbar{
        background-color: darkgreen;
    }
      </style>
      

<style>
    .padding{
        padding-bottom: 2rem;
    }
    .welcome{
        width: 100%;
        margin-top: auto;
    }
    .footer{
        background-color: #3f3f3f;
        color:#d5d5d5;
        margin-top: 900px;
    }
    
</style>

<div class ="container">
            @yield('content')
         </div>
            <style >
                p.center{
                    margin-left: -100px;
                    margin-top: 70px;
                }
                h1.register{
                    margin-left: -100px;
                    margin-top: 70px;
                }
                b{
                    margin-left:-100px;
                    margin-top: 50px;
                }
                input[type=text],input[type=password]{
                    width: 20%;
                    padding: 10px;
                    margin-left: inherit;
                    display: inline-block;
                    border: none;
                    background: #f1f1f1;

                }
                input[type=radio]{
                    margin-left: -100px;
                    margin-top: 70px;
                }
                input[type=text]:focus,input[type=password]:focus,{
                    background-color: #ddd;
                    outline: none;
                    margin: center;

                }
                p{
                    margin-left: 50px;
                }
                hr{
                    border:1px solid #f1f1f1;
                    margin-bottom: 25px;
                }
                #reg-btn {
                    background-color:#4CAF50;
                    border: none;
                    border-radius: 1px;
                    box-shadow: 0px 1px 8px #24c64f;
                    cursor: pointer;
                    font-family: "Raleway SemiBold",sans-serif;
                    height: 42.3px;
                    margin-left: -100px;
                    margin-top: 50px;
                    transition: 0.25s;
                    width: 450px;
                    color:white;
                    opacity: 0.9;


                    }
                    #reg-btn:hover{
                        box-shadow: 0px 1px 18px #24c64f;
                    }
                a{
                    color:dodgerblue;
                }
                .signin{
                    background-position: center;
                    background-size: auto;
                    background-color: #f1f1f1;
                    text-align: center;
                }
            </style>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            #card {background: #fbfbfb;
                    border-radius: 10px;
                    box-shadow:1px 2px 8px rgba(0,0,0,0.65);
                    height: 410px;
                    margin: 60px auto 81px auto;
                    width:329px; 
            } 
            body{
                background-color:white;
                background-repeat: no-repeat;
                background-position: top;
            }
            <style>
                #card-content {
                    padding: 12px 50px;
                }
                #card-title {
                    font-family: "Raleway Thin",sans-serif;
                    letter-spacing: 4px;
                    padding-bottom: 23px;
                    padding-top: 13px;
                    text-align: center;
                }
                .underline-title{
                    background-color:#a6f77b;
                    height: 2px;
                    margin: -15px auto 0 auto;
                    width: 80px;
                }
                a {
                    text-decoration: none;
                }
                label{
                    font-family: "Raleway",sans-serif;
                    font-size: 11pt;
                }
                #forgot-pass{
                    color : #2dbd6e;
                    font-family: "Raleway",sans-serif;
                    margin-top: 10px;
                    text-align: right;
                }
                .form {
                    align-items: center;
                    display: flex;
                    flex-direction: column;
                }
                .form-border{
                    background-color:#2dbd6e;
                    height: 0.5px;
                    width: 50%;
                    margin: center;
                }
                .form-content {
                    background-color: #fbfbfb;
                    border:none;
                    outline: none;
                    padding-top: 14px;
                }
                #singup {
                    color: #2dbd6e;
                    font-family: "Raleway",sans-serif;
                    font-size: 10pt;
                    margin-top: 16 px;
                    text-align: center;
                }
                #submit-btn {
                    background-color:#a6f77b;
                    border: none;
                    border-radius: 21px;
                    box-shadow: 0px 1px 8px #24c64f;
                    cursor: pointer;
                    font-family: "Raleway SemiBold",sans-serif;
                    height: 42.3px;
                    margin: 0 auto;
                    margin-top: 50px;
                    transition: 0.25s;
                    width: 153px;
                    
                }
                #submit-btn:hover{
                    box-shadow: 0px 1px 18px #24c64f;
                }
                
            </style>
    </body>
</html>