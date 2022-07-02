@extends('template.layout')

@section('title', 'Login')

@section('form-tittle', 'Login')
@section('form')
    <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ route('login.check') }}">
        @csrf
        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="login">Usuário:</label>
            <input type="text" name="login" id="login" class="form-control @error('login') is-invalid @enderror"
                autocomplete="login" maxlength="80" value="{{ old('login') }}" placeholder="Digite o usuário">
        </div>

        <div style="margin-bottom: 25px" class="form-group col-lg-12">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control @error('senha') is-invalid @enderror"
                autocomplete="senha" maxlength="100" value="{{ old('senha') }}" placeholder="Digite sua senha">
        </div>

        <div class="col-12" style="margin-top:10px; text-align: center;">
            <button id="btn-add" type="submit" class="btn btn-success" style="width: 200px;">Login</button>
        </div>
    </form>
@endsection
