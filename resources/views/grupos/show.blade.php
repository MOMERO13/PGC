@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Nueva inscripción</x-slot>
    
    <form method="POST" action="{{ route('inscripcion.store') }}">
        @csrf
       <input type="hidden" name="grupo_id" id="grupo_id" value="{{$grupo->id}}">

        <div class="form-group row">
            <label for="nombre_curso" class="col-sm-4 col-form-label text-md-end">Curso</label>
            <div class="col-sm-6">
              <input type="text" readonly class="form-control-plaintext" id="nombre_curso" value="{{$grupo->curso->nombre}}">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="dias" class="col-sm-4 col-form-label text-md-end">Dias</label>
            <div class="col-sm-4">
                @foreach (str_split($grupo->dias) as $char)
                <span class="badge text-bg-primary">{{$char}}</span>
              @endforeach 
            </div>
          </div>

       
          <div class="form-group row">
            <label for="duracion" class="col-sm-4 col-form-label text-md-end">Duración</label>
            <div class="col-sm-4">
              <input type="text" readonly class="form-control-plaintext" id="duracion" value="{{$grupo->fecha_inicio->format("m-d-Y")}} -- {{$grupo->fecha_fin->format("m-d-Y")}}">
            </div>
          </div>


          <div class="form-group row">
            <label for="horario" class="col-sm-4 col-form-label text-md-end">Horario</label>
            <div class="col-sm-4">
              <input type="text" readonly class="form-control-plaintext" id="horario" value="{{$grupo->hora_inicio}} - {{$grupo->hora_fin}}">
            </div>
          </div>

          <div class="form-group row">
            <label for="nombre_instructor" class="col-sm-4 col-form-label text-md-end">Instructor</label>
            <div class="col-sm-4">
              <input type="text" readonly class="form-control-plaintext" id="nombre_instructor" value="{{$grupo->instructor->nombre}}">
            </div>
          </div>

        <div class="row mb-3">
            <label for="dependiente_id" class="col-md-4 col-form-label text-md-end">A quien desea inscribir</label>
    
            <div class="col-md-6">
                <select class="form-select" id="dependiente_id" name="dependiente_id" required>
                    <option selected>Elija un dependiente</option>
                    @forelse ($dependientes as $item)
                        <option value="{{$item->id}}"> {{$item->nombre}} {{$item->apellidos}}</option> 
                       @empty
                       <option>No hay dependientes dados de alta</option>

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