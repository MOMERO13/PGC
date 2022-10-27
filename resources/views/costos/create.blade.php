@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Costos de Cursos</x-slot>
    
    <form method="POST" action="{{ route('costo.store') }}">
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
            <label for="periodo" class="col-md-4 col-form-label text-md-end">Periodo</label>

            <div class="col-md-6">


                <select class="form-select" id="periodo" name="periodo" required autofocus>
                    <option selected>Elige un periodo</option>
                    
                    <option value="{{ date('Y')-1}}">{{ date('Y')-1}}</option>
                    <option value="{{ date('Y')}}">{{ date('Y')}}</option>
                    <option value="{{ date('Y')+1}}">{{ date('Y')+1}}</option>
                  </select>

                @error('periodo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="row mb-3">
            <label for="costo_derechohabiente" class="col-md-4 col-form-label text-md-end">Costo Derechohabiente</label>

            <div class="col-md-6">
                <input id="costo_derechohabiente" type="double" class="form-control @error('costo_derechohabiente') is-invalid @enderror" name="costo_derechohabiente" value="{{ old('costo_derechohabiente') }}" required autofocus>

                @error('costo_derechohabiente')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="costo_publico" class="col-md-4 col-form-label text-md-end">Costo Publico</label>

            <div class="col-md-6">
                <input id="costo_publico" type="double" class="form-control @error('costo_publico') is-invalid @enderror" name="costo_publico" value="{{ old('costo_publico') }}" required autofocus>

                @error('costo_publico')
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