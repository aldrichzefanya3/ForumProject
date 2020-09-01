@extends('layout')
@section('login')
      
@if(session()->has('msg'))
<div class="alert alert-danger" role="alert">
    {{session()->get('msg')}}
</div>
<style>
    .alert{
        margin-top: 50px;
    }
</style>
@endif
<div class="container">
<div id="card">
        <div id="card-content">
            <div id="card-title">
                <h3>LOGIN</h3>
                <div class="underline-title">
                    </div>
                </div>
            </div>   
            <form action="login_check" method="post"
                  class="form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <label for="email" style="padding-top:-13px">&nbsp;Email</label>
                <input id="email"
                       class="form-content"
                       type="email"
                       name="email"
                       autocomplete ="on"
                       required/>
               
                <div class="form-border"></div>
                <label for="password" style="padding-top:13px">&nbsp;Password</label>
                <input id="password"
                       class="form-content"
                       type="password"
                       name="password"
                       required/>
                <div class="form-border"></div>
            <a href="#"><legend id="forgot-pass">"Forgot password ?</legend></a>
            
            <button onclick="logNotif()" id="submit-btn">LOGIN</button>
             <a href="{{URL::to('\signup')}}"id="singup">Does not have account yet? </a>
         </form>
    </div>
</div>    

<style>
    .container{
        background-image: url("http://www.hornsby.nsw.gov.au/__data/assets/image/0004/124924/Community-forums-848.jpg");
        background-size: cover;
        filter: blur(50%);
        margin-top:100px;
    }
            
            #card {
                background-image: linear-gradient( #000d33, #002db3,#3366ff,#b3c6ff);
                border-radius: 10px;
                box-shadow:1px 2px 8px white;
                height: 410px;
                margin: 60px auto 81px auto;
                width:329px; 
                
            } 
            #body{
                background-color:black;
                background-repeat: no-repeat;
                
            }
            <style>
                #card-content {
                    padding: 12px 50px;
                }
                #card-title {
                    font-family: "Raleway",sans-serif;
                    letter-spacing: 4px;
                    padding-bottom: 23px;
                    padding-top: 13px;
                    text-align: center;
                    color: whitesmoke;
                }
                .underline-title{
                    background-color:white;
                    height: 2px;
                    margin-top: 10px;
                    margin-left: 122px;
                    width: 80px;
                }
                label{
                    font-family: "Raleway",sans-serif;
                    font-size: 12pt;
                    color: white;
                }
                #forgot-pass{
                    color : white;
                    font-family: "Raleway",sans-serif;
                    margin-top: 10px;
                    font-size: 11px;
                    
                }
 
                .form {
                    align-items: center;
                    display: flex;
                    flex-direction: column;
                }
               
                .form-content {
                    background-color: #fbfbfb;
                    border:none;
                    
                    padding-top: 14px;
                   
                    
                }
               input[type=email]
                {
                    width: 200px;
                    border: none;
                    padding-top: 14px;
                    margin-right: 30px;
                    background-color: white;
                    margin-left: 50px;
                }
                input[type=password]
                {
                    width: 200px;
                    border: none;
                    padding-top: 14px;
                    margin-right: 30px;
                    background-color: white;
                    margin-left: 50px;
                }
                #singup {
                    color: black;
                    font-family: "Raleway",sans-serif;
                    font-size: 10pt;
                    margin-top: 16 px;
                    text-align: center;
                }
                #submit-btn {
                    background-color:black;
                    border: none;
                    border-radius: 21px;
                    box-shadow: 0px 1px 8px #668cff;
                    cursor: pointer;
                    font-family: "Raleway SemiBold",sans-serif;
                    height: 42.3px;
                    margin: 0 auto;
                    margin-top: 50px;
                    transition: 0.25s;
                    width: 153px;
                    color: white;
                    
                }
                #submit-btn:hover{
                    box-shadow: 0px 1px 18px white;
                }
                
            </style>
    
@endsection