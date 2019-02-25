@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <h4>car photo</h4>
                    <div class="card">

                    </div>
                </div>

                <div class="col-sm-6">
                    <center><h4>Car Details</h4></center>
                    <div class="card">
                        <div class="col-md-12">
                            <h5>Car Name</h5> <h6>{{$cars->car_name}}</h6><br>
                            <br>
                            <h5>Amount</h5> <h6>{{$cars->amount}}</h6>

                            <h5>Transmission</h5>
                            {{$cars->transmission}}<br>

                            <br>

                            <h5>wheel Drive</h5>
                            {{$cars->wheel_drive}}<br>


                            <br>

                            <h5>Wheel Position</h5>
                            {{$cars->wheel_position}}<br>

                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <br>
                    <hr>
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="container">
                                <h5> make</h5>
                                {{$cars->make}}<br>
                                <br>
                                <h5> Model</h5>
                                {{$cars->model}}<br>
                                <br>
                                <h5>Fuel</h5>
                                {{$cars->fuel}}
                                <br>
                                <h5>Year</h5>
                                {{$cars->year}}<br>

                                <h5>Description</h5>
                                {{$cars->description}}


                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <center>
                <form id="addPhotosForm" action="/{{$cars->id}}/photos" method="POST" class="dropzone">

                    @csrf
                </form>
            </center>
        </div>
    </div>

@endsection
