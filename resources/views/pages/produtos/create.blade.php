{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastrar novo produto</h1>
</div>
<form class="form" method="POST" action="{{route('cadastrar.produto')}}">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome">
    </div>
    <div class="mb-3">
      <label for="valor" class="form-label">Valor</label>
      <input type="text" class="form-control @error('valor') is-invalid @enderror" id="valor" name="valor">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
@endsection