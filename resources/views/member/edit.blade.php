<table>
    <tr><th>Id</th>
    <th>name</th>
    <th>email</th>
<th>password </th>
</tr>
    <tr><td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user ->email }}</td>
<td>{{ $user->password }}</td></tr>
</table>
<h1>Update </h1>
<form action="{{ route('member.update',$user->id) }}" method="post">
     @csrf 
     @method('patch')
  Name   <input value="{{$user->name}}" type="text" name="name"><br>
  Email <input value="{{$user->email}}" type="text>" name="email"><br>
  password <input value="{{$user->password}}" type="text" name="password"> <br>
  <button type="submit" >submit</button>   
</form>