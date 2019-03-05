@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-success " type="button">Buy this Car</button>
            </div>
            <div class="col-sm-6 text-right">
                <button class="btn btn-info text-right" type="button">Rent this car</button>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        @foreach($car->photos as $photo)
                            <img src="{{$photo->path}}" alt="" width="300px">
                        @endforeach
                    </div>

                    <div class="col-sm-8">
                        <center><h4>Car Details</h4></center>
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
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <button href="{{route('cars.edit',$car->id)}}" class="btn btn-primary">Edit</button>
                    </div>
                    <div class="ml-auto">
                        <button href="#" class="btn btn-danger btn-sl m-3">Delete</button>
                    </div>
                </div>
            </div>
            <br>
        </div>


        <br>
        <form id="addPhotosForm" action="/cars/{{$car->id}}/photos" method="POST" class="dropzone"
              enctype="multipart/form-data">
            @csrf

        </form>
    </div>
@endsection

@section('script.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    {{--<script>--}}
    {{--Dropezone.options.addPhotosForm = {--}}
    {{--paramName: 'photos',--}}
    {{--maxFilesize: 3,--}}
    {{--acceptedFiles: '.jpg, .jpeg, .png, .bmp '--}}
    {{--}--}}
    {{--</script>--}}
@endsection

