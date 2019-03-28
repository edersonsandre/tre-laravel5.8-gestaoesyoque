<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use App\Model\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index()
    {
        $view = view('admin.clientes.index');

        $view->rows = Clientes::all();

        return $view;
    }

    public function registro($id = null)
    {
        $view = view('admin.clientes.registro');

        $view->model = !is_null($id) ? Clientes::find($id) : null;

        return $view;
    }

    public function save(ClientesRequest $request)
    {
        $cliente = Clientes::_save($request->all());

        return redirect()->route('admin-clientes');
    }

    public function delete($id)
    {
        Clientes::_delete($id);

        return redirect()->route('admin-clientes');
    }

}
