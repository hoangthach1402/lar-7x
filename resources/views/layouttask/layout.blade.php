<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <style>
   .pagination a {
  border-radius: 5px;
}

.pagination a.active {
  border-radius: 5px;
}
.pagination li  {
  display: inline;
  padding:20px; 
}

.pagination a.active {
  border-radius: 5px;
}
     </style>
     <title>Document</title>
</head>
<body>
    <div><ul class="flex flex-row">
         <li>1</li>
         <li>2</li>
         <li>4</li>
    </ul></div>
     <div class="container">
          @yield('header')
          @yield('sidebar')

          @yield('content')
          @yield('footer')
</div>
</body>
</html>