<?php

namespace App\Http\Controllers;

use App\User as AppUser;
use Illuminate\Http\Request;
use App\User;

class taskController extends Controller
{
    public function index(){
        return view('layouttask.home');
    }
    public function create(){
        return view('layouttask.register');
    }
    public function store(Request $request)
    {   
       
        // $data =[
        //     'name'=>$request->name ,
        //     'password'=>$request->password ,
        //     'email'=>$request->email
        // ];
        // User::create($data);
      $validateData = $request->validate([
          'name'=>'required|max:30',
          'email'=>'required|max:30',
          'password'=>'required|max:30',
      ]);
      User::create($validateData);
      //return response()->json('Form is successfully validated and data has been saved');
      return redirect()->back()->with('message','Register success '); 

        // $user = User::create($request->validated());

        // return redirect()->route('taskhome');
        
    }
    public function homie(){
        echo 'homie';
    }
    public function showall(){
     $users = User::all(); // 
   
    //  return view('layouttask.show')->with(['users'=>$users]);
     return view('layouttask.show',compact('users'));

    }
    public function edit(User $id){
        // $user = User::find($id);
       return view('layouttask.edit',compact('id'));
        // return view('layouttask.edit')->with(['user' => $user]);
       
     
    }
    public function update(Request $request,User $user) {
        
        echo  $user;
    }
}
