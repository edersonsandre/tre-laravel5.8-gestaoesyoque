<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientesRequest;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public function index(){
        $view = view('admin.clientes.index');

        return $view;
    }

    public function registro($id = null){
        $view = view('admin.clientes.registro');

        $view->model = null;

        return $view;
    }
    
    public function save(ClientesRequest $request){

        exit("<pre>" . print_r($request->all(), true) . "</pre>");
    }

}
