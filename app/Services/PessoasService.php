<?php

namespace App\Services;

use Illuminate\Http\Request;

// CAMADA SERVICE
// Crud e regras de negócio
class PessoasService
{
    // Função de cadastro (envio de requisições POST)
    public function store ($data)
    {
        array_shift($data);
        $campos    = json_encode($data);
        $uri       = 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico';
        $cabecalho = array('Content-Type: application/json', 'Accept: application/json');
        
        $ch = curl_init();
        

        $opts = [
            CURLOPT_URL            => $uri,
            CURLOPT_HTTPHEADER     => $cabecalho,
            CURLOPT_POSTFIELDS     => $campos,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_SSL_VERIFYPEER => false,
        ];

        curl_setopt_array($ch, $opts);
        $response = curl_exec($ch);
        
        curl_close($ch);

        return print("Cadastro de usuário registrado com sucesso! Volte para https://localhost:port/");
    }
    // Função de leitura dos cadastros (envio de requisição GET)
    public function read ()
    {
        $uri  = 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico/';
        $ch   = curl_init();
        $opts = [
            CURLOPT_URL            => $uri,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
        ];
        curl_setopt_array($ch, $opts);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response);

    }
    // Função de Atualização dos cadastros (envio de requisição PUT)
    public function update ($data, $id)
    {
        array_shift($data);
        $campos    = json_encode($data);
        $uri       = 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico/' . $id;
        $cabecalho = array('Content-Type: application/json', 'Accept: application/json');
        
        $ch = curl_init();
        
        $opts = [
            CURLOPT_URL            => $uri,
            CURLOPT_HTTPHEADER     => $cabecalho,
            CURLOPT_POSTFIELDS     => $campos,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_CUSTOMREQUEST  => 'PUT',
            CURLOPT_SSL_VERIFYPEER => false,
        ];

        curl_setopt_array($ch, $opts);
        $response = curl_exec($ch);
        
        curl_close($ch);

        return print("Cadastro de usuário atualizado com sucesso! Volte para https://localhost:port/");
    }
    // Função de exclusão de cadastro (envio de requisição DELETE)
    public function destroy ($id)
    {
        $uri  = 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico/' . $id;

        $ch   = curl_init();

        $opts = [
            CURLOPT_URL            => $uri,
            CURLOPT_CUSTOMREQUEST  => "DELETE",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true,
        ];
        curl_setopt_array($ch, $opts);
        $response = curl_exec($ch);
        curl_getinfo($ch, CURLINFO_HTTP_CODE);
        
        curl_close($ch);
        
        return print("Cadastro de usuário deletado com sucesso! Volte para https://localhost:port/");
    }
}