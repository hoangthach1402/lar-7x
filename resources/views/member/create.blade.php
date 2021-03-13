@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<form action="{{ route('member.store') }}" method="POST">
   @csrf
     <input type="text" name="name">Name
     <input type="text" name="id">id
     <input type="text" name="email">Email
     <input type="text" name="password">Password
     
     <button type="submit"> create </button>
