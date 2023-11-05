<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestCliente;
use App\Models\Componentes;
use App\Models\Cliente;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    protected $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Request $request) {

        $pesquisar = $request->pesquisar;

        $findCliente = $this->cliente->getClientePesquisarIndex(search: $pesquisar ?? '');
        return view('pages.clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request) {

        $id = $request->id;
        $buscaRegistro = Cliente::find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarCLiente(FormRequestCliente $request){

        if ($request->method() == "POST") {
            $data = $request->all();
            Cliente::create($data);

            Toastr::success('Cliente gravado com sucesso');
            return redirect()->route('clientes.index');
        }
        
        return view('pages.clientes.create');
    }

    public function atualizarCliente(FormRequestCliente $request, $id){

        if ($request->method() == "PUT") {
            $data = $request->all();

            $buscaRegistro = cliente::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('clientes.index');
        }

        $findCLiente = cliente::where('id', '=', $id)->first();
     
        return view('pages.clientes.update', compact('findCLiente'));
    }
}
