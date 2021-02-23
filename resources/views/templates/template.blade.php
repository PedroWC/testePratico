<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta tags requiridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    {{-- Script de filtro por nome na tabela de cadastros --}}
    <script>
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
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      </script>


    <title>Exemplo de crud PHP</title>
  </head>
  <body class="bg-dark text-light">
    <div class="container">

      <div class='jumbotron bg-info'>
        <h1>CreateReadUpdateDelete PHP</h1>
        <p>Exemplo de CRUD com laravel</p>
        <button onclick="window.location.href = '/pessoas/create'" class="btn btn-success">Adicionar</button>
        <button class="btn btn-primary">Editar</button>
        <button class="btn btn-danger">Excluir</button>
      </div>

    </div>
    <div class="container">

      {{-- AQUI ENTRA O CORPO DA RESPECTIVA PÁGINA --}}
      @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>