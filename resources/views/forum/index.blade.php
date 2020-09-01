@extends('layout')
@section('forum')
<div class="container">
<div class="containers">
  <div class="jumbotron">
    <h1>FORUM</h1>      
    <p>Berbagi dan Mencari Pengetahuan Seputar Gadget</p>
  </div>   
</div>

<style>
    .jumbotron{
        color:white;
        background: #004d99;
        text-align: center;
        margin-top: 70px;
        text-shadow: 2px 2px 4px black;
    }
    .jumbotron h1{
        font-family: sans-serif;
        
    }
    
</style>



<div class="box">
    <a href="{{route('forums.create')}}" class="create">Create Forum </a>
</div>
<style>
    
    .box .create{
        background-color: green;
        border-radius: 50px;
        border-style: solid;
        color: white;
        padding: 5px 5px 5px 5px;
        text-align: center;
        text-decoration:none;
        display: inline-block;
        font-size: 12px;
         margin-left: 1050px;
        cursor: pointer;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
 
</style>
</br>
<div class="warna">


    <div class="table responsive">
        <table class="table table-striped"  >
            <tr>
                <th>Thread </th>
                <th>Preview</th>
                <!-- <th>Views</th> -->
            </tr>
            @foreach ($forums as $row)                  
            <tr> 
                <td><h3><a href="{{route('forums.show', $row->str_slug)}}"><?php echo str_limit($row["title"],50); ?> </a></h3><?php echo str_limit($row["description"],200); ?></td>
                
                <td style="text-align: center;"><?php echo "<img src='image/".$row["image"]." ' width='200px; ' > ";    ?></td>
        
            </tr>


            @endforeach
        </table>
        <div class="rows">
            {!!$forums->links()!!}
        </div>
        <style>
            .rows{
                text-align: center;
            }

        </style>
    </div>
</div>
</div>
<style>
    .container{
    	background-color: #0466C8;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th {
        text-align: center;
        padding: 8px;
        background-color:  #0040ff;
        color: white;
        width: 400px;
    }
    
    td{
        padding: 8px;
        text-align: left;
    }

    tr:nth-child(even){
        background-color: #f2f2f2;
    }

    .warna{
        
        background:  #e6ecff;
       
        background-size: cover
        
    }
</style>

@endsection

            
