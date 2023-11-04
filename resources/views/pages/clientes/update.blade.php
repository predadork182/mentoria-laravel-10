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
      <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ isset($findCLiente->nome) ? $findCLiente->nome : old('nome')}}">
      @if ($errors->has('nome'))
         <div class="invalid-feedback">{{$errors->first('nome')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">E-mail</label>
      <input id="mascara_email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{isset($findCLiente->email) ? $findCLiente->email : old('email')}}">
      @if ($errors->has('email'))
          <div class="invalid-feedback">{{$errors->first('email')}}</div>
      @endif
    </div>
    <div class="mb-3">
      <label for="endereco" class="form-label">Endereço</label>
      <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{isset($findCLiente->endereco) ? $findCLiente->endereco : old('endereco')}}">
      @if ($errors->has('endereco'))
          <div class="invalid-feedback">{{$errors->first('endereco')}}</div>
      @endif
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
</form>
@endsection