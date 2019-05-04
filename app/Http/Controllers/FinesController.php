<?php

namespace App\Http\Controllers;

use App\CarAtLight;
use Illuminate\Http\Request;
use App\Car;
use App\Lightsname;
use App\FineType;

class FinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carAtLights = CarAtLight::all();
        return view('fines.index', compact('carAtLights'));
    }

    public function create()
    {
        $cars = Car::all()->random(25);
        $lightnames = Lightsname::all()->random(25);

        for( $i = 0; $i<25; $i++ ) {
            $carAtLight = new CarAtLight([
                'carId' => $cars[$i]->id,
                'lightNameId' => $lightnames[$i]->id,
                'fineTypesId' => FineType::all()->random(1)[0]->id
            ]);
            $carAtLight->save();
        }

        return redirect('/fines')->with('success', 'Successfully saved!');
    }


}
