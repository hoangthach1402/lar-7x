  
@extends('layouts.app')
 @section('header')

 <button><a href="{{ route('login') }}"> Login</a></button>
 <button><a href="{{ route('register') }}"> Login</a></button>
 </button><a href="{{ route('member.create') }}"> Create</a> <br>
 <span class="h4 d-block font-weight-normal mb-2">{{ $member->count() }}</span>
  <button>
    @if(Session::has('message'))

    <p class="alert
    {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
    
    @endif
<h1>Index </h1>
@foreach ($member as $m)
<table>
    <tr><th>Id</th>
    <th>Name</th>
    <th>Password</th>
     <th>Option</th>
</tr>
    <tr><td>{{ $m->id }}</td>
    <td>{{ $m->name }}</td>
    <td>{{ $m->password }}</td>
    <td>{{ Carbon\Carbon::parse($m->created_at)->diffForHumans() }}</td>


     <td><a href="{{ route('member.edit',$m->id) }}">Edit</a>
          <form action="{{ route('member.destroy',$m) }}" method="post">
              @csrf 
              @method('delete')
             
               <button type="submit">Delete</button>
          </form>
       
         

</td>
</tr>
</table>

@endforeach
<div class="mx-auto ml-10">
<div class="pagination ">
{!! $member->links() !!}
</div>
</div>
<div class="flex ...">
    <div class="w-1/2 bg-red-100 ">w-1/2</div>
    <div class="w-1/2  bg-gray-100">w-1/2</div>
  </div>
  <div class="w-full  bg-red-300 float-right">w-full</div>
  <div class="w-1/2  bg-red-100 float-right">w-1/2</div>
  <div class="w-1/2  bg-indigo-700 clear-right">w-1/2</div>
@endsection
@section('header')

@endsection

{{-- {{ $paginator->links('member') }} --}}