<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Controlador de Propiedades melii.co/property GET
    public function create(){
        return view('payments.create');
    }

    // Se trigerea cuando se mandan datos para almacenar en la base de datos. POST
    public function store(){

         $data = request()-> validate([
            'propertyTitle' => 'required|unique:properties|max:100|String',  
            'name' => 'required|max:100|String',
            'properyDescription' => 'required|unique:properties|max:250|String',
            'projectName' => 'required|max:60|String',
            'address' => 'required|max:60|String',
            'priceProperty' => 'required|Integer',
        ]);
        
        \App\Property::create($data);
        
        dd($data);

    }
}
