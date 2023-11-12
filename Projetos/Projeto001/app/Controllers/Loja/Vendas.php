<?php namespace App\Controllers\Loja;

use CodeIgniter\Controller;

class Vendas extends Controller {
    protected $helpers = array('date', 'matematica');

    public function index() {
        $data["frase"] = adicionar(1, 5);
        
        return view("pagina1", $data);
    }
}