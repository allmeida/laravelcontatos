@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tela de Contatos</div>
                    <table class="table table-ordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contatos as $contato)
                            <tr>
                                <td>{{$contato->id}}</td>
                                <td>{{$contato->nome}}</td>
                                <td>{{$contato->telefone}}</td>
                                <td>
                                    <a href="/contatos/editar/{{$contato->id}}" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="/contatos/apagar/{{$contato->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection
