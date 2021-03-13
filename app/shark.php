<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shark extends Model
{
  protected $table ='sharks';
  protected $fillable = [
     'id', 'name', 'email','shark_level',
 ];
}
