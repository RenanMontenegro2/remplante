@extends('layouts/contentNavbarLayout')

@section('title', 'Fluid - Layouts')

@section('vendor-script')
<script>
  function deleteSuccess() {
      alert("Excluído com sucesso!");
  }
</script>
@endsection

@section('content')
<!-- Layout Demo -->
<div class="row">
  <div class="col-md-10">
    <div class="card mb-6">
      <div class="card-body">
          <div class="text-muted float-end" style="text-decoration: none;">
            <a href="{{ url('reino') }}" class="text-decoration-none text-primary">Visualizar Reinos</a>
          </div>
          <h5 class="card-title">DESCRIÇÃO</h5>
          <div class="card-subtitle mb-3">Reino: <strong>{{$reino->nome}}
          </strong></div>
      </div>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card mb-2">
      <div class="card-body text-center">
        <h5 class="card-title fixed">OPERAÇÕES</h5>
        <a href="{{route('reino.edit', ['reino' => $reino->id]) }}" class="btn btn-primary mb-2" onsubmit="event.preventDefault(); deleteItem(this);">Editar</a>
        <form action="{{ route('reino.delete', ['reino' => $reino->id]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!--/ Layout Demo -->
@endsection
