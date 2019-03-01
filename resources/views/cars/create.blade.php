@extends('layouts.app')

@section('content')

    <div class="container">
            <h3>Add Cars</h3>

    <div class="col-md-12">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif

        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br/>
        @endif
            <div class="ccol-sm-6 text-right">
        <a href="{{route('cars.index')}}">
            <button type="button" class="btn btn-primary btn-sl m-3">View Cars</button>
        </a>
            </div>

        <div class="card">
            <div class="card-body">

            <div class="col-md-12">

                <div class="container">
                    <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fuel Type</label>
                                        <select class="custom-select" name="fuel">
                                            <option value="petrol">Petrol</option>
                                            <option value="petrol">Diesel</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Car name</label>
                                        <input type="text" name="car_name" class="form-control"
                                               placeholder="car name">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="form-group">
                            <label>Transmission</label>
                            <select class="custom-select" name="transmission">
                                <option class="Automatic">Automatic</option>
                                <option class="Manual">Manual</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Wheel Drive</label>
                                        <select class="custom-select" name="wheel_drive">
                                            <option value="2WD">2WD</option>
                                            <option value="4WD">4WD</option>
                                            <option value="full time">full time</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Wheel Position</label>
                                        <select class="custom-select" name="wheel_position">
                                            <option value="right">Right</option>
                                            <option value="left">Left</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Car Model</label><br>
                            <select id="models" name="model" class="form-control">
                                @foreach(\App\Http\type\type::all() as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Make</label><br>
                            <select id="make" name="make" class="form-control">
                                @foreach(App\Http\make\make::all() as $makes)
                                    <option value="{{$makes}}">{{$makes}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Year</label><br>
                            <input type="text" name="year" class="form-control" placeholder="year">
                        </div>

                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="cost">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" name="description" id="description" class="form-control" rows="8"
                                      cols="20" ;></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
