@extends('layout')
@section('content')

<h1 class ="register">Register</h1>
@if(session()->has('msg'))
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss='alert' aria-label="close">x</a>
<h4 class="alert-heading">Well done!</h4>
  <p>Register Successfull!</p>
  <hr>
  
</div>
@endif

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
                <b>Phone Number</b>
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
        <input type="password" class="form-control" placeholder="Enter your Password" name="password" id="psw" >
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
            @error('confirm password')
            <div class="alert alert-danger" role="alert">
            {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <div class="maxl">
                <label class="radio-inline"> 
                    <input type="radio" name="gender" value="male" id="gender" checked>
                        <span> Male </span> 
                            </label>
                <label class="radio inline"> 
                    <input type="radio" name="gender" value="female" id='gender'>
                        <span>Female </span>                                            
                </label>
             </div>
        </div>
                                   
        <hr>
        <p>By creating an account you aggree to our <a href="#">Terms & Privacy</a>.</p>
        <input id="reg-btn" type="submit" name="submit" value="REGISTER"/>
        </form>
            <div class ="signin">
                <footer>Already have an account?
                <a href="{{URL::to('/login')}}">Sign in</a></footer>        
            </div>
      

@endsection                     
                     