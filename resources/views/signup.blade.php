@extends('layout')
@section('register')

@if(session()->has('msg'))
<div class="alert alert-success fade in  alert-dismissible">
<a href="#" class="close" data-dismiss='alert' aria-label="close">x</a>
<h4 class="alert-heading">Well done!</h4>
  <p>Register Successfull!</p>
  <hr>
  
</div>
<style>
    .alert{
        margin-top: 50px;
    }
</style>
@endif
<h1 class ="register">Register</h1>

    <p class="center">Please fill in this form to create an account</p>
    <hr>
    
    <form action="register_action" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group">
           <label for="username">
                <b> Name</b>
                <br/>
            </label>
        
        <input type="text" class="form-control" placeholder="Enter your Name" name="username" id="username" >    
        
        @error('username')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        
        @enderror
        </div>      
        <div class="form-group" >
            <label for="email">
                <b>Email</b>
                <br/>
            </label>
        <input type="text" class="form-control" placeholder="Enter your E-mail" name="email" id="email" >
        @error('email')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="phone">
                <b>Phone</b>
                <br/>
            </label>
        <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone" id="phone" >
        @error('phone')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        </div>
        <div class="form-group" >
            <label for="psw">
                <b>Password</b>
                <br/>
            </label>
        <input type= "password" class="form-control" placeholder="Enter your Password" name="password" id="psw" >
        @error('password')
        <div class="alert alert-danger" role="alert">
        {{$message}}
        </div>
        @enderror
        </div>
            <div class="form-group">
                <label for="psw-repeat">
                    <b>Confirm Password</b>
                    <br/>
                </label>
            <input type="password" class="form-control" placeholder="Confirm your Password" name="confirmpassword" id="confirmpassword" >
            @error('confirmpassword')
            <div class="alert alert-danger" role="alert">
            {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="gender">
                    <b>Gender </b>
                    
            </label>
            <br/>
            <br/>
            <label class="radio-inline"> 
                <input type="radio" name="gender" value="male" id="gender" >
                        <span> Male </span> 
                @error('confirm password')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
                @enderror
            </label>
                
            <label class="radio-inline">
                    <input type="radio" name="gender" value="female" id="gender" >
                        <span> Female </span> 
                    @error('confirm password')
                    <div class="alert alert-danger" role="alert">
                    {{$message}}
                    </div>
                    @enderror
            </label>
        </div>
        <hr>
        <div class="term">
        <p>By creating an account you aggree to our <a href="{{URL::to('/termsprivacy')}}">Terms & Privacy</a>.</p></div>
        
        <input id="reg-btn" type="submit" name="submit" value="REGISTER"/>
        </form>
            <div class ="signin">
                <footer>Already have an account?
                    <a href="{{URL::to('/signin')}}">Sign in</a>
                </footer>        
            </div>
 <style >
                p.center{
                    margin-left: 430px;
                }
                h1.register{
                    margin-left: 430px;
                    margin-top:90px;
                    
                }
                hr{
                    margin-left: 430px;
                    margin-right: 430px;  
                }
                b{
                    margin-left: 430px;
                }
                #username{
                    width: 20%;
                    padding: 10px;
                    margin-left: 230px;
                    display: inline-block;
                    border: none;
                    background-color:  #e0e0d2;

                }
                #email{
                    width: 20%;
                    padding: 10px;
                    margin-left: 230px;
                    display: inline-block;
                    border: none;
                    background-color:  #e0e0d2;

                }
                #phone{
                    width: 20%;
                    padding: 10px;
                    margin-left: 223px;
                    display: inline-block;
                    border: none;
                    background-color:  #e0e0d2;

                }
                .alert-danger{
                    width: 30%;
                    margin-left: 700px;
                    
                }
                #confirmpassword{
                    width: 20%;
                    padding: 10px;
                    margin-left: 141px;
                    display: inline-block;
                    border: none;
                    background-color:  #e0e0d2;
                }
                #psw{
                    width: 20%;
                    padding: 10px;
                    margin-left: 200px;
                    display: inline-block;
                    border: none;
                    background-color:  #e0e0d2;
                }
     
                .term{
                    margin-left: 430px;
                    font-size: 10pt;
                }
                .radio-inline{
                    margin-left: 430px;
                }
     
                input[type=text]:focus,input[type=password]:focus{
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
                    transition: 0.25s;
                    width: 450px;
                    color:white;
                    opacity: 0.9;
                    margin-left: 430px;
                    margin-top: 10px;
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
                    margin-top: 25px;
                }
            </style>     

@endsection                     
                     