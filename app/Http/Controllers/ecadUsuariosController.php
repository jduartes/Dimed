<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ecadUsuarioRequest;
use App\ecadUsuario;

class ecadUsuariosController extends Controller
{
   	public function index()
    {

       return view('cadastroUsuarios');
    }

    public function store(ecadUsuarioRequest $request, ecadUsuario $ecadUsuario ){
      
        $ecadUsuario = new ecadUsuario;
        $ecadUsuario->nmusuario = $request->nmusuario;
        $ecadUsuario->dtnasc = $request->dtnacimento;
        $ecadUsuario->nucpf = $request->nucpf;
        $ecadUsuario->nurg = $request->nurg;
        $ecadUsuario->deendereco = $request->deendereco;
        $ecadUsuario->nuendereco = $request->nuendereco;
        $ecadUsuario->debairro = $request->debairro;
        $ecadUsuario->deestado = $request->deestado;
        $ecadUsuario->decidade = $request->decidade;
        $ecadUsuario->nucep = $request->nucep;
        $ecadUsuario->nmlogin = $request->nmlogin;
        $ecadUsuario->deemail = $request->deemail;
        $ecadUsuario->desenha = $request->desenha;
        $ecadUsuario->save();
        return view('cadastroUsuarios');
        }
}
