@extends('templates.template')

@section('content')
<!-- HTML QUE VAI DENTRO DO TEMPLATE -->
    <main>
        {{-- Input do filtro po Nomes --}}
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nome </span>
            </div>
            <input type="text" class="form-control" placeholder="Filtro por Nome" id="myInput" onkeyup="myFunction()" aria-describedby="basic-addon1"><br>
        </div>
        
        <table id="myTable" class="table">
            {{-- Cabeçalho da tabela --}}
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data</th>
                <th scope="col">Gênero</th>
                <th scope="col">Diferencial</th>
              </tr>
            </thead>
            <tbody>
<?php
    // Requisição GET para geração da tabela com cadastros das pessoas
    $url = 'https://www.unigran.br/campogrande/api/index.php/teste/tecnico';
    $pessoas = json_decode(file_get_contents($url));

    // Tabela de cadastros
    foreach($pessoas as $pessoa) :?>
        
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <th scope="row">{{ $pessoa->id }}</th>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pessoa->cpf }}</td>
            <td>{{ $pessoa->telefone }}</td>
            <td>{{ $pessoa->email }}</td>
            <td>{{ $pessoa->data_nascimento }}</td>
            <td>{{ $pessoa->genero }}</td>
            <td>{{ $pessoa->seu_diferencial }}</td>
        </tr>
        <?php endforeach;?>
            </tbody>
        </table>

    </main>
<!-- FIM DO HTML QUE VAI DENTRO DO TEMPLATE -->
@endsection