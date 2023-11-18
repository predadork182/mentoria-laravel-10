{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Produtos cadastrados</h5>
            <p class="card-text">Total de produtos cadastrados no sistema.</p>
            <a href="#" class="btn btn-primary">{{$totalDeProdutosCadastrados}}</a>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Clientes cadastrados</h5>
            <p class="card-text">Total de clientes cadastrados no sistema.</p>
            <a href="#" class="btn btn-primary">{{$totalDeClientesCadastrados}}</a>
        </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vendas cadastradas</h5>
            <p class="card-text">Total de vendas cadastradas no sistema.</p>
            <a href="#" class="btn btn-primary">{{$totalDeVendasCadastradas}}</a>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Usuários cadastrados</h5>
            <p class="card-text">Total de ususários cadastrados no sistema.</p>
            <a href="#" class="btn btn-primary">Ver</a>
        </div>
        </div>
    </div>
</div>

@endsection