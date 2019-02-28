@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>404</h1><br>
                        <h2>Error</h2><br>
                        <h1>Main chick has been Notified <br>
                            please wait...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
