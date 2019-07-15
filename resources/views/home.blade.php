@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class = "col-3 p-5">
            <img src="https://instagram.feoh4-1.fna.fbcdn.net/vp/356468dd43e3ca1f0822bbdcbc128db0/5DAD6743/t51.2885-19/s150x150/52804003_653436228425814_2784886253907083264_n.jpg?_nc_ht=instagram.feoh4-1.fna.fbcdn.net" class="rounded-circle" >        
        </div>

        <!-- personal info section -->
        <div class="col-9 pt-5">
            <div> <h1>{{Auth::user()->name}}</h1> </div>
            <div >
                <div> <strong>Correo electrónico: </strong> {{Auth::user()->email}}</div>
                <div> <strong>Teléfono de contacto: </strong> {{Auth::user()->phonenumber}} </div>

            </div>
        </div>
        <!-- end of the personal info section -->


        <!-- functionalities menu section -->
        <div class="col-9 pt-1 ">

            <div class= "d-flex">
        
                <div class="pr-5"> <a href="{{ url('/home') }}">Vista general</a>  </div>
                <div class="pr-5"> <a href="{{ url('/property') }}">Registrar venta</a>  </div>
                <div class="pr-5"> <a href="{{ url('/payments') }}">Registrar pago</a>  </div>
                <div class="pr-5"> <a href="{{ url('/home') }}">Estado de cuentas </a>  </li>
        
            </div>


        </div>

        
    </div>
</div>
@endsection
