<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ecadMedicamentoRequest;
use App\ecadMedicamento;


class ecadMedicamentoController extends Controller
{
   	public function index()
    {

       return view('ecadMedicamento');
    }

    public function store(ecadMedicamentoRequest $request, ecadMedicamento $ecadMedicamento ){
      
        $ecadMedicamento = new ecadMedicamento;
        $ecadMedicamento->nmmedicamento = $request->nmmedicamento;
        $ecadMedicamento->nmlaboratorio = $request->nmlaboratorio;
        $ecadMedicamento->nucodigobarras = $request->nucodigobarras;
        $ecadMedicamento->dtvalidade = $request->dtvalidade;
        $ecadMedicamento->qtmedicamento = $request->quantidade;
        $ecadMedicamento->deunidade = $request->unidade;
        $ecadMedicamento->flbula = $request->bula;
        $ecadMedicamento->flcaixa = $request->caixa;
        $ecadMedicamento->deobservacao = $request->observacao;
        $ecadMedicamento->usuarios_id = 1;
        $ecadMedicamento->dtcadastro ='10/06/2018';
        $ecadMedicamento->save();
        return view('ecadMedicamento');
        }


}
