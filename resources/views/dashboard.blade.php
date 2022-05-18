
@extends("./navbarANDfOTER/NAVfoter")
@section("contant")

<div style="padding-top: 4rem">
  <hr>
</div>

<x-app-layout name="header">
    <x-slot name="header" class="dash">




    </x-slot>
    <div class="row py-12">
        <!--star show control-->
            <div class="col-md-3 col-sm-12 " style="display: flex; flex-direction:column ;background-color: #1c2331; height: 60vh;eight: 22rem;
                margin-left: 53px;
                border-radius: 5px;">

                <div class="btn bg-white mt-5" onclick="showadd()">Addcar</div>
                <div class="btn bg-danger mt-5" onclick="showcar()">Customer Page</div>
                <div class="btn bg-white mt-5">rented cars</div>
            </div>
        <!--end show control-->




        <div class="col-md-8 col-sm-12   sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">

                <!--star show car-->
                    <div class=" bg-white border-b border-gray-200 " id='showcar'>
                        @foreach ($carsr as $car)
                            <section style="background-color: #eee;">
                                                <div class="container py-3">
                                                <div class="row justify-content-center mb-1 pt-1">
                                                    <div class="col-md-12 col-xl-10">
                                                    <div class="card shadow-0 border rounded-3">
                                                        <div class="card-body" style="height: 143px;">
                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                                            <div class="bg-image hover-zoom ripple rounded ripple-surface" style="height: 89px;">
                                                                @php

                                                                    $img =explode('|' , $car->img)

                                                                @endphp
                                                                <img src="img/{{$img[0]}}"
                                                                class="w-100 h-100" />
                                                                <a href="#!">
                                                                <div class="hover-overlay">
                                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                                </div>
                                                                </a>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6 col-xl-6">
                                                            <h5>{{$car->car_type_name}}</h5>
                                                            <div class="d-flex flex-row">

                                                                <div class="text-danger mb-1 me-2">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                </div>
                                                                <span>310</span>

                                                            </div>
                                                            <div class="mt-1 mb-0 text-muted small">
                                                               <!-- <span>100% cotton</span>
                                                                <span class="text-primary"> • </span>
                                                                <span>Light weight</span>
                                                                <span class="text-primary"> • </span>
                                                                <span>Best finish<br /></span>
                                                               -->
                                                            </div>
                                                            <!-- <div class="mb-2 text-muted small">
                                                                <span>Unique design</span>
                                                                <span class="text-primary"> • </span>
                                                                <span>For men</span>
                                                                <span class="text-primary"> • </span>
                                                                <span>Casual<br /></span>
                                                            </div>
                                                            -->
                                                            <p class="text-truncate mb-4 mb-md-0">
                                                             {{$car->description}}
                                                            </p>
                                                            </div>
                                                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                                            <div class="d-flex flex-row align-items-center mb-1">
                                                                <h4 class="mb-1 me-1">$ {{$car->price}}</h4>
                                                            </div>

                                                            <div class="d-flex flex-column mt-4">
                                                                <button class="btn btn-outline-primary btn-sm" type="button"><a class="" href= {{url('car/delete/'. $car->car_id ) }} >Delete</a></button>
                                                                <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                                                                    <a class="" href= {{url('car/'. $car->car_id ) }} >Edit</a>

                                                                </button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            </section>
                                            @endforeach
                    </div>

                <!--end show car-->

                <!--add car-->
                    <div id="showadd" style="height: 95vh">

                        <div  class="row form_add_car">
                            <div style="width: 96%;display: flex;">
                                <div class="col-md-5 add_logo">
                                <!--<img src="img/logo_200x200.png" alt="" srcset="">-->
                                </div>
                                <form class="col-md-7" action="{{url('/insert')}}" method="POST" enctype="multipart/form-data" >

                                    @csrf
                                    <div class=" row">

                                    <div class="col-sm-10">
                                        <input type="text" name="desc" required  class="form-control form-control-sm" id="colFormLabelSm" placeholder="descreption">
                                    </div>
                                    </div>
                                    <div class=" row">

                                    <div class="col-sm-10">
                                        @error('price')
                                            <span>{{$message}}</span>
                                        @enderror
                                        <input type="text" required class="form-control" name="price" id="colFormLabel" placeholder="price">

                                    </div>
                                    </div>
                                    <div class="row">

                                    <div class="col-sm-10">
                                        <input type="file" required class="form-control form-control-lg" name="img[]" multiple id="colFormLabelLg" placeholder="Photo">
                                    </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-10">
                                                <select name="type_id" class="form-control form-control-lg" id="colFormLabelLg">
                                                    <option value="">choosen...</option>
                                                    @foreach ($car_type as $a)
                                                    <option value="{{$a->type_id}}">{{$a->car_type_name}} </option>
                                                    @endforeach
                                                </select>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-sm-10">
                                            <input type="submit" value="Add"  class="form-control form-control-lg bg-danger">
                                        </div>
                                    </div>


                                </form>
                           </div>
                        </div>
                    </div>
                <!--end add car-->
            </div>
        </div>
    </div>

</x-app-layout>

 @endsection
