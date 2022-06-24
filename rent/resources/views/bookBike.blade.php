@extends('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
  <div class="row mt-5"> 
      
  <h3 class="text-center mb-3">Rent a Bike</h3>
  
  <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-3">
          <div class="card" style="display: block; height:100%" >
            <img style="width: 50%; float:left;" src="{{ asset('imgs/main.jpg') }}"  />  
            <div class="card-body">
                <h4 class="card-title">Book Bike</h4>
                <div class="card-text"> </div>

                <form method="POST" action="{{ route('bookNow') }}">
                    @csrf
                    <h5>The bike that you want to rent is {{ $carModel }}</h5>
                    <p></p>

                    <input type="text" name="carId" value="{{$carId}}" style="display: none;"/>
                    <input type="text" name="carModel" value="{{$carModel}}" style="display: none;"/>

                    <div class="mt-3">
                        <label>Type your fullname</label>
                        <input type="text" name="name" placeholder="fullname" required/>
                    </div>

                    <div class="mt-3">
                        <label>Your phone number</label>
                        <input type="number" name="phone" placeholder="phone number" required/>
                    </div>

                    <div class="mt-3">
                        <label>Your email address</label>
                        <input type="email" name="email" placeholder="email address" required/>
                    </div>

                    <div class="mt-3">
                        <label>Select your prefered day</label>
                        <select name="day" required>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                        </select>
                    </div>
                    
                    <div class="mt-3">
                        <label>Select your prefered time</label>
                        <select name="time" required>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>

                    <div class="mt-3">
                        <input class="btn btn-outline-primary" type="submit" value="Book"/>
                        <a class="btn btn-outline-primary" aria-current="page" href="{{ route('home') }}">Back</a>
                    </div>

                </form>
                
            </div>    
         </div>
      </div>

  </div>
</div>


<div class="container-lg" style="margin: 0 auto;">

   <h3 class="text-center">Check our bikes</h3>
   <p class="text-center">Any bike you want is available, we have lots of bikes.</p>


  <div class="row mt-5 ">     
  

      <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
          <div class="card" >
            <img src="{{ asset('imgs/1.jpeg')}}" />  
            <div class="card-body">
                <h4 class="card-title">Cube</h4>
                <div class="card-text">Race One</div>
                <div class="card-text">MTB</div>
                <div class="card-text">Intermediate</div>
            
            </div>    
         </div>
      </div>


      <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
          <div class="card" >
            <img src="{{ asset('imgs/2.jpeg')}}"/>  
            <div class="card-body">
                <h4 class="card-title">Cube</h4>
                <div class="card-text">Reaction </div>
                <div class="card-text">MTB</div>
                <div class="card-text">Intermediate</div>
            
            </div>    
         </div>
      </div>


      <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
          <div class="card" >
            <img src="{{ asset('imgs/5.jpeg')}}"/>  
            <div class="card-body">
                <h4 class="card-title">Haikike</h4>
                <div class="card-text">HardSeven</div>
                <div class="card-text">MTB - electric</div>
                <div class="card-text">Beginner</div>
            
            </div>    
         </div>
      </div>


      <div class="col-lg-6 col-md-6 col-sm-12 text-center mb-3">
          <div class="card" >
            <img src="{{ asset('imgs/6.jpeg')}}"/>  
            <div class="card-body">
                <h4 class="card-title">Haibike</h4>
                <div class="card-text">Hard Nine</div>
                <div class="card-text">MTB - electric</div>
                <div class="card-text">Beginner</div>

            </div>    
         </div>
      </div>

  </div>
</div>

@endsection