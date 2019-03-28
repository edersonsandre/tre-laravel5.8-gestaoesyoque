<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compras extends Model
{
    use SoftDeletes;

    protected $table = "compras";

}
