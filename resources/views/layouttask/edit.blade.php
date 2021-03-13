@extends('layouttask.layout')
{{-- @php 
echo $user->id ;
@endphp --}}
<form action="{{ route( 'user.update',['id'=>$id->id]) }}" method="post">
@csrf
@method('patch') 
<input type="text" name="name" value="{{$id->name}}">Name</br>
<input type="text" name="email" value="{{$id->email}}">Email</br>
<input type="text" name="password" value="{{$id->password}}"Password</br>
<button type="submit">submit</button>
</form>

