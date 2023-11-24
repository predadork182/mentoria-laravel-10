{{-- Extents da index --}}
@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">usuarios</h1>
</div>
<div>
    <form action="{{ route('usuarios.index') }}" method="get">
        <input type="text" name="pesquisar" id="" placeholder="Digite seu nome">
        <button>Pesquisar</button>
        <a href="{{ route('cadastrar.usuario') }}" class="btn btn-success float-end">Incluir usuário</a>
    </form>
    <div class="table-responsive small mt-4">

        @if($findUsuario->isEmpty())

        <p>Não existe dados</p>

        @else

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <input type="hidden" name="csrf-token" value="{{csrf_token()}}">
            @foreach ($findUsuario as $usuario)
              <tr data-row="{{$usuario->id}}">
              <td>{{$usuario->name}}</td>
              <td>{{$usuario->email}}</td>
              <td>
               
                <a href="{{route('atualizar.usuario', $usuario->id)}}" class="btn btn-light btn-sm">Editar</a>
                <a onclick="deleteRegistroPaginacao('{{route('usuario.delete')}}', {{$usuario->id}})" class="btn btn-danger btn-sm">Excluir</a> 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        @endif

      </div> 
    </div>
@endsection