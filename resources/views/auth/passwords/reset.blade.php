@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('content')
    <h4 class="mb-2">Recuperação de Senha</h4>
    <p class="mb-4">Informe sua nova senha nos campos abaixo</p>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @include('utils.layout.error', ['param' => 'email'])
        </div>
        <div class="form-group mb-3">
            <label for="password" class="form-label">Nova Senha</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password">
            @include('utils.layout.error', ['param' => 'password'])
        </div>
        <div class="form-group mb-3">
            <label for="password-confirm" class="form-label">Digite novamente a Senha</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-primary d-grid w-100">
            Alterar Senha
        </button>
    </form>
@endsection
