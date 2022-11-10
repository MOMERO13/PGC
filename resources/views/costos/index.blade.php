@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>Listado de Costos
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('costo.create')}}" role="button">Nuevo Costo</a>
           </div>
    </x-slot>
    

    <table class="table">
        <thead>
            <tr>
                <th>Periodo</th>
                <th>Curso</th>			
                <th>Costo derechohabiente</th>
                <th>Costo publico</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($costos as $item)
            <tr>			
                <td>{{$item->periodo}}</td>
                <td>{{$item->curso->nombre}}</td>
                <td>${{$item->costo_derechohabiente}}</td>
                <td>${{$item->costo_publico}}</td>
                <td>--</td>
            </tr>
            @empty
               <tr>
                <td colspan="5">No hay costos registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection