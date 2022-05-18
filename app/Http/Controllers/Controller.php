<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\models\MultipelImage;
use Illuminate\Http\Request;
use App\Models\Car as ModelsCar;
use App\Models\Car_type;
use PhpParser\Node\Expr\BinaryOp\NotEqual;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showcar(){
      //  $cars = ModelsCar::paginate(1);
      //  return view("index" , compact("cars")) ;
      $cars = DB::table('Cars')
            ->join('Car_types', 'Cars.type_id', '=', 'Car_types.type_id')
            ->select('Cars.*', 'Car_types.car_type_name')
            ->paginate(5);;

        return view("index" , compact("cars")) ;

    }

    public function showcarr(){
        //  $cars = ModelsCar::paginate(1);
        //  return view("index" , compact("cars")) ;
        $carsr = DB::table('Cars')
              ->join('Car_types', 'Cars.type_id', '=', 'Car_types.type_id')
              ->select('Cars.*', 'Car_types.car_type_name')
              ->get();
              $car_type = Car_type::all();
              // return view('addcar' ,compact('car_type'));
              //return view('dashboard' ,compact('car_type'));
        return view("dashboard" , compact("carsr") ,compact('car_type')) ;

    }

    public function showcarid(){
        //  $cars = ModelsCar::paginate(1);
        //  return view("index" , compact("cars")) ;
        $value = request('but');

        $cars = DB::table('Cars')
              ->join('Car_types', 'Cars.type_id', '=', 'Car_types.type_id')
              ->select('Cars.*', 'Car_types.car_type_name')
              ->where('car_id' , '=', $value )
              ->paginate(1);
        return view("carid" , compact("cars")) ;

    }

    public function addcar(){
      $car_type = Car_type::all();
     // return view('addcar' ,compact('car_type'));
     return view('dashboard' ,compact('car_type'));
    }
    //file photo



    public function insert(request $req){

        /*
        $f_e= request('img')->getclientOriginalExtension();
        $f_n = time().''.$a;
        $path= "img";
         //request('img')
         $f_e->move($path,$f_n);
         $image[] = $f_e;
        */
       //  $insert->img = request('img')->move($path,$f_n);

       $req->validate([
           'price'=>'numeric'
       ]);


       $insert = new ModelsCar;
       $img = [];
        foreach($req->file('img') as $image){
        $imageName =time().rand(1000,10000).'.'.$image->Extension();
        $path= "img";
        $image->move($path,$imageName);
        $img[]=$imageName;
        }

        $insert->img = implode('|',$img);
        $insert->description = request('desc');
        $insert->price = request('price');
        $insert->type_id = request('type_id');
        $insert->save();
        //return redirect('dashboard');

    }

    //edit car form
    public function edit($id){

        $car_type = Car_type::all();
        $cars = DB::table('Cars')
        ->join('Car_types', 'Cars.type_id', '=', 'Car_types.type_id')
        ->select('Cars.*', 'Car_types.car_type_name')
        ->where('Cars.car_id', '=', $id)
        ->paginate(2);;
    return view('edit' , compact("cars","car_type")) ;
   }

   public function delete($d){
        DB::table('Cars')->where('car_id', '=', $d)->delete();
    return redirect('dashboard');
   }


    public function update($car_id){
        $insert =  ModelsCar::find($car_id);

        if(request('img') <> null) {
        $f_e = request('img')->getclientOriginalExtension();
        $f_n = time().''.$f_e;
        $path= "img";
        $insert->img = request('img')->move($path,$f_n);
        };
       // $insert->car_id = '2';
        $insert->description = request('desc');
        $insert->price = request('price');
        $insert->type_id = request('type_id');
        $insert->save();





        return redirect('index');
    }






}
