<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index(): string
    {
        $data["frase"] = 'Uma frase';

        return view('pagina1', $data);
    }
}
