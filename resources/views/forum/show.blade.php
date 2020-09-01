@extends('layout')
@section('forum')
<body>
@if(session()->has('msg'))
<div class="alert alert-success ">
<a href="#" class="close" data-dismiss='alert' aria-label="close">x</a>
<h4 class="alert-heading">Well done!</h4>
  <p>Comment has been Add Successfully....</p>
  <hr>

</div>

<style>
    .alert{
        margin-top: 80px;
    }
</style>
@endif
<head>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
</head>
<div class="judul" >
    <h1>{{$forums['title']}}</h1> 
</div>
<div class="row justify-content-center">
    <div class="col-lg-6" style="color:white",border:>
        <?php echo $forums["description"]; ?>
</div>
    <div class="col-lg-2" >
        <?php echo "<img src='/image/".$forums["image"]."' width='250px;'> "; ?>
    </div>
   
</div>
<style>
    
    .judul{
        color: white;
        text-align: center;
        margin-bottom: 80px;
        margin-top: 80px;
        font-family:Verdana, Geneva;
    }
    .col-lg-2{
       justify-content: center;
       width: 300px;
       margin-left: 20px;;
    }
    .col-lg-6{
        text-align:left;

    }
    .row{
        margin-left: 300px;
    }
</style>
@foreach ($forums->comments() as $row)                  
        <h4><?php echo $row["content"]; ?></h4>

@endforeach
</body>       
</br>
</br>
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Comment</div>
                    <div class="card-body">
                        <form action="comments" method="post" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                            <label for="content" style="color: white;">Your Comment</label>
                            <textarea id="content" class ="form-controll"  name="content">
                            </textarea>
                            </div>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#content' ) )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                             <div class="form-group">   
                                <button type="submit" class="btn btn-success btn-block" >Ok</button>
                            </div>
                        </form>
                    </div>
               
                </div>
            </div> 
        </div>
    </div> 

        <style>
            body{
                background-color: #023E7D;
            }
            .card {
                background: inherit;
                height: 300px;
               
                width:500px; 
            } 
            label[for=description]
            {
                margin-left: 50px;
            }
            input[type=text]
            {
                margin-top: 10px;
            }
            .card-header{
                background-color: #001233;
                height: 50px;
                width: auto;
                padding-top: 10px;
                font-size: 16px;
                font-family: sans-serif;
                padding-left: 25px;
                color: white;
                font-weight: bold;
            }
            .card-body{
                width: 100%;
                
                background-color: inherit;
            }
        
            #image{
                width: 500px;   
                margin-left: 50px;
            }
            #title{
                width: 500px;
                margin-left: 50px;
               
            }
            
            
        </style>
@endsection