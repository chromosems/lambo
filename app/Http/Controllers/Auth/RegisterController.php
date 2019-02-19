<?php

namespace App\Http\Controllers\Auth;

use Image;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_type'=>['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'contact'=>['required', 'string', 'max:20'],
            'location'=>['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'image_path' => ['sometimes','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'NIN'=> ['sometimes', 'string','max:20'],
            'NOK_name'=>['sometimes','string','max:255'],
            'NOK_contact'=>['sometimes', 'string', 'max:20'],
            'NOK_email'=>['sometimes', 'string', 'email', 'max:255'],
            'NOK_NIN'=>['sometimes', 'string','max:20'],
            'NOK_location'=>['sometimes','string', 'max:255'],
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $file = $request->file('image_path');

        event(new Registered($user = $this->create($request->all(), $file)));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data, $image)
    {
        $image_name = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(100,100,function ($constraint){
                $constraint->aspectRatio();
                })->save($destinationPath.'/'.$image_name);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $image_name);

        return User::create([    
            'user_type'=>$data['user_type'],
            'name' => $data['name'],
            'contact'=> $data['contact'],
            'location'=> $data['location'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'image_path' => $image_name,
            'NIN' => $data['NIN'],
            'NOK_name' => $data['NOK_name'],
            'NOK_contact' => $data['NOK_contact'],
            'NOK_email' => $data['NOK_email'],
            'NOK_NIN' => $data['NOK_NIN'],
            'NOK_location' => $data['NOK_location'],
        ]);
    }
}
