<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestVenda;
use App\Models\Componentes;
use App\Models\Venda;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class VendaController extends Controller
{

    public $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function index(Request $request) {

        $pesquisar = $request->pesquisar;

        $findVendas = $this->venda->getVendaPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.vendas.paginacao', compact('findVendas'));
    }

    public function cadastrarVenda(FormRequestVenda $request){

         // Mostra dados
         $findNumeracao = Venda::max('numero_da_venda') + 1;
         $findProduto = Produto::all();
         $findCliente = Cliente::all(); 
         
        if ($request->method() == "POST") {
            $data = $request->all();
            $data['numero_da_venda'] = $findNumeracao;
            Venda::create($data);
            Toastr::success('Venda gravado com sucesso');
            return redirect()->route('vendas.index');
        }
        
        return view('pages.vendas.create', compact('findNumeracao', 'findProduto', 'findCliente'));
    }

}
