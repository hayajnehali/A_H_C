@extends("./navbarANDfOTER/NAVfoter")

@section("contant")

  <div class="container  row p-5 mt-6 justify-content-center">


    @foreach ($cars as $cars)

        <div class="p-5 m-5 bg-danger col-6">
            <form action="{{'/car/' .$cars->car_id }}" method="POST" enctype="multipart/form-data" class="py-5">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">descreption"></label>
                    <div class="col-sm-10">
                        <input type="text-aria" name="desc" value="{{$cars->description}}"  class="form-control form-control-sm" id="colFormLabelSm" placeholder="descreption">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" value="{{$cars->price}}" id="colFormLabel" placeholder="price">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Photo</label>
                    <div class="col-sm-10">
                        <input type="file" value="{{$cars->img}}" class="form-control form-control-lg" name="img" id="colFormLabelLg" placeholder="Photo">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Car Type</label>
                        <div class="col-sm-10">
                                <select name="type_id" class="form-control form-control-lg" id="colFormLabelLg">
                                    <option value="{{$cars->type_id}}">{{$cars->car_type_name}}</option>

                                    @foreach ($car_type as $a)
                                    <option value="{{$a->type_id}}">{{$a->car_type_name}} </option>
                                    @endforeach

                                </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"></label>
                        <div class="col-sm-10">
                            <input type="submit" value="ali"  class="form-control form-control-lg bg-danger">
                        </div>
                    </div>


            </form>
        </div>
      @endforeach
  </div>


@endsection
