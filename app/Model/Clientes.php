<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use SoftDeletes;

    protected $table = "clientes";

    public static function _save(array $data)
    {
        $cliente = !empty($data['id']) ? self::find($data['id']) : new Clientes();

        $cliente->nome = $data['nome'];
        $cliente->cpf = $data['cpf'];
        $cliente->telefone = $data['telefone'];
        $cliente->email = $data['email'];
        $cliente->save();

        return $cliente;
    }

    public static function getByCpf($cpf)
    {
        $data = self::where('cpf', $cpf)->get();

        return !empty($data[0]) ? $data[0] : null;
    }

    public static function _delete($id)
    {
        $cliente = self::find($id);
        if (!empty($cliente->id)) {
            $cliente->delete();
        }

        return true;
    }

}
