<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estoque extends Model
{
    use SoftDeletes;

    protected $table = "estoque";

    public static function getByProduto($produto)
    {
        $data = self::where('produto', $produto)->get();

        return !empty($data[0]) ? $data[0] : null;
    }

    public static function getEstoqueByProduto($produto)
    {
        $data = self::where('produto', $produto)->get();

        return !empty($data[0]) ? $data[0]->quantidade : 0;
    }

}
