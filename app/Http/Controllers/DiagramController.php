<?php

namespace App\Http\Controllers;

use App\Models\Diagrams;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiagramController extends Controller
{
    public function displayDiagrams(){
        $diagramsList = Diagrams::all();
        return response()->json($diagramsList);
    }

    public function storeDiagrams(Request $request){
        $diagramsFields = $request->validate([
            'name' => 'string|required', 
            'description' => 'string|required', 
            'json_data' => 'string|required', 
            's_bpartner_i_employee_id' => 'integer|required', 
            'created_by' => 'integer|required', 
        ]);
        $diagramsFields['is_shareable'] = false;
        $diagramsFields['is_active'] = true;
        $diagramsFields['created_date'] = Carbon::now();

        $diagrams = Diagrams::create($diagramsFields);
        return response()->json(['Diagrams Store Successfuly' , $diagrams],201);
    }
}
