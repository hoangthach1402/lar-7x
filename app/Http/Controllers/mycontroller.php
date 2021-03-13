<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class mycontroller extends Controller
{
    public function show(){
       $user = User::all();
       dd($user);
    }
}
