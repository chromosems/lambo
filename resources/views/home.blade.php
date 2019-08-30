@extends('layouts.app')

@section('content')

<div class="container">
    {{-- <div class="jumbotron p-3 p-md-5 text-blue rounded" style="background-image:url(/images/car.jpeg); background-size: 90%;">
        <div class="col-md-6 px-0">
           
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div> --}}

        {{-- slides only --}}
    <div class="jumbotron p-3 p-md-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/car.jpeg" alt="First slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/new.jpeg" alt="Second slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/used.jpeg" alt="Third slide">
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/b.jpeg" alt="Fourth slide">
                    
                </div>
                
            </div>
              {{--   With Controls  --}}

             <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"> Next</span>
            </a>
            
        </div> 
    </div>  

    

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                        
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                   
                        @endif
                           {{--  <p><img src="images/{{$user->image_path}}" alt=""></p> --}}
                            <p><img src="thumbnail/{{$user->image_path}}" alt=""></p>
                            <p>Thank you {{ $user->name }} for logging in!</p>    
                            <p>{{ $user->contact }}</p>
                            <p>{{ $user->location }}</p>
                            <p>{{ $user->email }}</p> 

                </div>
            </div>
        </div>
        
        <div class="content">
            {{-- <div class="container fluid"> --}}
                <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Statistics</div>
                             <div class="card-body ">
                               {{--  <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div> --}}
                            </div>
                           

                           {{--  <div class="app">
                                {!! $chart->container() !!}
                                
                            </div>
                            <script src="https://unpkg.com/chart"></script>
                            <script>
                                var app = new Chart({ e1: '#app',});
                            </script>

                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

                            {!! $chart->script() !!}
                             --}}
                             <div id="app1">
                                 {{-- {{ message }} --}}
                             </div>
                        
                    </div>
                </div>
            </div>
       {{--  </div> --}}
    </div>
</div>
@endsection