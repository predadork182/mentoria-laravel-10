<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    protected $totalDeProdutosCadastrados;

    public function index()
    {
        $totalDeProdutosCadastrados = $this->buscaToralProdutosCadastrados();
        $totalDeClientesCadastrados = $this->buscaToralClientesCadastrados();
        $totalDeVendasCadastradas = $this->buscaToralVendasCadastradas();

        return view("dashboard.dashboard", compact('totalDeProdutosCadastrados','totalDeClientesCadastrados','totalDeVendasCadastradas'));
    }

    public function buscaToralProdutosCadastrados()
    {
        return Produto::all()->count();
    }

    public function buscaToralClientesCadastrados()
    {
        return Cliente::all()->count();
    }

    public function buscaToralVendasCadastradas()
    {
        return Venda::all()->count();
    }

}

