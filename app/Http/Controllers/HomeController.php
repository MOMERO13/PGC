<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependiente;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
/*        $dependientes=Dependiente::where ('usuario_id', Auth::user()->id)->count(); 
        
        if ($dependientes==0){
            return redirect()->route('dependiente.create');
        }*/
       
        //dd($dependientes);
        $datos=[];
 
        
        return view('Costos.create',$datos);

    }
}
