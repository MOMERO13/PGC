@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>Listado de inscritos</x-slot>

    <table class="table">
        <thead>  			
            <tr>
                <th>Dependiente</th>
                <th>Curso</th>
                <th>Grupo</th>
                <th>Derechohabiente</th>
                <th>Dias</th>	
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($inscripciones as $item)
             <tr>
                <tr> 
                    <td>{{$item->inscrito->nombre}}</td>
                    <td>{{$item->curso->nombre}}</td>
                    <td>{{$item->grupo->nombre}}</td>
                    <td>
                    @if (is_null($item->inscrito->nss)) 
                    No   
                    @else
                     Si   
                    @endif
                        </td> 

                    <td>{{$item->grupo->dias}}</td>
                    <td> 
                        <a class="btn btn-outline-primary" href="{{ route('pdf.ficha_pago',['inscripcion'=>$item->id]) }}" role="button">Ficha de pago</a>
                          <form action="{{ route('inscripcion.destroy',['inscripcion'=>$item->id]) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Desinscribir <i class="bi bi-trash"></i> </button>
                        </form>
                    </td>
                </tr>
                    

                </td>
                </tr>
             @empty
               <tr>
                <td colspan="6">No hay Inscritos registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection