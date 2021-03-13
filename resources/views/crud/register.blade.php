<h1>app</h1>
<form action="{{ route('crud.store') }}" method="post">
     @csrf
     @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif 
Name <input type="text" name="name">
Email <input type="text" name="email">
Password <input type="text" name="password">
<button type="submit">submit</button>
</form>