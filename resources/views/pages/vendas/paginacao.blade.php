{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Vendas</h1>
</div>
<div>
    <form action="{{ route('vendas.index') }}" method="get">
        <input type="text" name="pesquisar" id="" placeholder="Digite seu nome">
        <button>Pesquisar</button>
        <a href="{{ route('cadastrar.venda') }}" class="btn btn-success float-end">Incluir venda</a>
    </form>
    <div class="table-responsive small mt-4">

        @if($findVendas->isEmpty())

        <p>Não existe dados</p>

        @else

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Numeração</th>
              <th>Produto</th>
              <th>Cliente</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <input type="hidden" name="csrf-token" value="{{csrf_token()}}">
            @foreach ($findVendas as $venda)
            <tr data-row="{{$venda->id}}">
              <td>{{$venda->numero_da_venda}}</td>
              <td>{{$venda->produto->nome}}</td>
              <td>{{$venda->cliente->nome}}</td>
              <td>
                <a href="{{ route('enviaComprovantePorEmail.venda', $venda->id)}}" class="btn btn-light btn-sm">Enviar e-mail</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        @endif

      </div> 
    </div>
@endsection