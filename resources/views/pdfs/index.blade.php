<!DOCTYPE html>
<html>
    
            <p><img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/IMSS.jpg" style="position: absolute;top: -20px; left: 0px;" width="150" height="150"></p>
            <h3 style="position: absolute; top: -20px; left: 200px;">Centro de Seguridad Social de Ciudad Valles</h3>
            <h4 style="position: absolute; top: 20px; left: 300px;">Ficha de pago</h4>
                    
        
            <table style="width: 22%; margin-right: calc(77%); position: absolute; top: 50px; left: 500px; margin-left: calc(1%);">
                <tbody>
                    <tr>
                        <td style="width: 52.3003%;">Folio:</td>
                        <td style="width: 46.7738%;">{{mt_rand(100000,999999);}}</td>
                    </tr>
                    <tr>
                        <td style="width: 72.3003%;">Fecha limite de pago: </td>
                        <td style="width: 46.7738%;"></td>
                    </tr>
                </tbody>
            </table>
  
           
            <p><br><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>
                @forelse ($inscripciones as $item)
                <h3 style="margin-left: 40px;">Nombre del inscrito:{{$item->inscrito->nombre}} {{$item->inscrito->apellidos}} </h3>
                <h3 style="margin-left: 40px;">Nombre del curso: {{$item->curso->nombre}}</h3>
                <h3 style="margin-left: 40px;">Referencia: </h3>
               
               <h3 style="margin-left: 40px;">Monto: $
                {{-- @if (is_null($item->inscrito->nss)) 
                    {{$item->costo->costo_publico}}   
                    @else
                    {{$item->costo->costo_derechoabiente}}    
                    @endif --}}</h3>

                <h3 style="margin-left: 40px;">No. de Cuenta: </h3>
                <h3 style="margin-left: 40px;">Banco: </h3>
                
        
            @empty
               
            @endforelse
         

       
    
</html>
