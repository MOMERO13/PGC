@extends('layouts.app')
@section('content')

<x-section>  
    <x-slot:columnas>10</x-slot>
    <x-slot:titulo>Listado de Dependientes
        <div class="float-end">
            <a class="btn btn-outline-success" href="{{route('dependiente.create')}}" role="button">Nuevo Dependiente</a>
           </div>

    </x-slot>

    <table class="table">
        <thead>  			
            <tr>
                <th>Nombre completo</th>
                <th>Fecha de nacimiento</th>
                <th>CURP</th>
                <th>Domicilio</th>
                <th>Telefono</th>	
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($dependientes as $item)
            <tr>
                <td>{{$item->nombre}} {{$item->apellidos}}</td>
                <td>{{$item->fecha_nacimiento->format("m-d-Y")}}</td>
                <td>{{$item->curp}}</td> 
                <td>{{$item->calle}} #{{$item->numero_exterior}} {{(!empty($item->numero_interior))?'('.($item->numero_interior).')' : null }}, {{$item->colonia}}, CP:{{$item->codigo_postal}}</td> 
                <td>{{$item->numero_telefono}}</td>
                <td> --</td>
            </tr>
            @empty
               <tr>
                <td colspan="7">No hay dependientes registrados</td>
               </tr> 
            @endforelse

        </tbody>
    </table>


</x-section>
@endsection