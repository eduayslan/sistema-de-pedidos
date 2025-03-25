<?php

namespace App\Livewire;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginCliente extends Component
{
    public $loginEmail;
    public $loginSenha;
    
    public function login()
    {
        $this->validate([
            'loginEmail' => 'required|email',
            'loginSenha' => 'required|min:6',
        ]);

        
        if (Auth::attempt(['email' => $this->loginEmail, 'password' => $this->loginSenha])) {
            session()->flash('message', 'Login bem-sucedido!');
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Credenciais inválidas');
        }
    }



    public function render()
    {
        return view('livewire.login-cliente');
    }
}
