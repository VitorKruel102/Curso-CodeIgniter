<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index(): string
    {
        $data["frase"] = 'Uma frase';

        return view('pagina1', $data);
    }

    public function interno() { 
        // Não pode ser acessada fora da class,
        // Se a método for publica, conseguimos 
        // acessar pela url o método
        echo 'Interno';
    }
}
