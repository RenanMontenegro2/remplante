@extends('layouts/contentNavbarLayout')

@section('title', 'Fluid - Layouts')

@section('content')
<a href="{{route('reino.create') }}" class="btn btn-primary mb-2">Adicionar</a>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table border text-nowrap text-md-nowrap table-bordered table-hover mb-0">
                <thead>
                    <tr>
                        <th>REINOS</th>
                        <th style="width: 60px">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reinos as $reino)
                        <tr>
                            <td>{{ $reino->nome }}</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="{{ route('reino.edit', ['reino' => $reino->id]) }}"><i class="bx bx-edit-alt me-1" ></i>Editar</a>
                                  <a class="dropdown-item" href="{{route('reino.show', ['reino' => $reino->id]) }}"><i class="bx bx-edit-alt me-1"></i>Ver Detalhes</a>
                                  <a class="dropdown-item">
                                    <form action="{{ route('reino.delete', ['reino' => $reino->id]) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><i class="bx bx-edit-alt me-1"></i>Excluir</button>
                                    </form>
                                  </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Nenhum reino encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
