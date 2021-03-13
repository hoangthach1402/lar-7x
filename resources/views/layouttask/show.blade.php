@extends('layouttask.layout')
@section('content')

<table class="table-auto border-collapse border border-green-800">
  <tr>
     <th>id</th>
     <th>name</th>
     <th>email</th>
     <th>password</th>
</tr>
@foreach ($users as $user)
    

<tr>
     <td>{{ $user->id }}</td>
     <td>{{ $user->name }}</td>
     <td>{{ $user->email }}</td>
     <td>{{ $user->password }}</td>
     <td><a href="{{ route('user.edit',['id'=>$user->id]) }}">Edit</a></td>
</tr>

  

@endforeach 
     
</table>
<table class="table-auto border-collapse border border-green-800">
     <thead>
       <tr>
         <th>Title</th>
         <th>Author</th>
         <th>Views</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>Intro to CSS</td>
         <td>Adam</td>
         <td>858</td>
       </tr>
       <tr class="bg-emerald-200">
         <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
         <td>Adam</td>
         <td>112</td>
       </tr>
       <tr>
         <td>Intro to JavaScript</td>
         <td>Chris</td>
         <td>1,280</td>
       </tr>
     </tbody>
   </table>
   <table class="table-fixed">
     <thead>
       <tr>
         <th class="w-1/2 ...">Title</th>
         <th class="w-1/4 ...">Author</th>
         <th class="w-1/4 ...">Views</th>
       </tr>
     </thead>
     <tbody>
       <tr>
         <td>Intro to CSS</td>
         <td>Adam</td>
         <td>858</td>
       </tr>
       <tr class="bg-blue-200">
         <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
         <td>Adam</td>
         <td>112</td>
       </tr>
       <tr>
         <td>Intro to JavaScript</td>
         <td>Chris</td>
         <td>1,280</td>
       </tr>
     </tbody>
   </table>
   @endsection