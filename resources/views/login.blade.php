@extends('layout')
@section('content')
      
@if(session()->has('msg'))
{{session()->get('msg')}}

@endif
     <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title">
                    </div>
                </div></div>   
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
            <input id="submit-btn"
                   type="submit" name="submit"
                   value="LOGIN"/>
             <a href="{{URL::to('\signup')}}"id="singup">Does not have account yet? </a>
         </form>
@endsection