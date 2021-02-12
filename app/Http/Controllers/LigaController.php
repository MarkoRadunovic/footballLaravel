<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\Utakmica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LigaController extends Controller
{
    public function all(){
        $lige=Liga::all();
        $utakmice= Utakmica::all();
        foreach ($lige as $liga){
            $add=[];
            foreach ($utakmice as $utakmica){
                if($utakmica->liga_id==$liga->id){
                    $add[count($add)]=$utakmica;
                }
            }
            $liga->utakmice=$add;
        }
        return view('sve', [
            'lige'=>$lige
        ]);

    }
    public function view($id){
        $liga= Liga::findOrFail($id);
        $utakmice= Utakmica::all();
        $add=[];
        foreach ($utakmice as $utakmica) {
            if ($utakmica->liga_id == $liga->id) {
                $add[count($add)] = $utakmica;
            }
        }
        $liga->utakmice=$add;
        return view('liga',['liga'=>$liga]);

    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'url'=>'required',
            'drzava'=>'required'
        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $liga= Liga::create($request->all());
        return response()->json($liga, 201);
    }
    public function delete(Request $request, $id){
        $liga=Liga::find($id);
        if(is_null($liga)){
            return response()->json(["message"=>"Nema date lige"],404);
        }
        $liga->delete();
        return response()->json(null,204);
    }
    public function getAll(){
        $lige=Liga::all();
        $utakmice=Utakmica::all();
        foreach ($lige as $liga) {
            $add=[];
            foreach ($utakmice as $utakmica) {
                if ($utakmica->liga_id == $liga->id){
                    $add[count($add)]=$utakmica;
                }
            }
            $liga->utakmice=$add;
        }

        return response()->json($lige,200);
    }
    public function getById($id){
        $liga=Liga::find($id);
        $utakmica=Utakmica::all();
        if(is_null($liga)){
            return response()->json(["message"=>"Nema date lige"],404);
        }
        $add=[];
        foreach ($utakmica as $utakmica) {
            if ($utakmica->liga_id == $liga->id){
                $add[count($add)]=$utakmica;
            }
        }
        $liga->utakmice=$add;
        return response()->json($liga,200);
    }
}
