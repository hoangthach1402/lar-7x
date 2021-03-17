@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
  <div class="card">
    <div class="card-header">

      register
    </div>
    <div class="card-body">
      <form action="{{ route('demo.store') }}" method="POST">
      @csrf
         name  <input type="text" name="name" id="">
          passwrod <input type="text" name="password>">
       <button type="submit"> login</button>
    </form>
  </div>
  </div>
  </div>
  </div>

</div>
@endsection