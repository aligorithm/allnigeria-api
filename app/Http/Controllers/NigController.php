<?php

namespace App\Http\Controllers;

use App\Lga;
use App\State;
use App\Ward;

/**
 * @resource API
 *
 * This API aims to provide needed structured national data for use by developers and other individuals or organisations.
 * For now, data available includes all states, LGAs, Wards and Polling units correctly structured with the hierarchy. Feel free to use or contribute.
 * Data is also provided as .sql or JSON
 */
class NigController extends Controller
{
    /**
     * Show Everything
     * All data structured by states => LGAs => Wards => Polling Units will be returned. The size of this data is approximately 12MB
     * This endpoint is disabled due to large memory usage. However, the JSON data is available via this link:
     * If you wish to use this endpoint (possibly in a forked version), uncomment lines 26 and 28 of NigController and delete line 22.
     *
     */
    public function getAll(){
//        ini_set("memory_limit","16M");
        $states = [];
//        $states = State::with('lgas.wards.units')->get();
        return response()->json([
            "success" => true,
            "message" => "All states with corresponding LGAs, Wards and Polling Units",
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
            "message" => "All states",
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
