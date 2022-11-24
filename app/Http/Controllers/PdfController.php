<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Inscripcion;
use Illuminate\Http\Request;


class PdfController extends Controller
{
    //
    
    
public function ficha_pago(Inscripcion $inscripcion)
{
    if(Auth::user()->nivel==0){
        $inscripciones = Inscripcion::all();
    }else{
        $dependientes = Auth::user()->dependientes;
       $inscripciones=Inscripcion::whereIn('dependiente_id',$dependientes->pluck('id'))->get(); 
       
    }
 
    $data['inscripciones']=$inscripciones;

    view()->share('pdfs.index',$data);
    $pdf=PDF::loadView('pdfs.index',$data);
    return $pdf->stream('pueba.pdf');
}

}
