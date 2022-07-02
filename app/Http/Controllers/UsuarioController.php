<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function showUsuario(){
        $usuarios = Usuario::all();
        return view('usuario', [
            'usuarios' => $usuarios
        ]);
    }

    public function createUsuario(UsuarioRequest $usuarioRequest){
        $usuario = new Usuario();
        $usuario->nome =$usuarioRequest->nome;
        $usuario->login = $usuarioRequest->login;
        $usuario->senha = Hash::make($usuarioRequest->senha);
        $usuario->save();

        if ($usuario){
            return redirect()->route('usuario')->with('mensagem', 'Cadastro realizado com sucesso.');
        }
        return redirect()->back()->withInput()->withErrors('Não foi possível salvar.');
    }
}
