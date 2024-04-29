<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request) {

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'Usuario e ou senha nao existe';
        }
        return view('login', ['erro' => $erro]);
    }

    public function autenticar(Request $request) {
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.email' => 'O campo usuario (e-mail) e obrigatorio',
            'senha.required' => 'O campo senha e obrigatorio'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

       $user = new User();

       $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

       if(isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect('/Consulta');
       } else{
            return redirect()->route('login', ['erro' => 1]);
       }
    }

    public function destroy() {
        Auth::logout();

        return view('consulta');
    }
}
