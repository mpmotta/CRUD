<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="author" value="Márcio Paiva da Motta">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
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
        <table class="table table-striped table-bordered tab">
            <tr>
                <th>Nº</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Fone</th>
                <th class='text-center'>Editar</th>
                <th class='text-center'>Excluir</th>
            </tr>
            <?php

            use Ramsey\Uuid\Uuid;
            use App\Models\Contato;

            $contatos = Contato::all()->sortBy("created_at");
            $num = 1;
            foreach ($contatos as $contato) {
                $uuid = $contato->uuid;
                echo "<tr>
                <td>". $num++ . "</td>
                 <td> ".$contato->nome."</td><td>".$contato->email."</td> <td>".$contato->telefone."</td>
                 <td class='text-center edit'><a href='/edit/$uuid'><i class='fa-solid fa-pen-to-square'></i>
                 </a></td>
                 <td class='text-center del'><a onClick='return confirm(\"Tem certeza que deseja excluir o contato?\");'
                 href='/excluir/$uuid'><i class='fa-solid fa-trash-can'></i>
                 </a></td>
                 </tr>";
            }
            ?>
        </table>

            <div class="text-center">
                <button type="button" class="btn btn-primary mt-3 center" data-bs-toggle="modal" data-bs-target="#janelaModal1"> Cadastrar Novo Contato </button>
            </div>    
        </section>
        <footer class="row bg-dark text-light mt-5 mb-5">
            <p class="text-center  mt-5 mb-5">Desenvolvido por Márcio Paiva da Motta - Out/2022</p>
        </footer>
    </div>

        <?php if(isset($msg)): ?>
            <div id='mensagem'><h4 class="text-center"> <?php echo e($msg); ?> </h4></div>
        <?php endif; ?>

    <div class="modal fade" id="janelaModal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="janelaModalLabel">Cadastrar novo contato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="/cadastrar" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php $uuid = (string) Uuid::uuid4(); ?>

                        <input type="hidden" name="uuid" value="<?php echo $uuid ?>">
                        <input type="text" name="nome" class="form-control mt-3 mb-3" placeholder="Nome:" required>
                        <input type="email" name="email" class="form-control mb-3" placeholder="E-mail:" required>
                        <input type="tel" name="telefone" class="form-control mb-3" placeholder="Telefone:" required>


                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-success" value="Cadastrar Contato">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
          $(function(){
              $("#mensagem").fadeIn(1000, function(){
                  window.setTimeout(function(){
                      $('#mensagem').fadeOut(1000);
                  }, 1500);
              });
          });
    </script>

</body>

</html><?php /**PATH D:\Laravel\Crud\resources\views//welcome.blade.php ENDPATH**/ ?>