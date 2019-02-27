@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h2>Listings</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="container">
                        @foreach($cars as $car)

                            <h5>Car Name</h5> <a href="{{action('CarController@show',$car->id)
                            }}"><h3>{{$car->car_name}}</h3></a>

                            @if (count($car->photos) > 0)
                                <img src="{{asset($car->photos->first()->path) }}" alt="" width="400px"/>
                            @else
                                <img src="{{asset('uploads/home.jpeg')}}" alt="" width="200px"/>
                            @endif
                            <br>
                            <h5>Amount</h5><h6>{{$car->amount}}</h6>
                            <br>
                            <h5>Description</h5><h6>{{$car->description}}</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card">
                    <div class="container">

                        @endforeach()
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
