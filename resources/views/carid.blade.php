@extends("./navbarANDfOTER/NAVfoter")

@section("contant")
<div class="container " style="padding-top: 70px">

    @foreach ($cars as $car)


    <div class="row" style="border: 1px solid black;border-radius: 5px ;background-color: #f1f1f1;">
        <div class="col-md-6 col-sm-12">
          <div class="row">
              @php
                  $img = explode('|',$car->img);

              @endphp
                <div class="col-12  bg-white" style="padding-right: 0">
                    <div style="height: 65vh" >
                        <img src= "img/{{$img[0]}}" id="bigimg" style="width: 100%;height: 100%">
                    </div>
                </div>
                @foreach ($img as $item)


                <div class="col-3 bg-white pt-1" style="padding-right: 0">
                    <img src="img/{{$item}}" style="width: 100%;height: 100%" onclick="fun(this)">
                </div>
                @endforeach
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="mt-4">
                <h2>{{$car->car_type_name}}</h2>
            </div>
            <div class="mt-4">
              <p>
                {{$car->description}}
              </p>
            </div>
            <div class="mt-4">
                <h4>For Each Day : ${{$car->price}}</h4>
            </div>
            <div class="mt-1 mb-0 text-muted small">
                <span class="text-primary"> • </span>
                <span style="color: black;">Control the recorder through the steering wheel</span>
                <br><hr>
                <span class="text-black"> • </span>
                <span style="color: black;">Light weight</span>

                <br>
                <hr>
                <span class="text-primary"> • </span>
                <span style="color: black;">Best finish<br /></span>
            </div>
            <div class="my-5" style="display: flex;justify-content: center;">
                <button class="btn w-75 justify-content-center" style="background-color: #fbb710">
                    Rant
                </button>
            </div>

        </div>
    </div>
    @endforeach
</div>
@endsection

