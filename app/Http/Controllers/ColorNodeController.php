<?php

namespace App\Http\Controllers;

use App\Models\ColorNodes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ColorNodeController extends Controller
{
    public function displayDiagramsColorNode(){
        $colorList = ColorNodes::all();
        return response()->json($colorList);
    }

    public function storeDiagramsColorNode(Request $request){
        $diagramsColorFields = $request->validate([
            'diagram_id' => 'integer|required', 
            'label' => 'string|required', 
            'color_key' => 'string|required', 
            'color_code' => 'string|required', 
            'created_by' => 'integer|required', 
        ]);
        $diagramsColorFields['is_active'] = true;
        $diagramsColorFields['created_date'] = Carbon::now();

        $diagramsColorNodes = ColorNodes::create($diagramsColorFields);
        return response()->json(['Diagrams Store Successfuly' , $diagramsColorNodes],201);
    }
}
