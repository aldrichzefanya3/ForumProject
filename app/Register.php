<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class Register extends Authenticatable
{
    protected $table='register_users';
     

    
    
    public static function formstore($data){
        //echo "here model is";
        
        //var_dump($data);
        $username=request('username');
       
        $email=request('email');
        //echo $email."&nbsp";
        $password=Hash::make(request('password'));
        //echo $password;
        
        $users=new Register();
        $users->name=$username;
        $users->email=$email;
        $users->password=$password;
        
        $users->save(); 
        
    }
     
    
        
        
    
}
