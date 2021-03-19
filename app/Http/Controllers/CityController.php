<?php

namespace App\Http\Controllers;

use App\Models\Cities;
// use Illuminate\Http\Request;

class CityController extends Controller
{
    public function showAllCity()
    {
        // $City = New City();
        // return $City;
        return response()->json(cities::all());
    }

    public function showOneCity($id)
    {
        return response()->json(cities::find($id));
    }

    // public function create(Request $request)
    // {
    //     $city = City::create($request->all());

    //     return response()->json($city, 201);
    // }

    // public function update($id, Request $request)
    // {
    //     $city = City::findOrFail($id);
    //     $city->update($request->all());

    //     return response()->json($city, 200);
    // }

    // public function delete($id)
    // {
    //     City::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}
