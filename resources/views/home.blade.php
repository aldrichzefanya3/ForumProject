@extends('layout')
@section('home')


<div class="container-fluid padding">
<div class="row welcome text-center">
    <div class="col-xl-12">
        <img src="{{ asset('image/background.jpg')}}" style="width:1381px; "  >
        <center><button class="btn_style" >
          <a href="{{URL::to('\signup')}}" style="text-decoration: none; color: white;">REGISTER NOW!</a>  
        </button></center>
        
    </div>
    
</div>
</div>
<style>
    .col-xl-12{
        margin-top: 50px;
        margin-bottom: none;
        
        }
    .btn_style{
    border: 1px solid #cecece;
    border-radius: 30px;
    padding: 30px 100px;
    box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
    color: white;
    font-size: 24px;
    background-color: red;
    
    }
    .btn_style:hover{
    border: 1px solid #b1b1b1;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }
</style>
<!--footer-->
<div class="container-fluid">
<div class="row footer text-center">
    <div class="col-md-6">
        <hr class="black">
        <h1 class="display-4">
        <img src="{{ asset('image/favicon.png') }}"  style="width:40px; ">
        </h1>
        <hr class="light">
        <p>Forum Review Gadget</p>
        <p>"Help Others To Share Knowledge"</p>
        <p>"Help Others To Gain Knowledge"</p>
        <p>Only Support For Microsoft Edge Browser</p>
    </div>

    <div class="col-md-6">
        <hr class="light">
        <h1 class="display-4">Our Teams</h1>
        <hr class="light">
        <p>Aldrich Zefanya</p>
        <p>Tashi Bhadra Pattra</p>
        <p>Vincent Christian</p>
        <p>&copy; 2020 TeamGadgetReview<p>
    
    </div>
        
</div>
</div>
<style>
    .col-md-6{
        background-color:#001233;
        
    }
   
</style>
    



@endsection
