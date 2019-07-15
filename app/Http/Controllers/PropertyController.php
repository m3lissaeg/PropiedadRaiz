<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Controlador de Propiedades melii.co/property GET
    public function create(){
        return view('properties.create');
    }

    // Se trigerea cuando se mandan datos para almacenar en la base de datos. POST
    public function store(){

         $data = request()-> validate([
            'propertyDescription' => 'required|unique:properties|max:250|String',
            'projectName' => 'required|max:60|String',
            'address' => 'required|max:60|String',
            'priceProperty' => 'required|Integer',
        ]);

        $property = new \App\Property();
        $property->propertyDescription = request('propertyDescription');
        $property->projectName = request('projectName');
        $property->address = request('address');
        $property->priceProperty = request('priceProperty');
        $property->user_id = auth()->user()->id;
        // dd($property);
        
        $property->save();


        return redirect('/home');

        
        


 

        // \App\Property::create($data); // save in the data base


        
        //dd($data);  this let me watch the register in the web server

    }
}
