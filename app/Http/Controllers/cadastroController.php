<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\cadastro;

class usuarioController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarUsuario');
    }

    public function MostrarEditarUsuario(Request $request){

               
        $dadosUsuario = Usuario::query();
        $dadosUsuario->when($request->Usuario,function($query, $vl){
            $query->where('Usuario','like','%'.$vl.'%');
        });

        $dadosUsuario = $dadosUsuario->get();


        return view('editarUsuario',[
            'registrosUsuario' => $dadosUsuario
        ]);
        
    }

    public function SalvarBanco(Request $request){

        $dadosUsuario = $request->validate([
            'nome' => 'string|required',
            'Usuario' => 'string|required',
            'senha' =>'string|required',
            'email' => 'string|required'

        ]);

        Usuario::create($dadosUsuario);
        return Redirect::route('home');
    }

    public function ApagarBancoUsuario(Usuario $registrosUsuarios){
        
        $registrosUsuarios->delete();
       
        return Redirect::route('editar-Usuario');
    }

    public function MostrarAlterarUsuario(Usuario $registrosUsuarios){
        return view('alterarUsuario',['registrosUsuarios' => $registrosUsuarios]);
    }

    public function AlterarBancoUsuario(Usuario $registrosUsuarios, Request $request){
        $banco = $request->validate([
            'nome' => 'string|required',
            'Usuario' => 'string|required',
            'senha' =>'string|required',
            'email' => 'string|required'
            
        ]);

        $registrosUsuarios->fill($banco);
        $registrosUsuarios->save();

        return Redirect::route('editar-Usuario');


    }

}
