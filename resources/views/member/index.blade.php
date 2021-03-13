  
  </button><a href="{{ route('member.create') }}"> Create</a> <br>
  <button>
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


     <td><a href="{{ route('member.edit',$m) }}">Edit</a>
          <form action="{{ route('member.destroy',$m) }}" method="post">
              @csrf 
              @method('delete')
             
               <button type="submit">Delete</button>
          </form>
       
         

</td>
</tr>
</table>
@endforeach
{!! $member->links() !!}
{{-- {{ $paginator->links('member') }} --}}