@extends('layouts.app')

@section('content')
    <div class="container">
        {{--<div class="col-sm-12">--}}
        <div class="row">
            <div class="col-sm-6">
                <center><h4>Car Details</h4></center>
                <div class="card">
                    <div class="col-md-12">
                        <h5>Car Name</h5> <h6>{{$car->car_name}}</h6><br>
                        <br>
                        <h5>Amount</h5> <h6>{{$car->amount}}</h6>

                        <h5>Transmission</h5>
                        {{$car->transmission}}<br>

                        <br>

                        <h5>wheel Drive</h5>
                        {{$car->wheel_drive}}<br>


                        <br>

                        <h5>Wheel Position</h5>
                        {{$car->wheel_position}}<br>

                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <br>
            <hr>
            <div class="col-sm-10">
                <div class="card">
                    <div class="container">
                        <h5> make</h5>
                        {{$car->make}}<br>
                        <br>
                        <h5> Model</h5>
                        {{$car->model}}<br>
                        <br>
                        <h5>Fuel</h5>
                        {{$car->fuel}}
                        <br>
                        <h5>Year</h5>
                        {{$car->year}}<br>

                        <h5>Description</h5>
                        {{$car->description}}


                    </div>
                </div>
            </div>


        </div>
        <br>

        <form action="/{{$car->id}}/photos" method="POST" class="dropzone" enctype="multipart/form-data"
              id="my-awesome-dropzone">
            @csrf
            {{--<input type="file" name="file" />--}}

        </form>
    </div>

@endsection

@section('script.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
@endsection

