<?php

namespace App\Observers;

use App\Model\Compras;
use App\Model\Estoque;

class ComprasObserver
{

    public function saved(Compras $data){
        $estoque = Estoque::getByProduto($data->produto);

        $_estoque = !is_null($estoque) ? $estoque : new Estoque();
        $_estoque->quantidade = intval($_estoque->quantidade) + $data->quantidade;
        $_estoque->produto = $data->produto;
        $_estoque->save();
    }


}
