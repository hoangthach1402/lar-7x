const app = Vue.createApp({
     template: '<h1> hello world </h1>';
});
app.mount('#app');

function myFunction() {
     document.getElementById("demo").innerHTML = "Paragraph changed!";
   }
