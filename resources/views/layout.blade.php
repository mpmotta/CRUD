<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" value="Márcio Paiva da Motta">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Agenda CRUD Laravel</title>
</head>

<body class="bg-secondary">
    <div class="container-md bg-light">
        <header class="row bg-dark text-light">
            <div class="text-center mt-2 mb-2">
                <h1>Agenda CRUD Laravel</h1>
            </div>
        </header>
        <section>
            @yield('content')
        </section>
        <footer class="row bg-dark text-light mt-5 mb-5">
            <p class="text-center  mt-5 mb-5">Desenvolvido por Márcio Paiva da Motta - Out/2022</p>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>

</html>