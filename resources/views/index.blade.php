<!-- index.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped table-bordered tab">
    <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th class='text-center'>Editar</th>
                <th class='text-center'>Excluir</th>
            </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
        <tr>
            <td>{{$contato->nome}}</td>
            <td>{{$contato->email}}</td>
            <td>{{$contato->telefone}}</td>
            <td><a href="{{ route('contato.edit', $contato->uuid)}}" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="{{ route('contato.destroy', $contato->uuid)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection