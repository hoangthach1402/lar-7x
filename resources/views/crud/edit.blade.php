<h1>edit </h1>

<form action="{{ route('crud.update',$user->id) }}" method="post">
@csrf 
@method('patch')
<div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
     </ul>
   </div><br />
<h2>name</h2> <input type="text" name="name" value="{{$user->name}}">
<h2>email</h2> <input type="text"name="email" value="{{$user->email}}">
<h2>password</h2> <input type="text" name="password" value="{{$user->password}}">
<button type="submit" >submit</button>
</form>