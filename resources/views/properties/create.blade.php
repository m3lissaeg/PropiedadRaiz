@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register Property/Estate</div>
                <div class="card-body">
                    <form method="POST" action="/property" enctype="multipart/form-data">
                        @csrf
                        

                        <div class="form-group row">
                            <label for="propertyTitle" class="col-md-4 col-form-label text-md-right"> Property Title</label>

                            <div class="col-md-6">
                                <input id="propertyTitle" type="propertyTitle" class="form-control @error('propertyTitle') is-invalid @enderror" name="propertyTitle" value="{{ old('propertyTitle') }}" required autocomplete="propertyTitle">

                                @error('propertyTitle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="properyDescription" class="col-md-4 col-form-label text-md-right">Property Description</label>

                            <div class="col-md-6">
                                <input id="properyDescription" type="properyDescription" class="form-control @error('properyDescription') is-invalid @enderror" name="properyDescription" value="{{ old('properyDescription') }}" required autocomplete="properyDescription">

                                @error('properyDescription')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="projectName" class="col-md-4 col-form-label text-md-right">Estate projectName</label>

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
                            <label for="address" class="col-md-4 col-form-label text-md-right">Estate Address</label>

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
                            <label for="priceProperty" class="col-md-4 col-form-label text-md-right">Price Estate $</label>

                            <div class="col-md-6">
                                <input id="priceProperty" type="number" class="form-control @error('priceProperty') is-invalid @enderror" name="priceProperty" value="{{ old('priceProperty') }}" required autocomplete="priceProperty">

                                @error('priceProperty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 text-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register Estate') }}
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
