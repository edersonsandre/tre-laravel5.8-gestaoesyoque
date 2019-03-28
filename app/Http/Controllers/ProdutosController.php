<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Http\Requests\ProdutosRequest;
use App\Model\Clientes;
use App\Model\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function index()
    {
        $view = view('admin.produtos.index');

        $view->rows = Produtos::all();

        return $view;
    }

    public function registro($id = null)
    {
        $view = view('admin.produtos.registro');

        $view->model = !is_null($id) ? Produtos::find($id) : null;

        return $view;
    }

    public function save(ProdutosRequest $request)
    {
        $cliente = Produtos::_save($request->all());

        return redirect()->route('admin-produtos');
    }

    public function delete($id)
    {
        Produtos::_delete($id);

        return redirect()->route('admin-produtos');
    }

}
