@extends('template.layout')

@section('title', 'Cadastro de Usuário')

@section('form-tittle', 'Cadastro de Usuário')
@section('form')
    <form id="usuarioForm" class="form-horizontal" role="form" method="POST" action="{{ route('usuario.create') }}">
        @csrf
        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" id="nome" class="form-control @error('nome') is-invalid @enderror"
                maxlength="80" value="{{ old('nome') }}" autocomplete="nome" placeholder="Digite o nome completo">
        </div>

        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login" class="form-control @error('login') is-invalid @enderror"
                autocomplete="login" maxlength="80" value="{{ old('login') }}" placeholder="Digite o usuário">
        </div>

        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control @error('senha') is-invalid @enderror"
                autocomplete="senha" maxlength="100" value="{{ old('senha') }}" placeholder="Digite a senha">
        </div>

        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="senha">Confirmar Senha:</label>
            <input type="password" name="senha_confirmation" id="senha_confirmation"
                class="form-control @error('senha_confirmation') is-invalid @enderror" maxlength="100"
                value="{{ old('senha_confirmation') }}" placeholder="Confirme sua senha">
        </div>

        <div style="margin-top:10px;">
            <a id="btn-danger" href="{{ route('menu') }}" class="btn btn-danger">Voltar</a>
            <button id="btn-add" type="submit" class="btn btn-success" style="float: right;">Adicionar</button>
        </div>
    </form>

    <h3 style="margin-top: 50px; text-align: center;">Listagem</h3>
    <table class="table table-striped" style="margin-top: 50px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nome }}</td>
                <td>{{ $usuario->login }}</td>
                <td>
                    <a href="{{ route('usuario.edit', $usuario->id) }}" class="btn btn-info"><span
                            class="glyphicon glyphicon-pencil"></span></a>
                </td>
                <td>
                    <form action="{{ route('usuario.delete') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $usuario->id }}">
                        <button type="submit" class="btn btn-danger"><span
                                class="glyphicon glyphicon-trash"></span></button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
@endsection
