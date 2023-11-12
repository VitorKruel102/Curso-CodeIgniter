<?php namespace App\Controllers\Loja;

use App\Libraries\Loja\Venda;
use CodeIgniter\Controller;


class Vendas extends Controller {
    protected $helpers = array('date', 'matematica');

    public function index() {
        $data["frase"] = adicionar(1, 5);

        $v = new Venda();
        $v->produto = 'Automovel';
        $v->preco = '100';

        return view("pagina1", $data);
    }
}