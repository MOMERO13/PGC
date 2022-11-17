@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>8</x-slot>
    <x-slot:titulo>Listado de Instructores
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('instructor.create')}}" role="button">Nuevo Instructor</a>
           </div>
    </x-slot>
    
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Completo</th> 		
                <th>RFC</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($instructores as $item)
            <tr>			
                <td>{{$item->nombre}} {{$item->apellidos}}</td>
              
                <td>{{$item->rfc}}</td>
                <td>
                    <form action="{{ route('instructor.destroy',['instructor'=>$item->id]) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"> <i class="bi bi-9-circle">Eliminar</i></button>
                    </form> 
                </td>
            </tr>
            @empty
               <tr>
                <td colspan="3">No hay instructores registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection