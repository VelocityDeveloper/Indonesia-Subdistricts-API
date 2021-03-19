<?php

namespace App\Http\Controllers;

use App\Models\Subdistricts;
// use Illuminate\Http\Request;

class SubdistrictsController extends Controller
{
    public function showAllSubdistricts()
    {
        return response()->json(subdistricts::all());
    }

    public function showAllSubdistrictsInCity($city_id)
    {
        return response()->json(subdistricts::where('city_id', $city_id)->get());
    }

    public function showOneSubdistrict($subdistrict_id)
    {
        return response()->json(subdistricts::where('subdistrict_id', $subdistrict_id)->get());
    }

    // public function create(Request $request)
    // {
    //     $subdistricts = subdistricts::create($request->all());

    //     return response()->json($subdistricts, 201);
    // }

    // public function update($id, Request $request)
    // {
    //     $subdistricts = subdistricts::findOrFail($id);
    //     $subdistricts->update($request->all());

    //     return response()->json($subdistricts, 200);
    // }

    // public function delete($id)
    // {
    //     subdistricts::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}
