<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class CadastroCliente extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;

    protected $rules = [
        'nome' => 'required|max:100',
        'endereco' => 'required|max:80',
        'telefone' => 'required|max:60',
        'cpf' => 'required|max:15|min:11|unique:clientes,cpf',
        'email' => 'required|max:80',
        'password' => 'required|min:6',

    ];

    protected $messages = [
        'nome.required' => 'O campo é obrigatório',
        'nome.max' => 'O maxímo de de caracteres foi alcançado',
        'endereco.required' => 'O campo é obrigatório',
        'endereco.max' => 'O maxímo de de caracteres foi alcançado',
        'telefone.required' => 'O campo é obrigatório',
        'telefone.max' => 'O maxímo de de caracteres foi alcançado',
        'cpf.required' => 'O campo é obrigatório',
        'cpf.max' => 'O maxímo de de caracteres foi alcançado',
        'cpf.min' => 'O minímo de de caracteres foi alcançado',
        'cpf.unique' => 'Este CPF já está cadastrado',
        'email.required' => 'O campo é obrigatório',
        'email.max' => 'O maxímo de de caracteres foi alcançado',
        'cpf.required' => 'O campo é obrigatório',
        'cpf.min' => 'O minímo de de caracteres foi alcançado',
    ];

        public function render()
    {
        return view('livewire.cadastro-cliente');
    }

    public function store(){
        $this->validate();
        Cliente::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'telefone' => $this->telefone,
            'endereco' => $this->endereco,
            'password'=> $this->password,
        ]);
        session()->flash('message', 'Cliente cadastrado com sucesso!');

        $this->reset();
    }
}
