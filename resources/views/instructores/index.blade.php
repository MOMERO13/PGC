@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>Listado de instructores
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('instructor.create')}}" role="button">Nuevo instructor</a>
           </div>
    </x-slot>
    

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>			
                <th>RFC</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($instructores as $item)
            <tr>			
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellidos}}</td>
                <td>${{$item->rfc}}</td>
                <td>--</td>
            </tr>
            @empty
               <tr>
                <td colspan="5">No hay instructores registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection