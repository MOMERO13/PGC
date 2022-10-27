@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>Listado de Cursos</x-slot>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Objetivo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($cursos as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->objetivo}}</td>
                <td> --</td>
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