<?php namespace App\Controllers\Loja;

use App\Libraries\Loja\Venda;
use CodeIgniter\Controller;


class Index extends Controller {
    protected $helpers = array('date', 'matematica');

    public function index() {
        $marcas = [
            'Audi',
            'Porsche',
            'Ferrari',
            'Mercedes',
        ];
        $data = [
            'marcas' => $marcas,
        ];

        $v = new Venda();
        $v->produto = 'Automovel';
        $v->preco = '100';

        return view("Loja\Pagina", $data, ["cache" => 60]);
    }
}