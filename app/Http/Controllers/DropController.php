<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class DropController extends Controller
{
    public function index()
    {
        $provinces = DB::table("provinces")->pluck("pro_name", "id");
        return view('dropdown', compact('provinces'));
    }

    public function getDistricts(Request $request)
    {
        $districts = DB::table("districts")
            ->where("province_id", $request->province_id)
            ->pluck("district_name", "id");
        return response()->json($districts);
    }

    public function getSectors(Request $request)
    {
        $sectors = DB::table("sectors")
            ->where("district_id", $request->district_id)
            ->pluck("sector_name", "id");
        return response()->json($sectors);
    }
    public function getCells(Request $request)
    {
        $cells = DB::table("cells")
            ->where("sector_id", $request->sector_id)
            ->pluck("cell_name", "id");
        return response()->json($cells);
    }
}
