@extends('layouts.main')

@section('content')

@if(Session::has('message'))
    <p class="alert {{Session::get('alert-class','alert-info')}} mt-3">
       {{ Session::get('message') }}
    </p>
  @endif

<!--     <div style="margin-top:5px">
        <img style="width:100%; padding:10px" src="{{ asset('imgs/main.jpg') }}"/>
    </div> -->

<div class="container-lg" style="margin: 0 auto;">
  <div class="row mt-5 ms-5">     
  
    @foreach($cars as $car)

      <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo 'imgs/'.$car->image; ?>" style="width: 300px;"/>  
            <div class="card-body">
                <div class="card-title">{{ $car->make }}</div>
                <div class="card-text">{{ $car->model }} - {{ $car->year }}</div>
                <div class="card-text">Rent: price: ${{ $car->price }}</div>
                <div class="card-text">For: {{ $car->seats }}</div>
                <div class="card-text">Type: {{ $car->specs }}</div>

                <form method="post" action="{{ route('bookBike') }}">
                  @csrf
                  <input type="text" value="{{ $car->id }}" name="carId" style="display: none;"/>
                  <input type="text" value="{{ $car->model }}" name="carModel" style="display: none;"/> 
                  <input type="submit" value="Rent Bike" class="mt-2 btn btn-outline-primary"/>

                </form>
    
            </div>    
         </div>
      </div>
    @endforeach

  </div>
</div>





 
@endsection