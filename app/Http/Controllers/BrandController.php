<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Monitor;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Brand[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Brand::all();
    }

    public function indexFunctie(Request $request, $id)
    {
        if ($request->has('sort')) {// heeft de url sort in zijn naam
            return Monitor::where('brand_id', $id)->orderBy($request->sort, "asc")->get(); // zoja sorteer op ingevulde veld
        }
        if ($request->has('limit') && $request->has('offset')) {
            return Monitor::where('brand_id', $id)->skip($request->offset)->take($request->limit)->get();
            //return Script::all();
        }
        return Monitor::where('brand_id',$id)->get(); // zonee niet sorteren
    }

    public function DeleteFunctie(Request $request, $id)
    {
        Script::where('hoofdstuk_id',$id)->delete();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return Brand
     */
    public function show(Brand $brand)
    {
        return $brand;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
