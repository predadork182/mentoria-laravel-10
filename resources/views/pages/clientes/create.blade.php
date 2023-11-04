{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastrar novo cliente</h1>
</div>
<form class="form" method="POST" action="{{route('cadastrar.cliente')}}">
    @csrf
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{old('nome')}}">
      @if ($errors->has('nome'))
         <div class="invalid-feedback">{{$errors->first('nome')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Valor</label>
      <input id="mascara_email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
      @if ($errors->has('email'))
          <div class="invalid-feedback">{{$errors->first('email')}}</div>
      @endif
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
@endsection