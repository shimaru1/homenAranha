<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function FormularioCadastro()
    {
        return view('cadastrarUsuario');
    }

    public function MostrarEditarUsuario(Request $request)
    {

        $dadosUsuario = Usuario::all();
        //dd($dadosCaminhao);

        $dadosUsuario = Usuario::query();
        $dadosUsuario->when($request->nome, function ($query, $v1) {
            $query->where('nome', 'like', '%' . $v1 . '%');
        });
        return view('editarUsuario', [
            'resgistrarUsuario' => $dadosUsuario
        ]);
        $dadosUsuario = $dadosUsuario->get();
    }

    public function SalvarBanco(Request $request)
    {

        $dadosUsuario = $request->validate([
            'nome' => 'string|required',
            'usuario' => 'string|required',
            'senha' => 'string|required',
            'email' => 'string|required'
        ]);

        Usuario::create($dadosUsuario);
        return Redirect::route('home');
    }

    public function ApagarBancoUsuario(Usuario $registrosUsuarios)
    {
        //dd($registrosCaminhoes);
        $registrosUsuarios->delete();
        //Caminhao::findOrFail($id)->delete();
        return Redirect::route('editar-usuario');
    }

    public function MostrarAlterarUsuario(Usuario $registrosUsuarios)
    {
        return view('alterarUsuario', ['registrosUsuarios' => $registrosUsuarios]);
    }

    public function AlterarBancoUsuario(Usuario $registrosUsuarios, Request $request)
    {
        $banco = $request->validate([
            'nome' => 'string|required',
            'usuario' => 'string|required',
            'senha' => 'string|required',
            'email' => 'string|required'

        ]);
        $registrosUsuarios->fill($banco);
        $registrosUsuarios->save();
        return Redirect::route('editar-usuario');
    }
}
