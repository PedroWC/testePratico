<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    // CONTROLLER
    public function create()
    {
        return view('pessoas.create');
    }
    public function show ()
    {
        return view('pessoas.show');
    }
    public function edit()
    {
        
    }

    // SERVICE
    public function store()
    {
        $retirar_id = array_shift($_POST);
        $data_string = json_encode($_POST);

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data_string,
        ]);
                                                                                                                         
        $result = curl_exec($ch);
        curl_close($ch);
        dd($result);
    }
    public function read()
    {
        $url = 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico';
        $pessoas = json_decode(file_get_contents($url));

        return $pessoas;
    }
    public function update()
    {

    }

}
