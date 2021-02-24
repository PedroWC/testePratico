@extends('templates.template')

@section('content')
<!-- HTML QUE VAI DENTRO DO TEMPLATE -->
    <main>
        {{-- Input do filtro por Nomes --}}
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nome </span>
            </div>
            <input type="text" class="form-control" oninput="myFunction()" placeholder="Filtro por Nome" id="myInput" aria-describedby="basic-addon1"><br>
        </div>


        <div class="table-reponsive">
            <table id="myTable" class="table">
                {{-- Cabeçalho da tabela --}}
                <thead>
                <tr>
                    <th scope="col">Opções</th>
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
    $row = 0;

    // Tabela de cadastros
    foreach($pessoas as $pessoa) :?>
            
            <tr>
                <td>
                    <div class="btn-group" role="group">
                        <button type="button" onclick="window.location.href = '/update/{{ $pessoa->id }}'" class="btn-secondary btn btn-info"  >Editar</button>
                        <button type="button" onclick="window.location.href = '/delete/{{ $pessoa->id }}'" @method('POST') class="btn-secondary btn btn-danger">Deletar</button>
                    </div>
                </td>
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
        </div>

        
    </main>
    <script>
        // Script de filtro por nome na tabela de cadastros
        function myFunction() {
            // Variáveis
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            
            // Percorre todas as linhas da tabela e oculta aquelas que não correspondem à consulta de pesquisa
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                }
                else {
                    tr[i].style.display = "none";
                }
                }
            }
        }
    </script>
<!-- FIM DO HTML QUE VAI DENTRO DO TEMPLATE -->
@endsection