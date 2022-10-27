@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Nuevo Curso</x-slot>
    
    <form method="POST" action="{{ route('curso.store') }}">
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
            <label for="objetivo" class="col-md-4 col-form-label text-md-end">Objetivos</label>

            <div class="col-md-6">
                <textarea id="objetivo" type="text" class="form-control @error('objetivo') is-invalid @enderror" name="objetivo" value="{{ old('objetivo') }}" ></textarea>

                @error('objetivo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="descripcion" class="col-md-4 col-form-label text-md-end">Descripcion</label>

            <div class="col-md-6">
                <textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}"> </textarea>

                @error('descripcion')
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


</x-section>


@endsection