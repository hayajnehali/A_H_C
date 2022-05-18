@extends("./navbarANDfOTER/NAVfoter")

@section("contant")
<div class="first_page" >

 <div class="con_div">
    <div>

        <h1>Fast & Easy Way To Rent A Car</h1>
        <h2>Welcome to <samp style="color:#b76f10; font-family:cursive">A-H-C</samp>  Car Rental</h2>
        <h3 style="font-family: cursive">Ali M Hayajneh</h3>
    </div>

    <div class="search">
     <input type="search"   name="search" id="" placeholder="       Search">
    </div>
 </div>


</div>
  <div class="container" style="background-color: whitesmoke;">
      <div class="mb-15px row " style="background-color: black; id="ali">
        @foreach ($cars as $car)
          <div class="col-12 col-md-4 col-sm-12 colum" style="padding-top: 15px;">



            <div class="card" id="firstimg";   style="width: 90%;border-radius: 44px 2px;border: 3px solid #fbb710;">

                @php
                $a = $car->img ;
                    $image = explode('|' , $a );
                    $firstimage = $image[0];
                    $aa = count($image);
                @endphp
                 <img class="card-img-top" style="height: 300px; border-radius: inherit;"
                 src="img/{{$image[0]}}"  >



                <div class="card-body" >
                  <h5 class="card-title">Car {{$car->car_type_name}}</h5>
                  <p class="card-text" style="overflow: hidden;height: 77px; opacity: 0.75;">{{$car->description}}</p>
                  <h5 class="card-title">Fare price per day: <span style="font-size: x-large;color: #515354;">$ {{$car->price}}</span>  JD</h5>
                </div>
<!--
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            -->
                <div class="card-body x" >
                 <!-- <a href="#" class="card-link">Rent</a>-->
                  <!--<button type=" class=" but" value=""> <a href="#" class="card-link"></a>Rent</button>-->
                  <form action="{{url('carid')}}" class="xx">

                        <button class=" but" type="submit" name="but" value =" {{$car ->car_id}} ">Rent</button>

                  </form>
                </div>
              </div>

          </div>
          <hr>
          @endforeach

      </div>
      {{ $cars->links() }}
  </div>

@endsection

