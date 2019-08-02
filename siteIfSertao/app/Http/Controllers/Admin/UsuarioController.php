<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function login(Request  $request){
        $dados = $request->all();
        if(Auth::attempt(['email'=>$dados['Email'], 'password'=>$dados['Password']])){
            \Session::flash('mensagem',['msg'=>'Login realizado com Sucesso!','class'=>'green white-text']);
            return redirect()->route('admin.principal');
            
        }
        \Session::flash('mensagem',['msg'=>'erro ao realizar login','class'=>'red white-text']);
        return redirect()->route('admin.login');
    }
}
