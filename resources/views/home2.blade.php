@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                   
                        @endif
                     
                     {{-- 
                        @foreach($users as $user) --}}
                           {{--  <p><img src="images/{{$user->image_path}}" alt=""></p> --}}
                            <p><img src="thumbnail/{{$user->image_path}}" alt=""></p>
                            <p>Thank you {{ $user->name }} for logging in!</p>    
                            <p>{{ $user->contact }}</p>
                            <p>{{ $user->location }}</p>
                            <p>{{ $user->email }}</p> 

                        {{-- @endforeach --}}
                    
                    
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection