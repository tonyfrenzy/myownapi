<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Maker;
use App\Vehicle;
use App\Http\Requests\Request\CreateVehicleRequest;

class MakerVehicleController extends Controller
{
    public function index($id)
    {
    	$maker = Maker::find($id);

    	if(!$maker)
    	{
    		return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $maker->vehicles], 200);
    	//dd($maker->vehicles);
    }


    public function store(CreateVehicleRequest $request $makerId)
    {
        $maker = Maker::find($makerId);
        
        if(!$maker)
        {
            return response()->json(['message' = 'This maker does not exist'],);
        }

        $values = $request->all();

        $maker->vehicles()->create($values);
        //Vehicle::create($values);

        return response()->json(['message' => 'The vehicle associated was created'], 201);
    }


    public function show($id, $vehicleId)
    {


    	$maker = Maker::find($id);

    	if(!$maker)
    	{
    		return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
    	}

    	$vehicle = $maker->vehicles->find($vehicleId);

    	if(!$vehicle)
    	{
    		return response()->json(['message' => 'This vehicle does not exist for this maker', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $vehicle], 200);
    	//dd($maker->vehicles);
    }
}
