<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class carsController extends Controller
{
    //
    public function getCars(){
        $allCars=Cars::all();
        
        return response()->json($allCars,200);
    }
    public function getCarById($id){
        $car=Cars::find($id);
        return response()->json($car,200);
    }
    public function createCar(Request $request){
        $newCar=Cars::create($request->all());
        return response()->json($newCar,200);
    }
    public function updateCar(Request $request,$id){
        $carForUpdate=Cars::find($id);
        $carUpdated=$carForUpdate->update($request->all());
        return response()->json($carUpdated,200);
    }
    public function updateBrand(Request $request,$id){
        $car=Cars::find($id);
        $car->brand=$request->brand;
        $car->save();
        return response()->json($car,200);
    }
}
