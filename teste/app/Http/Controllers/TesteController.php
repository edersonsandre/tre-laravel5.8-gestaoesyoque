<?php

namespace App\Http\Controllers;



use App\Model\Teste;
use Illuminate\Support\Facades\Route;

class TesteController extends Controller
{
    public function index($id = null){
        //return "ID: ".$id;
        return redirect()->route('listagem');
    }

    public function listagem(){

        $view = view("listagem");

        $view->rows = Teste::all();

        return $view;



        $testes = Teste::all();

        echo "<pre>";
        print_r($testes->toArray());
        die;

    }
}
