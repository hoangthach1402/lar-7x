<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <div id="app"></div>

<p id="demo" onclick="myFunction()">Click me to change my HTML content (innerHTML).</p>
  
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="{{ asset('js/vue.js')}}"></script>
    <script>
         const app = Vue.createApp({
     template: '<h1> hello world </h1>';
});
app.mount('#app'); --}}
<script>
function myFunction() {
     document.getElementById("demo").innerHTML = "Paragraph changed!";
   }

    </script>
</body>
</html>