<?php

namespace App\Http\Controllers;

use App\Models\viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function create(){
        return view('viajero.create');
    }
    
    public function store(Request $request){
       
        $viaj= new viajero();
        
        $viaj->dni=$request->dni;
        $viaj->nombre=$request->nombre;
        $viaj->direccion=$request->direccion;
        $viaj->telefono=$request->telefono;
         $viaj->save();
    
       return($request);
    
         return redirect()->route('viajero.show', $viaj->id);
        }
        
        
        public function index(){
        
            $viaj = viajero::orderBy('id', 'desc')->get();
            return view('viajero.listar', compact('viaj'));
                                
        }
     
        public function destroy (viajero $viajero){
                   
            $viajero->delete();
            return redirect()->route('viajero.index');
        }   
        
        
        public function edit(viajero $viajero){
               
            return view('viajero.edit',compact('viajero'));
        
          }
        
        
          public function update(Request $request, viajero $viajero){
                   
           
            $viajero->dni = $request->dni;
            $viajero->nombre = $request->nombre;
            $viajero->direccion = $request->direccion;
            $viajero->telefono = $request->telefono;
            $viajero->save();
         
            return redirect()->route('viajero.index');
         
          }
          
        
          public function show ($id){
        
            $viaj = viajero::findOrFail($id);
        
            
            return view('viajero.show', compact('viaj'));
          
        
        
          }
}
