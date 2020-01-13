@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Contatos</div>

                    <form action="{{ route('contato.update') }}" class="form-horizontal" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" class="form-control" name="telefone" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Atualizar Contato</button>
                            </div>
                        </div>
                    </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            Cadastrado com sucesso!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
