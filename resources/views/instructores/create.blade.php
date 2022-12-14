@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Nuevo Instructor
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('instructor.index')}}" role="button">Listado de Instructores</a>
           </div>
    </x-slot>
    
    <form method="POST" action="{{ route('instructor.store') }}">
        @csrf

        <div class="row mb-3">
            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre</label>

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
            <label for="rfc" class="col-md-4 col-form-label text-md-end">RFC</label>

            <div class="col-md-6">
                <input id="rfc" type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" value="{{ old('rfc') }}"  required >

                @error('rfc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Guardar
                </button>
            </div>
        </div>
    </form>

<script> 
    var element = document.getElementById('rfc');
    var maskOptions = { 
     mask: 'aaaa000000***'
    };
    var mask = IMask(element, maskOptions);
</script>
</x-section>


@endsection