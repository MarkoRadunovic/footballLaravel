<?php

namespace App\Http\Controllers;

use App\Models\Utakmica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UtakmicaController extends Controller
{

    public function view($id){

        $pieces = explode("/", url()->current());
        $utakmica= Utakmica::findOrFail($pieces[count($pieces)-1]);
        return view('utakmica',['utakmica'=>$utakmica]);

    }
    public function create(Request $request){
        $utakmica = new Utakmica();
        $utakmica->domacin=$request->domacin;
        $utakmica->domacin_url=$request->domacin_url;
        $utakmica->gost=$request->gost;
        $utakmica->gost_url=$request->gost_url;
        $utakmica->domacin_golovi=$request->domacin_golovi;
        $utakmica->gost_golovi=$request->gost_golovi;
        $utakmica->opis=$request->opis;
        $utakmica->liga_id=$request->liga_id;
        $utakmica->save();
        return redirect('/'.$request->liga_id.'/'.$request->id);
    }
    public function getAll(){

        return response()->json(Utakmica::all(),200);
    }
    public function getById($id){
        $utakmica=Utakmica::find($id);
        if(is_null($utakmica)){
            return response()->json(["message"=>"Nema te utakmice!"],404);
        }
        return response()->json($utakmica,200);
    }
    public function save(Request $request){

        $validator = Validator::make($request->all(), [
            'domacin'=>'required|min:2',
            'domacin_url'=>'required|min:2',
            'gost'=>'required|min:2',
            'gost_url'=>'required|min:2',
            'domacin_golovi'=>'required|min:2',
            'gost_golovi'=>'required',
            'opis'=>'required',
            'liga_id'=>'required',

        ]);

        if ($validator->fails()) {
            return response()->json(["message"=>"Sva polja su obavezna"],400);
        }
        $utakmica= Utakmica::create($request->all());
        return response()->json($utakmica, 201);
    }
    public function delete(Request $request, $id){
        $utakmica= Utakmica::find($id);

        if(is_null($utakmica)){
            return response()->json(["message"=>"Nema date utakmice!"],404);
        }
        $utakmica->delete();
        return response()->json(null,204);
    }
}
