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
    //     $provinces = provinces::create($request->all());

    //     return response()->json($provinces, 201);
    // }

    // public function update($id, Request $request)
    // {
    //     $provinces = provinces::findOrFail($id);
    //     $provinces->update($request->all());

    //     return response()->json($provinces, 200);
    // }

    // public function delete($id)
    // {
    //     provinces::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}
