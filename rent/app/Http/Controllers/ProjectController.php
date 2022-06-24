<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Visit;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    //

    public function getData(Request $request){
        $data = "";
        return view('index',['key'=>$data]);
    }

    public function getCars(Request $request){

        $cars = Car::all();
        return view('index',['cars'=>$cars]);
    }

    public function bookBike(Request $request){

        $carId = $request->input('carId');
        $carModel = $request->input('carModel');
        return view('bookBike',['carId'=>$carId, 'carModel'=>$carModel]);
    }

    public function bookNow(Request $request)
    {
        $fullname = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $day = $request->input('day');
        $time = $request->input('time');
        $carId = $request->input('carId');
        $carModel = $request->input('carModel');

        $visit = new Visit;

        $visit->car_id = $carId;
        $visit->car_model = $carModel;
        $visit->customer_name = $fullname;
        $visit->customer_phone = $phone;
        $visit->customer_email = $email;
        $visit->day = $day;
        $visit->time = $time;

        $saved = $visit->save();

        if($saved){
            Session::flash('message','You booked bike successfully. We will contact you for further info');
            Session::flash('alert-class','alert-success');
   
          }else{
             Session::flash('message','Something went wrong, please try again later.');
             Session::flash('alert-class','alert-danger'); 
          }

        return \redirect('/');

    }
}
