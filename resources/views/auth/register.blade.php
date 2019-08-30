@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype = "multipart/form-data">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select id= "id_of_select" class="form-control" name="user_type" onchange="show_selected()">
                                    <option value="admin">Buyer</option>
                                    <option value="customer">Renter</option>
                                </select>

                                <div id="display"></div>

                                <script src="get_selected_option.js"></script>

                                @if ($errors->has('user_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('user_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                    display    <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        
                        <div id="for_customer">
                            <span>
                                <div class="form-group row">
                                    <label for="NIN" class="col-md-4 col-form-label text-md-right">
                                        {{ __('NIN') }}
                                    </label>

                                    <div class="col-md-6">
                                        <input id="NIN" type="text" class="form-control{{ $errors->has('NIN') ? ' is-invalid' : '' }}" name="NIN" value="{{ old('NIN') }}" {{-- required autofocus --}}>

                                        @if ($errors->has('NIN'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NIN') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
 
                                <div class="form-group row">
                                    <label for="NOK_name" class="col-md-4 col-form-label text-md-right">{{ __('NOK_Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="NOK_name" type="text" class="form-control{{ $errors->has('NOK_name') ? ' is-invalid' : '' }}" name="NOK_name" value="{{ old('NOK_name') }}"  {{-- required autofocus --}}>

                                         @if ($errors->has('NOK_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NOK_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>  

                                <div class="form-group row">
                                    <label for="NOK_contact" class="col-md-4 col-form-label text-md-right">{{ __('NOK_Contact') }}</label>

                                    <div class="col-md-6">
                                        <input id="NOK_contact" type="text" class="form-control{{ $errors->has('NOK_contact') ? ' is-invalid' : '' }}" name="NOK_contact" value="{{ old('NOK_contact') }}" {{--  required autofocus --}} >

                                        @if ($errors->has('NOK_contact'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NOK_contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                             
                                 <div class="form-group row">
                                    <label for="NOK_email" class="col-md-4 col-form-label text-md-right">{{ __('NOK_Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="NOK_email" type="text" class="form-control{{ $errors->has('NOK_email') ? ' is-invalid' : '' }}" name="NOK_email" value="{{ old('NOK_email') }}" {{-- required autofocus --}}>

                                        @if ($errors->has('NOK_email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NOK_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label for="NOK_NIN" class="col-md-4 col-form-label text-md-right">{{ __('NOK_NIN') }}</label>

                                    <div class="col-md-6">
                                        <input id="NOK_NIN" type="text" class="form-control{{ $errors->has('NOK_NIN') ? ' is-invalid' : '' }}" name="NOK_NIN" value="{{ old('NOK_NIN') }}" {{--  required autofocus --}}>


                                        @if ($errors->has('NOK_NIN'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NOK_NIN') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="NOK_location" class="col-md-4 col-form-label text-md-right">{{ __('NOK_Location') }}</label>

                                    <div class="col-md-6">
                                        <input id="NOK_location" type="text" class="form-control{{ $errors->has('NOK_location') ? ' is-invalid' : '' }}" name="NOK_location" value="{{ old('NOK_location') }}" {{-- required autofocus --}}>

                                         @if ($errors->has('NOK_location'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NOK_location') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image_path">Profile Picture:</label>
                                    
                                    <div class="col-md-6">
                                         <input type="file" class="image" id="image_path" name="image_path">

                                    </div>
                                   
                                </div

                            </span>
                        </div>
 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript">
    function show_selected() {
        
        var selector = document.getElementById('id_of_select');
        var value = selector[selector.selectedIndex].value;

        if (value == 'admin') {
            document.getElementById('for_customer').style.display = 'none';
        } else {
            document.getElementById('for_customer').style.display = 'block';            
        }
    }
</script>
