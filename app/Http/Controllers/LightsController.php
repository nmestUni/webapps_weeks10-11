<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Lightsname;

class LightsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lightnames = Lightsname::all();

        return view('lights.index', compact('lightnames'));
    }

    public function create()
    {
        return view('lights.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'address'=>'required',
            'cord_x'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'cord_y'=>'required|regex:/^\d+(\.\d{1,2})?$/'
        ]);

        $lightname = new Lightsname([
            'name' => $request->get('name'),
            'address' => $request->get('address')
        ]);
        $lightname->save();

        $location = new Location([
            'lightNameId' => $lightname->id,
            'coordinateX' => $request->get('cord_x'),
            'coordinateY' => $request->get('cord_y')
        ]);
        $location->save();
        return redirect('/lights')->with('success', 'Successfully saved!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $lightName = Lightsname::find($id);
        return view('lights.edit', compact('lightName'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required',
            'address'=>'required',
            'cord_x'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'cord_y'=>'required|regex:/^\d+(\.\d{1,2})?$/'
        ]);

        $lightname = Lightsname::find($id);
        $lightname->name =  $request->get('name');
        $lightname->address = $request->get('address');
        $lightname->save();

        $location = $lightname->location;
        $location->coordinateX = $request->get('cord_x');
        $location->coordinateY = $request->get('cord_y');
        $location->save();

        return redirect('/lights')->with('success', 'Successfully updated!');
    }

    public function destroy($id)
    {
        $lightname = Lightsname::find($id);
        $location = $lightname->location;
        $lightname->delete();
        $location->delete();

        return redirect('/lights')->with('success', 'Successfully deleted!');
    }

}
