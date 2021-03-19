<?php

namespace App\Http\Controllers;

use App\Models\Provinces;
// use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    public function showAllProvinces()
    {
        return response()->json(provinces::all());
    }

    public function showOneProvince($province_id)
    {
        return response()->json(provinces::where('province_id', $province_id)->get());
    }

    // public function create(Request $request)
    // {
    //     $provinces = City::create($request->all());

    //     return response()->json($provinces, 201);
    // }

    // public function update($id, Request $request)
    // {
    //     $provinces = City::findOrFail($id);
    //     $provinces->update($request->all());

    //     return response()->json($provinces, 200);
    // }

    // public function delete($id)
    // {
    //     City::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}
