@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="{{url('/')}}" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">@include('_partials.macros',["width"=>25,"withbg"=>'var(--bs-primary)'])</span>
              <span class="app-brand-text demo text-body fw-bold" style="text-transform: none;">Agrocologia</span>

            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Bem vindo ao Sitema da agrocologia{{ config('project.name') }}!</h4>
    <p class="mb-4">Insira seu login para acessar o sistema</p>
    <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu Email" autofocus
                required>
            @include('utils.layout.error', ['param' => 'email'])
        </div>
        <div class="form-group mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Senha</label>
                <a href="{{ route('password.request') }}">
                    <small>Esqueceu sua Senha?</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="Digite sua senha"
                    aria-describedby="password" required>
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                @include('utils.layout.error', ['param' => 'email'])
            </div>
        </div>
        <div class="form-group mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember-me">
                <label class="form-check-label" for="remember-me">
                    Lembrar-se
                </label>
            </div>
        </div>
        <button class="btn btn-primary d-grid w-100 mb-3" type="submit">Logar</button>
    </form>

    <p class="text-center">
        <span>Novo aqui?</span>
        <a href="{{ route('register') }}">
            <span>Crie sua conta</span>
        </a>
    </p>
      </div>
    </div>
    <!-- /Register -->
  </div>
</div>
</div>
@endsection
