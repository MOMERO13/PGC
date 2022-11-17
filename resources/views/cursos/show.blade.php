@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>{{$curso->nombre}}</x-slot>

    <table class="table">
        <thead>
            <tr>
                <th>Grupo</th>
                <th>Profesor</th>
                <th>Dias</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
                <th>Horario</th>
                <th>Espacios disponibles</th>	
                
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($grupos as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->instructor->nombre}}</td>
                <td>{{$item->dias}}</td>
                <td>{{$item->fecha_inicio->format("m-d-Y")}}</td>
                <td>{{$item->fecha_fin->format("m-d-Y")}}</td>
                <td>{{$item->hora_inicio}}->{{$item->hora_fin}}</td>
                <td>{{$item->capacidad - $item->inscritos->count()}}</td>
                
                <td>
                    
                    <a class="btn btn-outline-primary" href="{{route('grupo.show',['grupo'=>$item->id])}}" role="button">Inscribir</a>
 
                </td>
            </tr>
            @empty
               <tr>
                <td colspan="4">No hay cursos registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection