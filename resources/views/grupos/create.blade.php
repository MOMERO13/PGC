@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Nuevo Grupo</x-slot>
    
    <form method="POST" action="{{ route('grupo.store') }}">
        @csrf
        <div class="row mb-3">
            <label for="curso_id" class="col-md-4 col-form-label text-md-end">Nombre del curso</label>
    
            <div class="col-md-6">
                <select class="form-select" id="curso_id" name="curso_id" required>
                    <option selected>Elija un curso</option>
                    @forelse ($cursos as $item)
                        <option value="{{$item->id}}"> {{$item->nombre}}</option> 
                       @empty
                       <option>No hay cursos dados de alta</option>

                    @endforelse
                    
                  </select>


            </div>
        </div>



        <div class="row mb-3">
            <label for="fecha_inicio" class="col-md-4 col-form-label text-md-end">Fecha de inicio</label>

            <div class="col-md-6">
                <input id="fecha_inicio" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" value="{{ old('fecha_inicio') }}" required>

                @error('fecha_inicio')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="fecha_fin" class="col-md-4 col-form-label text-md-end">Fecha de fin</label>

            <div class="col-md-6">
                <input id="fecha_fin" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" value="{{ old('fecha_fin') }}"  required>

                @error('fecha_fin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="row mb-3">
            <label  class="col-md-4 col-form-label text-md-end">Dias  </label>
            <div class="col-md-6">
                @foreach (["L","M","X","J","V"] as $dia)
 
                <div class="form-check form-check-inline" >
                        <input class="form-check-input" type="checkbox" value="{{$dia}}" id="{{$dia}}" name="dias[]">
                        <label class="form-check-label" for="{{$dia}}">{{$dia}}</label>
                </div>
             @endforeach
            </div>
             
        </div>
    
    <div class="row mb-3">
        <label for="hora_inicio" class="col-md-4 col-form-label text-md-end">Hora de inicio</label>

        <div class="col-md-6">
            <input id="hora_inicio" type="time" class="form-control @error('hora_inicio') is-invalid @enderror" name="hora_inicio" value="{{ old('hora_inicio') }}" required >

            @error('hora_inicio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="hora_fin" class="col-md-4 col-form-label text-md-end">Hora de fin</label>

        <div class="col-md-6">
            <input id="hora_fin" type="time" class="form-control @error('hora_fin') is-invalid @enderror" name="hora_fin" value="{{ old('hora_fin') }}" required >

            @error('hora_fin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="row mb-3">
        <label for="capacidad" class="col-md-4 col-form-label text-md-end">Capacidad</label>

        <div class="col-md-6">
            <input id="capacidad" type="text" class="form-control @error('capacidad') is-invalid @enderror" name="capacidad" value="{{ old('capacidad') }}" required >

            @error('capacidad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>



    <div class="row mb-3">
        <label for="instructor_id" class="col-md-4 col-form-label text-md-end">Instructor</label>

        <div class="col-md-6">
            <select class="form-select" id="instructor_id" name="instructor_id" required>
                <option selected>Elija un instructor</option>
                @forelse ($instructores as $item)
                    <option value="{{$item->id}}"> {{$item->nombre}}</option> 
                   @empty
                   <option>No hay instructores</option>

                @endforelse
                
              </select>


        </div>
    </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>


</x-section>


@endsection