@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar pago</div>
                <div class="card-body">
                    <form method="POST" action="/payments" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row">
                            <label for="projectName" class="col-md-4 col-form-label text-md-right">Nombre del Proyecto</label>

                            <div class="col-md-6">
                                <input id="projectName" type="projectName" class="form-control @error('projectName') is-invalid @enderror" name="projectName" value="{{ old('projectName') }}"  autocomplete="projectName">

                                @error('projectName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Dirección </label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        

                      

                        <div class="form-group row">
                            <label for="propertyDescription" class="col-md-4 col-form-label text-md-right">Código del Cliente / C.C.</label>

                            <div class="col-md-6">
                                <input id="propertyDescription" type="propertyDescription" class="form-control @error('propertyDescription') is-invalid @enderror" name="propertyDescription" value="{{ old('propertyDescription') }}" required autocomplete="propertyDescription">

                                @error('propertyDescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="comision" class="col-md-4 col-form-label text-md-right">Pago/ adelanto comisións $</label>

                            <div class="col-md-6">
                                <input id="comision" type="number" class="form-control @error('comision') is-invalid @enderror" name="comision" value="{{ old('comision') }}" required autocomplete="comision">

                                @error('comision')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar pago') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
