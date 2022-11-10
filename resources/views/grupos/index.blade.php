@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>Listado de Grupos
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('grupo.create')}}" role="button">Nuevo Grupo</a>
           </div>

    </x-slot>

    <table class="table">
        <thead>  			
            <tr>
                <th>Profesor</th>
                <th>Curso</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
                <th>Dias</th>
                <th>Hora de inicio</th>
                <th>Hora de fin</th>
                <th>Capacidad</th>	
                <th>Inscritos</th>	
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($grupos as $item)
            <tr>
                <td>{{$item->instructor->nombre}}</td>
                <td>{{$item->curso->nombre}}</td>
                <td>{{$item->fecha_inicio->format("m-d-Y")}}</td>
                <td>{{$item->fecha_fin->format("m-d-Y")}}</td>
                <td>{{$item->dias}}</td>
                <td>{{$item->hora_inicio}}</td>
                <td>{{$item->hora_fin}}</td>
                <td>{{$item->capacidad}}</td>
                <td>{{$item->inscritos->count()}}</td>
                <td> --</td>
            </tr>
            @empty
               <tr>
                <td colspan="8">No hay grupos registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection