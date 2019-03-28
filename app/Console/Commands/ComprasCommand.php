<?php

namespace App\Console\Commands;

use App\Model\Compras;
use App\Model\Produtos;
use Illuminate\Console\Command;

class ComprasCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tre:compras';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lançamento automatico de compras';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $produtos = Produtos::where('ativo', 1)->get();
        foreach ($produtos AS $produto){
            $compras = new Compras();
            $compras->produto = $produto->id;
            $compras->quantidade =  rand(1, 10);

            $compras->save();
        }
    }
}
