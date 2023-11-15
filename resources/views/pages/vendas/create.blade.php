{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastrar nova venda</h1>
</div>
<form class="form" method="POST" action="{{route('cadastrar.venda')}}">
    @csrf
    <div class="mb-3">
      <label for="numero_da_venda" class="form-label">Número da venda</label>
      <input id="numero_da_venda" type="text" class="form-control @error('numero_da_venda') is-invalid @enderror" id="numero_da_venda" name="numero_da_venda" 
      value="{{ $findNumeracao }}">
      @if ($errors->has('numero_da_venda'))
         <div class="invalid-feedback">{{$errors->first('numero_da_venda')}}</div>
      @endif
    </div>

    <div class="mb-3">
      <label for="produto_id" class="form-label">Produto</label>
      <select class="form-select" name="produto_id">
        <option selected>Clique aqui para selecionar</option>
        @foreach($findProduto as $produto)
          <option value="{{$produto->produto_id}}">{{$produto->nome}}</option>
        @endforeach
      </select>
    </div>

    {{-- <div class="mb-3">
      <label for="cliente_id" class="form-label">Cliente</label>
      <select class="form-select" name="cliente_id">
        <option selected>Clique aqui para selecionar</option>
        @foreach($findCliente as $cliente)
          <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
        @endforeach
      </select>
    </div>  --}}

    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
@endsection