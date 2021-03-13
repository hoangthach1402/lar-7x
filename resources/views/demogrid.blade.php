@extends('layouttask.layout')
@section('content')
<div class="grid grid-cols-6 gap-4">
     <div class="col-start-2 col-span-4 m-2 bg-red-200 px-10 py-10 center">
          <div class="flex flex-row">
             <div class="1 p-4 bg-blue-300 cursor-pointer text-white rounded-xl">HOme</div>
             <div class="2 mx-2">HOme</div>
             <div class="1 mx-2">HOme</div>
             <div class="2 mx-2">HOme</div>
            
          </div>
     </div>
     <div class="col-start-1 col-end-3 m-2 bg-red-200  px-10 py-10">2</div>
     <div class="col-end-7 col-spa n-2 m-2 bg-red-200  px-10 py-10">3</div>
     <div class="col-start-1 col-end-7 m-2 bg-red-200  px-10 py-10">4</div>
   </div>
@endsection