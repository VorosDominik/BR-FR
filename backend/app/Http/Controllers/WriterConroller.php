<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterConroller extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return response()->json($writers);;

    }
    public function store(Request $request)
    {
        
    
        // Itt tedd meg a megfelelő adatok validációját és ellenőrzését
        // Például ellenőrizd a mezők kötelezőségét vagy más validációs szabályokat.
    
        $record = new Writer;
        $record->nev  =$request->nev;
        $record->szul  =$request->szul;
        $record->save();
    
        return Writer::find($record->id);
    }
}
