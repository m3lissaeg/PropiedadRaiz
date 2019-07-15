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


    public function store(){

      
       $payment = new \App\Payment();
       $payment->propertyDescription = request('propertyDescription');
       $payment->projectName = request('projectName');
       $payment->address = request('address');
       $payment->comision = request('comision');
       
       $payment->user_id = auth()->user()->id;
       // dd($property);
       
       $payment->save();


       return redirect('/home');

       // \App\Property::create($data); // save in the data base


       
       //dd($data);  this let me watch the register in the web server

   }
}
