@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Nuevo dependiente</x-slot>
    
    <form method="POST" action="{{ route('dependiente.store') }}">
        @csrf

        <div class="row mb-3">
            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre(s)</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="apellidos" class="col-md-4 col-form-label text-md-end">Apellidos</label>

            <div class="col-md-6">
                <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required >

                @error('apellidos')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">Fecha de nacimiento</label>

            <div class="col-md-6">
                <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" max="{{date("Y-m-d", strtotime("-6 years"));}}" min="{{date("Y-m-d", strtotime("-100 years"));}}">   

                @error('fecha_nacimiento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="row mb-3">
            <label for="curp" class="col-md-4 col-form-label text-md-end">CURP</label>

            <div class="col-md-6">
                <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required>

                @error('curp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="row mb-3">
            <label for="estado" class="col-md-3 col-form-label text-md-end">Estado</label>

            <div class="col-md-3">
                <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required>

                @error('estado')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="municipio" class="col-md-3 col-form-label text-md-end">Municipio</label>

            <div class="col-md-3">
                <input id="municipio" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio') }}" required>

                @error('municipio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>



        <div class="row mb-3">
            <label for="calle" class="col-md-4 col-form-label text-md-end">Calle</label>

            <div class="col-md-6">
                <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}" required>

                @error('calle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="colonia" class="col-md-4 col-form-label text-md-end">Colonia</label>

            <div class="col-md-6">
                <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ old('colonia') }}" required>

                @error('colonia')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

      
        <div class="row mb-3">
            <label for="codigo_postal" class="col-md-4 col-form-label text-md-end">Código Postal</label>

            <div class="col-md-6">
                <input id="codigo_postal" type="text" class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal" value="{{ old('codigo_postal') }}" required>

                @error('codigo_postal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="numero_exterior" class="col-md-3 col-form-label text-md-end">Número Exterior</label>

            <div class="col-md-3">
                <input id="numero_exterior" type="integer" class="form-control @error('numero_exterior') is-invalid @enderror" name="numero_exterior" value="{{ old('numero_exterior') }}" required>

                @error('numero_exterior')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <label for="numero_interior" class="col-md-3 col-form-label text-md-end">Número Interior</label>

            <div class="col-md-3">
                <input id="numero_interior" type="integer" class="form-control @error('numero_interior') is-invalid @enderror" name="numero_interior" value="{{ old('numero_interior') }}">

                @error('numero_interior')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>


        <div class="row mb-3">
            <label for="numero_telefono" class="col-md-4 col-form-label text-md-end">Número de Telefono</label>

            <div class="col-md-6">
                <input id="numero_telefono" type="integer" class="form-control @error('numero_telefono') is-invalid @enderror" name="numero_telefono" value="{{ old('numero_telefono') }}">

                @error('numero_telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>


</x-section>


@endsection