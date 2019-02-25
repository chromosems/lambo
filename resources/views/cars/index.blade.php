@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <h2>Listings</h2>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="container">
                        @foreach($cars as $cars)
                            <h3>
                                <center>Car Images Here</center>
                            </h3>
                            <h5>Car Name</h5> <a href="{{action('CarController@show',$cars->id)
                            }}"><h3>{{$cars->car_name}}</h3></a>

                            <br>
                            <h5>Amount</h5><h6>{{$cars->amount}}</h6>
                            <br>
                            <h5>Description</h5><h6>{{$cars->description}}</h6>
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

    {{--</div>--}}
    {{--</div>--}}

@endsection
