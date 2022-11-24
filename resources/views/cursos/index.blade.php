@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>11</x-slot>
    <x-slot:titulo>Listado de Cursos
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('curso.create')}}" role="button">Nuevo Curso</a>
           </div>

    </x-slot>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Objetivo</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($cursos as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->objetivo}}</td>
                <td>{{$item->descripcion}}</td>
                <td>

                    <a class="btn btn-outline-primary" href="{{route('curso.show',['curso'=>$item->id])}}" role="button">Inscribir</a>
                    <form action="{{ route('curso.destroy',['curso'=>$item->id]) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"> <i class="bi bi-9-circle">Eliminar</i></button>
                    </form> 
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