<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;

class PerroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perros= Perro::all();       
        return view('perro.index',['lista' => $perros]);      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $perro = new Perro();
        $perro->nombre = $request->input('nombre');
        $perro->raza = $request->input('raza');
        $perro->color = $request->input('color');
        $perro->peso = $request->input('peso');
        $perro->sexo = $request->input('sexo');

      
        $perro->save();
        return redirect('perros');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $perro = Perro::find($id);
        return view('perro.show',['perro'=>$perro]);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $perro = Perro::find($id);
        return view('perro.edit',['id'=>$id, 'perro'=>$perro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $perro = Perro::find($id);
        $perro -> nombre = $request->input('nombre');
        $perro -> raza = $request->input('raza');
        $perro -> color = $request->input('color');
        $perro -> peso = $request->input('peso');
        $perro -> sexo = $request->input('sexo');
        $perro->save();
        return redirect('perros');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $perro = Perro::find($id);
        $perro->delete();
        return redirect('perros');
    
    }

    public function cruce(Request $request){

        $idPerro1 = $request->idPerro1;
        $idPerro2 = $request->idPerro2;
        $perro1 = Perro::find($idPerro1);
        $perro2 = Perro::find($idPerro2);
        $sexoCachorro;

        //comprobación sexo perros
        if($perro1->sexo == $perro2->sexo ){

            return view('perro.errorCruce');

        }
        else{

            if($perro1->peso == $perro2->peso){

                return view('perro.errorCruce');
    
            }else{
              
    
                if(strlen($perro1->nombre) > strlen($perro2->nombre)){
                    $sexoCachorro = $perro1->sexo;
                }
                else{
                    
                    $sexoCachorro = $perro2->sexo;
    
                }
    
                $perro = new Perro();
                $perro->nombre = $perro1->nombre . "Junior";
                $perro->raza = $perro2->raza;
                $perro->color = $perro2->color;
                $perro->peso = 1;
                $perro->sexo = $sexoCachorro;
                $perro->save();
    
                return redirect('perros');
            }

        }
        
}
}
