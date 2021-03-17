@extends('layouts.app')
@section('content')
<!--Section: Block Content-->
<section>

     <!--Carousel Wrapper-->
     <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
       <!--Indicators-->
       <ol class="carousel-indicators">
         <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-2" data-slide-to="1"></li>
         <li data-target="#carousel-example-2" data-slide-to="2"></li>
       </ol>
       <!--/Indicators-->
       <!--Slides-->
       <div class="carousel-inner" role="listbox">
         <div class="carousel-item active">
           <div class="view">
             <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/clothes(5)-crop.jpg"
               alt="First slide">
             <a href="#!">
               <div class="mask rgba-black-light"></div>
             </a>
           </div>
           <div class="carousel-caption">
             <h3 class="h3-responsive">First shop item</h3>
             <p>First text</p>
           </div>
         </div>
         <div class="carousel-item">
           <!--Mask color-->
           <div class="view">
             <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/clothes(4)-crop.jpg"
               alt="Second slide">
             <a href="#!">
               <div class="mask rgba-black-light"></div>
             </a>
           </div>
           <div class="carousel-caption">
             <h3 class="h3-responsive">Second shop item</h3>
             <p>Secondary text</p>
           </div>
         </div>
         <div class="carousel-item">
           <!--Mask color-->
           <div class="view">
             <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/clothes(3)-crop.jpg"
               alt="Third slide">
             <a href="#!">
               <div class="mask rgba-black-light"></div>
             </a>
           </div>
           <div class="carousel-caption">
             <h3 class="h3-responsive">Third shop item</h3>
             <p>Third text</p>
           </div>
         </div>
       </div>
       <!--/Slides-->
       <!--Controls-->
       <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
       <!--/Controls-->
     </div>
     <!--/Carousel Wrapper-->
   
   </section>
   <!--Section: Block Content-->
   <!--Carousel Wrapper-->

<!--/.Carousel Wrapper-->
<section>

  <!--Carousel Wrapper-->
  <div class="container">
  <div class=" d-flex flex-wrap justify-content-between">
    <div class="col-4 "><div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div></div>
    <div class="col-4 "><div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div></div>
    <div class="col-4 "><div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://picsum.photos/id/237/200/300" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div></div>
  </div>
  

    
  
  </div>

   


 
@endsection