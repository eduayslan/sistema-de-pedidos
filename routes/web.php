<?php

use App\Livewire\CadastroCliente;
use App\Livewire\LoginCliente;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/create/cliente', CadastroCliente::class);

Route::get('/login/cliente', LoginCliente::class)->name('login');