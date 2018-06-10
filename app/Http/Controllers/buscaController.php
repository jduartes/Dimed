<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ecadMedicamento;

class buscaController extends Controller
{
    public function index()
    {
    return view("pesquisaMedicamentos");
    

    }


    public function show(Request $request)
    {
    	//if($request->nmcontacont != null) {
     	 $dados = ecadMedicamento::where('nmmedicamento', 'LIKE', '%'. $request->nmmedicamento . '%')->get();
    	//}

      
    return view("buscaMedicamento", ["dados"=>$dados]);

            

     }
}
