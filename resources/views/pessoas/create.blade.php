@extends('templates.template')

@section('content')
<!-- HTML QUE VAI DENTRO DO TEMPLATE -->
    <main>

        <form class="form-group" action="{{ route('cadastrar_pessoa', $_POST) }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <label for="">Nome</label><br>
            <input class="form-control" type="text" name="nome" placeholder="Ex: Fulano de Tal"><br>

            <label for="">CPF</label><br>
            <input class="form-control" type="text" name="cpf" oninput="mascara(this)" placeholder="Ex: 999.999.999-99"><br>

            <label for="">Telefone</label><br>
            <input class="form-control" type="text" placeholder="Ex: (67)99666-6666"><br>

            <label for="">E-mail</label><br>
            <input class="form-control" type="email" name="email" placeholder="Ex: deTalFulano@gmail.com"><br>

            <label for="">Data de Nascimento</label><br>
            <input class="form-control" type="date" data-date-format="DD.MM.YYYY" name="data_nascimento"><br>

            <label for="">Gênero</label><br>
            <select class="form-control" name="genero">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select><br>

            <label for="exampleFormControlTextarea1">Seu Diferencial</label><br>
            <textarea class="form-control" name="seu_diferencial" id="exampleFormControlTextarea1" rows="3"></textarea><br>

            <button class="btn btn-primary btn-lg btn-block">Salvar</button>
        </form>

    </main>

    {{-- Função Javascript para formatar campo de CPF enquanto está sendo digitado --}}
    <script>
      function mascara(i){
   
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
    </script>
<!-- FIM DO HTML QUE VAI DENTRO DO TEMPLATE -->
@endsection