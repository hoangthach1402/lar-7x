@extends('layouttask.layout')
@section('content')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<form action="{{ route('store') }}" method="POST"'>
     @csrf
     @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="text" class="mb-2" name="name">Name</br>
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="text" class="mb-2" name="email">email</br>
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="text" class="mb-2" name="password">password</br>

<button type="submit" >submit</button>
</form>
@endsection