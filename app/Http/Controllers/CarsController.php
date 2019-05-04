<?php

namespace App\Http\Controllers;

use App\car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'state_number'=>'required',
            'id_number'=>'required',
            'color'=>'required'
        ]);

        $car = new Car([
            'stateNumber' => $request->get('state_number'),
            'idNumber' => $request->get('id_number'),
            'color' => $request->get('color')
        ]);
        $car->save();
        return redirect('/cars')->with('success', 'Successfully saved!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'state_number'=>'required',
            'id_number'=>'required|digits_between:11,11|numeric',
            'color'=>'required'
        ]);

        $car = Car::find($id);
        $car->stateNumber =  $request->get('state_number');
        $car->idNumber = $request->get('id_number');
        $car->color = $request->get('color');
        $car->save();

        return redirect('/cars')->with('success', 'Successfully updated!');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect('/cars')->with('success', 'Successfully deleted!');
    }

}
