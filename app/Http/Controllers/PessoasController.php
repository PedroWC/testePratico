<?php

namespace App\Http\Controllers;

use App\Services\PessoasService;

// CAMADA CONTROLLER
class PessoasController extends Controller
{
    public function create()
    {
        return view('pessoas.create');
    }
    
    public function show ()
    {
        return view('pessoas.show');
    }

    public function edit($id)
    {
        return view('pessoas.update', ['id' => $id]);
    }

    public function delete(PessoasService $service, $row)
    {
        $a     = $service -> read();
        $array = json_decode($a);

        return view('pessoas.delete', array($array[$row]));
    }

}
