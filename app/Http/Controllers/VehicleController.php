<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
    	// Brings out all the entries available in the DB
    	// i.e all the instances or records
    	$vehicles = Vehicle::all();

    	// if all is good, return all the vehicles
    	// 200 means all goes well
    	return response()->json(['data' => $vehicles], 200);
    }


    public function show($id)
    {
    	$vehicle = Vehicle::find($id);

    	if(!$vehicle)
    	{
    		return response()->json(['message' => 'This vehicle does not exist', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $vehicle], 200);
    }




}
