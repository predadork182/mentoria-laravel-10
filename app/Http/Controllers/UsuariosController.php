<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Componentes;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request) {

        $pesquisar = $request->pesquisar;

        $findUsuario = $this->user->getUsuarioPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.usuarios.paginacao', compact('findUsuario'));
    }

    public function delete(Request $request) {

        $id = $request->id;
        $buscaRegistro = User::find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarUsuario(Request $request){

        if ($request->method() == "POST") {
            $data = $request->all();
            User::create($data);

            Toastr::success('Usuário gravado com sucesso');
            return redirect()->route('usuarios.index');
        }
        
        return view('pages.usuarios.create');
    }

    public function atualizarUsuario(Request $request, $id){

        if ($request->method() == "PUT") {
            $data = $request->all();
            $buscaRegistro = User::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('usuarios.index');
        }

        $findUsuario = User::where('id', '=', $id)->first();
     
        return view('pages.usuarios.update', compact('findUsuario'));
    }
}
 