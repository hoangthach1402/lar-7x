<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
     <title>Document</title>
</head>
<body>
     <div class="container">
          <h1>call layout</h1>
          @yield('header')
     @yield('side')
     @yield('content')
     @yield('footer')
</div>
</body>
</html>