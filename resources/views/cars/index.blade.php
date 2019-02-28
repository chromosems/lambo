@extends('layouts.app')

@section('content')


<div class="container">
    <?php echo $cars->render();?>
    <div class="card">
       <div class="card-body">
           <div class="row">
               <div class="col-sm-6">
                   @foreach($cars as $car)
                       <h5>Car Name</h5> <a href="{{action('CarController@show',$car->id)
                       }}"><h3>{{$car->car_name}}</h3></a>
                       @if (count($car->photos) > 0)
                       <img src="{{asset($car->photos->first()->path) }}" alt="" width="400px"/>
                       @else
                       <img src="{{asset('uploads/home.jpeg')}}" alt="" width="200px"/>
                       @endif
                       <br>
                       <h5>Amount</h5><h2>{{$car->amount}}</h2>
                       <br>
                       <h5>Description</h5><h6>{{$car->description}}</h6>
               </div>

               <div class="col-sm-6">
                   @endforeach
               </div>
           </div>
       </div>
   </div>
    <br>
        <?php echo $cars->render();?>

</div>


@endsection
