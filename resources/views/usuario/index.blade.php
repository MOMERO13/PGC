@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Listado de Usuarios
      
    </x-slot>
    

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>		
                <th>Rol</th>
                <th>Email</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($users as $item)
            <tr>			
                <td>{{$item->name}}</td>
                <td>@include('shared.rol',[
                  'nivel' => $item->nivel
                ])</td>
                <td>{{$item->email}}</td>
                <td>
                  
                </td>
            </tr>
            @empty
               <tr>
                <td colspan="3">No hay usuarios registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection