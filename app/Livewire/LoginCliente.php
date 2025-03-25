<?php

namespace App\Livewire;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginCliente extends Component
{
    public $loginEmail;  // Declare a propriedade para o email
    public $loginSenha;  // Declare a propriedade para a senha

    // Função para realizar o login
    public function login()
    {
        // Validação dos dados
        $this->validate([
            'loginEmail' => 'required|email',  // Valida o email
            'loginSenha' => 'required|min:6',  // Valida a senha
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $this->loginEmail, 'password' => $this->loginSenha])) {
            session()->flash('message', 'Login bem-sucedido!');
            return redirect()->route('dashboard'); // Redireciona para o dashboard
        } else {
            session()->flash('error', 'Credenciais inválidas');
        }
    }



    public function render()
    {
        return view('livewire.login-cliente');
    }
}
