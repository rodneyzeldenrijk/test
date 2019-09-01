<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inwoner;
use App\Taxi;
use App\Ritten;

class ApiController extends Controller
{
    public function Inwoners()
    {
        $data = Inwoner::all();

        return response()->json($data);
    }

    public function InwonersCity($city)
    {
        $data = Inwoner::where('city','=', $city)->get();

        return response()->json($data);
    }

    public function Taxis()
    {
        $data = Taxi::all();

        return response()->json($data);
    }
    
    public function TaxisSingle($id)
    {
        $data = Taxi::find($id);
        
        return response()->json($data);
    }

    public function TaxisRitten($id)
    {
        $data = Taxi::find($id);

        return response()->json($data->ritten);
    }

    public function addRit($user_id)
    {   
    	$data = Inwoner::find($user_id);

    	$rit = new Ritten;
    	$rit->inwoner_id = $data->id;
    	$rit->taxi_id = 1;
    	$rit->save();

        return response()->json([
            'message' => 'Rit aangemaakt voor inwoner '. $data->name,
            'rit' => $rit
        ]);
    }
    
}
