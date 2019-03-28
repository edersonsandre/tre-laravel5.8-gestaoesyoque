<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produtos extends Model
{
    use SoftDeletes;

    protected $table = "produtos";

    public static function _save(array $data)
    {
        $_data = !empty($data['id']) ? self::find($data['id']) : new Produtos();

        $_data->nome = $data['nome'];
        $_data->valor = $data['valor'];
        $_data->ativo = $data['ativo'];
        $_data->save();

        return $_data;
    }

    public static function _delete($id)
    {
        $_data = self::find($id);
        if (!empty($_data->id)) {
            $_data->ativo = 0;
            $_data->save();
        }

        return true;
    }

}
