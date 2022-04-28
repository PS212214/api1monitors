<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;
//use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Monitor[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        if ($request->has('limit') && $request->has('offset')) {
            return Monitor::skip($request->offset)->take($request->limit)->get();
            //return Script::all();
        }
        return Monitor::orderBy($request->sort !==null ? $request->sort : "id", "asc")->get();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'format' => 'required'
        ]);


        if ($validator->fails()) {
            return response('{"Foutmelding":"Data niet correct"}', 400)
                ->header('Content-Type','application/json');

        }

        else
           Log::channel('logs')->info('creating Monitor:',$request->all());
            return Monitor::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return Monitor
     */
    public function show(Monitor $monitor)
    {
        Log::channel('logs')->info('Showing the user Monitor: '.$monitor);
        return $monitor;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monitor  $monitor
     * @return Monitor
     */
    public function update(Request $request, Monitor $monitor)
    {
        $monitor->update($request->all());
        return $monitor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitor $monitor)
    {
        Log::channel('logs')->info(' Deleted Monitor: '.$monitor);
        $monitor->delete();
    }
}
