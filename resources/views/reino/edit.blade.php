@php

@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Fluid - Layouts')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('reino.update', ['reino' => $reino->id]) }}">
                @csrf
                @method('PUT')
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">EDITAR REINO</h5>
                  <div class="text-muted float-end"><a href="http://localhost:8989/reino"> Visualizar Reinos</a></div>
              </div>
              <div class="card-header d-flex justify-content-between align-items-center">
                  <h6 class="mt-0">Os campos com * são obrigatórios</h6>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Nome *</label>
                  <input type="text" class="form-control @error('nome') is-invalid @enderror"
                         placeholder="Nome" aria-label="Nome" name="nome"
                         oninput="this.value = this.value.toUpperCase()"
                         value="{{ old('nome', $reino->nome) }}" required>
                  @error('nome')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
              </div>

                  <button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
              </div>
            </form>
        </div>
    </div>
@stop
