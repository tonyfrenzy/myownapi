<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Maker;
use App\Http\Requests\CreateMakerRequest;

class MakerController extends Controller
{
    public function index()
    {
    	// Brings out all the entries available in the DB
    	// i.e all the instances or records
    	$makers = Maker::all();

    	// if all is good, return all the makers
    	// 200 means all goes well
    	return response()->json(['data' => $makers], 200);
    	//dd($makers);
    }


	public function store(CreateMakerRequest $request)
	{
		$values = $request->only(['name', 'phone']);

        Maker::create($values);

        return response()->json(['message' => 'Maker correctly added'], 201);
	}    


    public function show($id)
    {
    	$maker = Maker::find($id);

    	if(!$maker)
    	{
    		return response()->json(['message' => 'This maker does not exist', 'code' => 404], 404);
    	}

    	return response()->json(['data' => $maker], 200);
    	//dd($maker);
    }
}
