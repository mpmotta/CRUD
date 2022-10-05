<?php
    use App\Models\Contato;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" value="Márcio Paiva da Motta">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Agenda CRUD Laravel</title>
</head>

<body class="bg-secondary">
    <div class="container-md bg-light">
        <header class="row bg-dark text-light">
            <div class="text-center mt-2 mb-2">
                <h1>Agenda CRUD Laravel</h1>
            </div>
        </header>
        <section style="width: 400px; margin: auto">
        <h5 class="mt-5">Editar Contato</h5>
        
        <form action="/atualizar/{{ $contato->uuid }}" method="POST">
        @csrf
        @method("PUT") 
        <input type="text" name="nome" class="form-control mt-3 mb-3" 
        value="{{ $contato->nome }}">
        <input type="email" name="email" class="form-control mb-3"
        value="{{ $contato->email }}">
        <input type="tel" name="telefone" class="form-control mb-3" 
        value="{{ $contato->telefone }}">
        <a href="../" class="btn btn-danger mb-5">Cancelar</a>
        <input type="submit" class="btn btn-success mb-5" value="Salvar Alteração">
        </form>
        </section>
        <footer class="row bg-dark text-light mt-5 mb-5">
            <p class="text-center  mt-5 mb-5">Desenvolvido por Márcio Paiva da Motta - Out/2022</p>
        </footer> 
    </div>    
</body>

</html>