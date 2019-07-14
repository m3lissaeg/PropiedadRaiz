@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class = "col-3 p-5">
            <img src="https://instagram.feoh4-1.fna.fbcdn.net/vp/356468dd43e3ca1f0822bbdcbc128db0/5DAD6743/t51.2885-19/s150x150/52804003_653436228425814_2784886253907083264_n.jpg?_nc_ht=instagram.feoh4-1.fna.fbcdn.net" class="rounded-circle" >        
        </div>

        <!-- personal info section -->
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <div> <h1>{{$userView->username}}</h1> ||<a href="/property/create"> Add New Property</a> || </div>
                <div class="d-flex align-items-center pb-3">
                    </div>
            </div>

            <div >
                <div> <strong> {{$userView->profile->title ?? "N/A"}}</strong></div>
                <div> <strong> {{$userView->profile->description ?? "N/A"}}</strong></div>
                <div> <i> <a href="{{$userView->profile->urlagency ?? "N/A"}}">{{ $userView->profile->urlagency ?? "N/A"}} </a></i></div>
            </div>
        </div> 
        <!-- end of the personal info section -->


        <!-- functionalities menu section -->
        <div class="col-9 pt-1 ">

            <div class= "d-flex">
                <div class="pr-5"> <strong>Vista general </strong> </div>
                <div class="pr-5"> <strong>Registrar venta </strong> </div>
                <div class="pr-5"> <strong>Registrar pago</strong> </div>
                <div class="pr-5"> <strong>Estado de cuentas </strong> </div>
                <div class="pr-5"> <strong>Reportes y estadísticas </strong> </div>
        
            </div>


        </div>

        
    </div>
</div>
@endsection
