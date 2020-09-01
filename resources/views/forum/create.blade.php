@extends('layout')
@section('forum')

<head>
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12">
            <div class="card">
                <div class="card-header">CREATE FORUM</div>
                <div class="card-body">
                    <form action="{{route('forums.store')}}" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                        <input type="text" name="title" id="title" placeholder="Enter the Title" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" class ="form-controll"  name="description">
                        </textarea>
                        </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#description' ) )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                         <div class="form-group">   
                        <br/>
                         <input type="file" name="image" id="image" class="form-control">
                         
                            <br/>
                         <button type="submit" class="btn btn-success btn-block" >Create Forum</button>
                        </div>
                    </form>
                </div>
           
            </div>
        </div> 
    </div>
</div>
    </body>
    
<style>
    
    body{
                background-color: #023E7D;
            }
    .card {
        background: white;
        
        height: 300px;
        margin: 60px auto 81px auto;
        width:600px; 
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
        font-family: verdana;
        padding-left: 25px;
        color: white;
        font-weight: bold;
        margin-top:100px;
    }
    .card-body{
        width: 100%;
        
        background-color: #f1f1f1;
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