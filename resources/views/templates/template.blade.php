<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Meta tags requiridas -->
    <meta charset="utf-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Exemplo de crud PHP</title>
    <script type="text/javascript" 
            src="http://code.jquery.com/jquery-1.7.2.min.js"></script> 
    <script>     
      function mascaraCPF(i){

          var v = i.value;
          
          // impede entrar outro caractere que não seja número
          if(isNaN(v[v.length-1])){ 
            i.value = v.substring(0, v.length-1);
            return;
          }
          
          i.setAttribute("maxlength", "14");
          if (v.length == 3 || v.length == 7) i.value += ".";
          if (v.length == 11) i.value += "-";

      }
      function mascaraData(i){
        var v = i.value;

        // impede entrar outro caractere que não seja número
        if(isNaN(v[v.length-1])){ 
          i.value = v.substring(0, v.length-1);
          return;
        }

        if (v.length == 2) i.value += ".";
        if (v.length == 5) i.value += ".";
      }
      function mascaraTel(i){
        var v = i.value;

        // impede entrar outro caractere que não seja número
        if(isNaN(v[v.length-1])){ 
          i.value = v.substring(0, v.length-1);
          return;
        }

        if (v.length == 1){
          var temp = i.value;
          i.value  = "(" + temp;
        }
        if (v.length == 3) i.value += ")";
        if (v.length == 9) i.value += "-";
      }
    </script>
  </head>
  <body class="bg-dark text-light">
    <div class="container">

      <div class='jumbotron bg-primary'>
        <h1>Unigran Capital</h1>
        <p>Exemplo de CRUD php com Laravel</p>
        <button onclick="window.location.href = '/create'" 
                class="btn btn-success">Adicionar</button>
      </div>

    </div>
    <div class="container">

      {{-- AQUI ENTRA O CORPO DA RESPECTIVA PÁGINA --}}
      @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>