<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Contato;

    $contatos = Contato::all();
    foreach($contatos as $contato){
    echo "<p>" . $contato->nome . " - " . $contato->email . " - " . $contato->telefone . "</p>";
    }
?><?php /**PATH D:\Laravel\Crud\resources\views/listar.blade.php ENDPATH**/ ?>