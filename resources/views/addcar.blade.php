@extends("./navbarANDfOTER/NAVfoter")

@section("contant")

  <div class="container">


        <div  class="row form_add_car">
            <div style="width: 99%;display: flex;">
            <div class="col-md-5 add_logo">
             <!--<img src="img/logo_200x200.png" alt="" srcset="">-->
            </div>
            <form class="col-md-6" action="{{url('/insert')}}" method="POST" enctype="multipart/form-data" >

                @csrf
                <div class="form-group row">

                  <div class="col-sm-10">
                    <input type="text" name="desc"  class="form-control form-control-sm" id="colFormLabelSm" placeholder="descreption">
                  </div>
                </div>
                <div class="form-group row">

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" id="colFormLabel" placeholder="price">
                  </div>
                </div>
                <div class="form-group row">

                  <div class="col-sm-10">
                    <input type="file" class="form-control form-control-lg" name="img" id="colFormLabelLg" placeholder="Photo">
                  </div>
                </div>

                <div class="form-group row">

                    <div class="col-sm-10">
                            <select name="type_id" class="form-control form-control-lg" id="colFormLabelLg">
                                  <option value="">choosen...</option>
                                @foreach ($car_type as $a)
                                   <option value="{{$a->type_id}}">{{$a->car_type_name}} </option>
                                @endforeach
                            </select>
                    </div>

                  </div>

                  <div class="form-group row">

                    <div class="col-sm-10">
                        <input type="submit" value="ali"  class="form-control form-control-lg bg-danger">
                    </div>
                  </div>


              </form>



        </div></div>

  </div>


@endsection
