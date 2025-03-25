<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>

                    <div class="card-body">
                        <!-- Exibe mensagem de sucesso ou erro -->
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Formulário de Login -->
                        <form wire:submit.prevent="login" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="loginEmail" wire:model="loginEmail" required>
                            </div>

                            <div class="mb-3">
                                <label for="loginSenha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="loginSenha" wire:model="loginSenha" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Lembrar-me</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>