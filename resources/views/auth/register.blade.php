@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('content')

    <h4 class="mb-2">Verifique seu email</h4>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <p class="mb-4">Antes de você prosseguir, verifique o seu email! Se não recebeu nenhum</p>
    <!-- /Logo
    <form class="d-inline" method="POST" action="">
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Clique aqui para enviar outro</button>.
    </form>
    -->
@endsection
