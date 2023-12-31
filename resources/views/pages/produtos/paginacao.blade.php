{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
</div>
<div>
    <form action="{{ route('produtos.index') }}" method="get">
        <input type="text" name="pesquisar" id="" placeholder="Digite seu nome">
        <button>Pesquisar</button>
        <a href="{{ route('cadastrar.produto') }}" class="btn btn-success float-end">Incluir produtos</a>
    </form>
    <div class="table-responsive small mt-4">

        @if($findProduto->isEmpty())

        <p>Não existe dados</p>

        @else

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Produto</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <input type="hidden" name="csrf-token" value="{{csrf_token()}}">
            @foreach ($findProduto as $produto)
            <tr data-row="{{$produto->id}}">
              <td>{{$produto->nome}}</td>
              <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.')}}</td>
              <td>
               
                <a href="{{route('atualizar.produto', $produto->id)}}" class="btn btn-light btn-sm">Editar</a>
                <a onclick="deleteRegistroPaginacao('{{route('produto.delete')}}', {{$produto->id}})" class="btn btn-danger btn-sm">Excluir</a> 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        @endif

      </div> 
    </div>
@endsection