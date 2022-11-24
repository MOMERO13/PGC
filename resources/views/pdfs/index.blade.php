<!DOCTYPE html>
<html>
    
            <p><img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/IMSS.jpg" style="position: absolute;top: -20px; left: 0px; width: 150px; height: 130px;" width="179" height="100.374"></p>
            <h4 style="position: absolute; top: -20px; left: 300px;">Ficha de pago</h4>
                    
        
            <table style="width: 22%; margin-right: calc(77%); position: absolute; top: 50px; left: 550px; margin-left: calc(1%);">
                <tbody>
                    <tr>
                        <td style="width: 52.3003%;">Folio: </td>
                        <td style="width: 46.7738%;"><br></td>
                    </tr>
                    <tr>
                        <td style="width: 52.3003%;">Fecha:</td>
                        <td style="width: 46.7738%;"><br></td>
                    </tr>
                </tbody>
            </table>
  
           
            <p><br><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>
                @forelse ($inscripciones as $item)
                <h3 style="margin-left: 40px;">Nombre: {{$item->curso->nombre}}</h3>
                <h3 style="margin-left: 40px;">Referencia: </h3>
                <h3 style="margin-left: 40px;">Monto: $</h3>
                <h3 style="margin-left: 40px;">No. de Cuenta: </h3>
                <h3 style="margin-left: 40px;">Banco: </h3>
                
        
            @empty
               
            @endforelse
         

       
    
</html>
