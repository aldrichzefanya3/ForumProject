@extends('layout')
@section('content')
@if(Auth::user())
<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss='alert' aria-label="close">x</a>
  <strong>Login Successfull!</strong>
  <hr>
  
</div>
@endif

<div class="container-fluid padding">
<div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">E-Commerce</h1>
    </div>
        <hr>
    <div class="col-12">
        <h1 class="lead">Welcome to this website!</h1>
    </div>
</div>
</div>
<!--footer-->
<div class="container-fluid padding">
<div class="row footer text-center">
    <div class="col-md-4">
        <hr class="light">
        <h1 class="display-4">Logo</h1>
        <hr class="light">
        <p>xx-xxx-xxx-xxxx</p>
        <p>xxxxx@gmail.com</p>
        <p>Jalan xxxx no xx</p>
        <p>Bandung,Indonesia</p>
    
    </div>
    <div class="col-md-4">
        <hr class="light">
        <h1 class="display-4">Info</h1>
        <hr class="light">
        <p>xx-xxx-xxx-xxxx</p>
        <p>xxxxx@gmail.com</p>
        <p>Jalan xxxx no xx</p>
        <p>Bandung,Indonesia</p>
    
    </div>
    <div class="col-md-4">
        <hr class="light">
        <h1 class="display-4">Our Teams</h1>
        <hr class="light">
        <p>xx-xxx-xxx-xxxx</p>
        <p>xxxxx@gmail.com</p>
        <p>Jalan xxxx no xx</p>
        <p>Bandung,Indonesia</p>
    
    </div>
        
</div>
</div>
    



@endsection
