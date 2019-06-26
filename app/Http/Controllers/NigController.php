<?php

namespace App\Http\Controllers;

use App\Lga;
use App\State;
use App\Ward;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NigController extends Controller
{
    /**
     * Show Everything
     * All data structured by state, LGAs, Wards and Polling Units will be returned. The size of this data is approximately 13MB
     *
     */
    public function getAll(){
        $states = State::with('lgas.wards.units')->get();
        return response()->json([
            "success" => true,
            "message" => "All states with corresponding LGAs",
            "data" => $states
        ]);
    }

    /**
     * Show States
     * All States will be returned
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStates(){
        return response()->json([
            "success" => true,
            "message" => "All states with corresponding LGAs",
            "data" => State::all()
        ]);
    }

    /**
     * Show States with LGAs
     * All States will be returned with their corresponding LGAs
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStatesWithLGAs(){
        return response()->json([
            "success" => true,
            "message" => "All states with corresponding LGAs",
            "data" => State::with('lgas')->get()
        ]);
    }

    /**
     * Show LGAs
     * All LGAs belonging to the specified State will be returned. Pass state id.
     * @param State $state
     * @return \Illuminate\Http\JsonResponse
     */
    public function getLGAs(State $state){
        return response()->json([
            "success" => true,
            "message" => "LGAs for ". $state->name. " were found",
            "data" => $state->lgas
        ]);
    }

    /**
     * Show Wards
     * All Wards belonging to the specified LGA will be returned. Pass LGA id.
     * @param Lga $lga
     * @return \Illuminate\Http\JsonResponse
     */
    public function getWards(Lga $lga){
        return response()->json([
            "success" => true,
            "message" => "Wards for ". $lga->name. " were found",
            "data" => $lga->wards
        ]);
    }

    /**
     * Show Units
     * All Polling Units belonging to the specified Ward will be returned. Pass Ward id.
     * @param Ward $ward
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUnits(Ward $ward){
        return response()->json([
            "success" => true,
            "message" => "Units for ". $ward->name. " were found",
            "data" => $ward->units
        ]);
    }
}
