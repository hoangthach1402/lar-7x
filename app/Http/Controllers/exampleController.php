<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class exampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $user = User::paginate(15);
        return view('crud.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('crud.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|max:255',
        ]);
     
       $User = User::create($validatedData);
     return  redirect('crud/index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        $users = User::all();
        return view('crud',['user'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('crud.edit', compact('user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|max:255',
        ]);
        $user = User::all();
        User::whereId($id)->update($validatedData);
       return redirect('crud/index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
       
      User::where('id',$id)->delete();
       

        
     
        return redirect()->route('crud.index');
    }
}
