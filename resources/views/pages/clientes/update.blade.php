{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Editar produto</h1>
</div>
<form class="form" method="POST" action="{{route('atualizar.cliente', $findCLiente->id)}}"> 
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{isset($findCLiente->nome) ? $findCLiente->nome : old('nome')}}">
      @if ($errors->has('nome'))
         <div class="invalid-feedback">{{$errors->first('nome')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input id="mascara_email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{isset($findCLiente->email) ? $findCLiente->email : old('email')}}">
      @if ($errors->has('email'))
          <div class="invalid-feedback">{{$errors->first('email')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="cep" class="form-label">CEP</label>
      <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{isset($findCLiente->cep) ? $findCLiente->cep : old('cep')}}">
      @if ($errors->has('cep'))
          <div class="invalid-feedback">{{$errors->first('cep')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="endereco" class="form-label">Endereço</label>
      <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{isset($findCLiente->endereco) ? $findCLiente->endereco : old('endereco')}}">
      @if ($errors->has('endereco'))
          <div class="invalid-feedback">{{$errors->first('endereco')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="logradouro" class="form-label">Logradouro</label>
      <input id="logradouro" type="text" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" value="{{isset($findCLiente->logradouro) ? $findCLiente->logradouro : old('logradouro')}}">
      @if ($errors->has('logradouro'))
          <div class="invalid-feedback">{{$errors->first('logradouro')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="bairro" class="form-label">Bairro</label>
      <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{isset($findCLiente->bairro) ? $findCLiente->bairro : old('bairro')}}">
      @if ($errors->has('bairro'))
          <div class="invalid-feedback">{{$errors->first('bairro')}}</div>
      @endif
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
</form>
@endsection