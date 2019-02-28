<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responnse
     */
    public function index()
    {
        $cars = Car::paginate(2);
        return view('cars.index', compact('cars'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
         * creates the registration form for cars
         */
        return view('cars.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        /*
         * inserting to the database
         */
        Car::create($request->all());
        return redirect('cars/create')->with('success', 'A new car has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }


    public function addPhoto($id, Request $request)
    {

        $file = $request->file('file');

        $name = time() . $file->getClientOriginalName();

        $file->move('uploads/photos', $name);

        $car = Car::find($id);

        $car->photos()->create(['path' => "/uploads/photos/{$name}"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
