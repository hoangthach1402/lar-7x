<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table ='members'; 
    
    protected $fillable = [
      'id' , 'name', 'email', 'password',
    ];
    
}
