<?php

namespace App\Http\Controllers;

use App\Models\viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function create(){
        return view('viaje.create');
    }
    
    public function store(Request $request){
       
        $viaj= new viaje();
        
        $viaj->codigo=$request->codigo;
        $viaj->numplazas=$request->numplazas;
        $viaj->fecha=$request->fecha;
        $viaj->otrosdatos=$request->otrosdatos;
         $viaj->save();
    
       return($request);
    
         return redirect()->route('viaje.show', $viaj->id);
        }
        
        
        public function index(){
        
            $viaj = viaje::orderBy('id', 'desc')->get();
            return view('viaje.listar', compact('viaj'));
                                
        }
     
        public function destroy (viaje $viaje){
                   
            $viaje->delete();
            return redirect()->route('viaje.index');
        }   
        
        
        public function edit(viaje $viaje){
               
            return view('viaje.edit',compact('viaje'));
        
          }
        
        
          public function update(Request $request, viaje $viaje){
                   
           
            $viaje->codigo = $request->codigo;
            $viaje->numplazas = $request->numplazas;
            $viaje->fecha = $request->fecha;
            $viaje->otrosdatos = $request->otrosdatos;
            $viaje->save();
         
            return redirect()->route('viaje.index');
         
          }
          
        
          public function show ($id){
        
            $viaj = viaje::findOrFail($id);
        
            
            return view('viaje.show', compact('viaj'));
          
        
        
          }
    
    
}
