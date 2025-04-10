<?php

namespace App\Http\Controllers;

use App\Models\tevekenysegek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TevekenysegekController extends Controller
{

    public function index(){
        /*$query = DB::table('tevekenysegeks')
            ->join('tevekenysegeks.kat_id', '=', 'kategoriak.id')
            ->select('tevekenysegeks.*', 'kategoriak.*')
            ->get();*/
        
        $query = tevekenysegek::all();

        return response()->json($query);
    }



    public function show(string $id){
        $query = DB::table('tevekenysegeks')
            ->where('id','=', $id)
            ->get();
        
            return response()->json($query);
    }



    public function store(Request $request){
        $bejegyzes = tevekenysegek::create([
            'tev_nev' =>$request->tev_nev,
            'allapot' =>$request->allapot,
        ]);

        return response()->json($bejegyzes, 201);
    }



    public function destroy($id){
        $deleted = DB::table('tevekenysegeks')
            ->where('id','=', $id)
            ->delete();

        if($deleted){
            return response()->json('Sikeres törlés', 202);
        } else {
            return response()->json('Nem sikerült a törlés', 402);
        }
    }



    public function update(Request $request, $id){
        DB::table('tevekenysegeks')
            ->when('id', $id)
            ->update([
                'tev_nev' => $request->input('tev_nev'),
                'allapot' => $request->input('allapot'),
            ]);

        return response()->json('Frissítve', 200);
    }

}




/*


Route::get('/tevekenysegek', [TevekenysegekController::class,'index']);
Route::get('/tevekenysegek/kategoria/{id}', [TevekenysegekController::class,'show']);
Route::post('/tevekenyseg', [TevekenysegekController::class,'store']);
Route::delete('/tevekenyseg/{id}', [TevekenysegekController::class,'destroy']);
Route::put('/tevekenyseg/{id}', [TevekenysegekController::class,'update']);

*/