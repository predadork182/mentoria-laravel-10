{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastrar nova venda</h1>
</div>
<form class="form" method="POST" action="{{route('cadastrar.venda')}}">
    @csrf
    <div class="mb-3">
      <label for="numero_da_venda" class="form-label">Nome</label>
      <input id="numero_da_venda" type="text" class="form-control @error('numero_da_venda') is-invalid @enderror" id="numero_da_venda" name="numero_da_venda" value="{{old('numero_da_venda')}}">
      @if ($errors->has('numero_da_venda'))
         <div class="invalid-feedback">{{$errors->first('numero_da_venda')}}</div>
      @endif
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
@endsection